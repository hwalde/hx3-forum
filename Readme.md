# HX3 Forum

## Project goal

**Goal 1:** Provide a new version of HX3 Forum (http://hx3.de).

**Goal 2:** Lets create something awesome:
- Create the first **EU Copyright Directive compliant** forum software. 
- Use the new CSS grid standard to **display the contents in multi-column-layout** for better readability on larger devices.
- Make use of PHP 7 strict typing to improve robustness (strict typing prevents many bugs)
- Use development best practices, such as [Clean Code](https://www.oreilly.com/library/view/clean-code/9780136083238/) and [Design Patterns](https://en.wikipedia.org/wiki/Software_design_pattern)

## Current status

Milestone 1 has been reached.

**Milestone 1:**
* Display basic forum data (forums, threads, posts)
* Pages have the same URL as the present hx3 forum
* Basic layout and navigation
* Project setup, infrastructure and architecture

**Milestone 2:**
* Add attachments and smilies
* Users can write threads and posts
* Use login/logout and registration
* Use permission dependant display of forum data
* Provide an installer for this forum

Milestone 3 is open for discussion.

## Requirements
* Currently you need the database of an existing vBulletin version 3 forum.
This requirement will be removed in future.
* Apache 2.4 or higher
* PHP 7.3 or higher
* MySQL 5.7 or higher or MariaDB equivalent

## Installation
* Make sure Apache's AllowOverwrite option is set to ALL
* Copy composer.dist.php to config.php
* configure config.php 

## Contribution

I love contribution. I love communication. Feel free to ask me anything and feel free to contribute code. I'm sorry that this forum doesn't provide an installer yet. If I know there is a developer who wants to contribute it would significantly motivate me to provide an installer asap.

## Technical design

### Technical values
I have worked with countless systems and frameworks. And I had to maintain really ugly software. Its always written so fast, but then when changes need to be made everything becomes ugly.
The pain of maintaining ugly software over years told me what it means to create well crafted software the hard way.

From my experience the - by far - most important aspect of well crafted software is readability! And it is the hardest thing in the world as well. This is the point that makes software development an art by itself.

Other valuable aspects are:
- [Separation of concerns](https://en.wikipedia.org/wiki/Separation_of_concerns). Instead of writing complex files that do many things we write a class for every concern.
- Use strict typing at all costs. Strict typing avoids almost all bugs. Plus it enables auto-completion and refactoring. To make not just the PHP code save but the SQL as well we use POOQ(https://github.com/hwalde/pooq) for writing type-safe sql-queries. And we use List and Map-Objects in combination with Annotations to upgrade PHP with Generics as best as we can.
- Keeping it as simple as possible. Because every unnecessary feature adds adds complexity that needs to be maintained and understood.  
- Using names that developers understand ([Design Patterns](https://en.wikipedia.org/wiki/Software_design_pattern)) and clean naming for the non-technical part (=> [Ubiquitous Language](https://martinfowler.com/bliki/UbiquitousLanguage.html))
- Avoid the use of third party software - especially software with short update cycles such as frameworks - as you are bound to their update cycles. And their breaking changes break your application. Every library that is used needs to be behind an anti-corruption-layer.
- Use automated testing where it makes sense. For example I wrote an UnitTest that makes sure the URL generation of this
 forum generates the same urls as the original hx3 forum. 

I highly recommend to read the books [Clean Code](https://www.oreilly.com/library/view/clean-code/9780136083238/) and [Clean Architecture](https://www.oreilly.com/library/view/clean-architecture-a/9780134494272/). The first one is a must read for every developer. It ranks #1 in software for a reason. This book is important!

### Architecture

#### From HTTP-Request to HTTP-Response

1. The Apache Webserver reads the .htaccess files and redirects the HTTP-Request to index.php
2. index.php includes bootstrap.php which includes all necessary functionality - most notably the Autoloader - and establishes the database connection. 
3. index.php analyzes the Request-URL and calls the right Controller to handle the request
4. The Controller validates the Request data. Calls one or more Facades.
5. The Facade calls one or more Services to do the actual work and combines their result to give back to the controller what he asked for
6. Some Services call other Services or Repositories(for communicating with the database)
7. After the Controller received the answer from the Facade it generated the ViewModel and gives it to the View, telling the View to render
8. The View renders the HTTP-Response

They all communicate with each other in a strictly typed manner.

#### Global separation
We currently have a global separation into three main parts:
- Business logic (all files under src/businesslogic)
- Presentation (all files under src/presentation)
- Util (all files under src/util)

Business logic contains all functionality that is directly related to what is specific to what our forum does. So here you find all functionality regarding threads, posts, and so on.  

Presentation is the web-layer above the business logic. 

Util contains the "general" functionality, such as UBB2HTML-converter or the SEO-name-generator.

#### Presentation
We have three different types of classes/files:

**Controller**<br>
Controllers take the input, validate it and decide what to do.
Controllers does not contain business logic. Controllers communicate with the business-logic facades.
Controllers fill the ViewModel-object and give that object to the View.
In some cases the controller redirects to other controllers.

**ViewModel**<br>
This is a simple data-access-object that holds **all** information that the view needs to render the page.

**View**<br>
This is the template. Currently we use native PHP templates. (Did you know: PHP was once a template language for C.)
That is why PHP is quite good at this task. However many people don't like PHP templates because they don't look as nice as other template languages do. And that is true. They look ugly. Really ugly.
However they have a clear advantage that make up for that: They allow for auto-completion and refactoring.
Since our sourcecode is strictly typed from beginning to end we have a very tight software. 

#### Business logic

We have the following class types:

**Facade**<br>
Facades job is to take the information from many services and combine them.

**Service**<br>
Generate information. Provide business-specific functionality.
A lot of times they need information from the database.
To do that they ask the Repository for that information as they are not allowed to communicate with the database directly.

**Repository**<br>
Communicate with database

**Record**<br>
Represent a row from a database table

**RecordList**<br>
A list of Records

**Hydrator**<br>
Fills an data-access-object with values. 

<br>
Most of the remaining classes are data-acces-objects and their corresponding list-objects.


