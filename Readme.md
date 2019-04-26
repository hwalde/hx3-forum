# HX3 Forum

## Development Guidelines
As all in all software projects it is necessary to keep some order.

Here are the guidlines we have established for this code base:

### No frameworks
We don't need them.

If we would use a framework then we would bound ourselves to their development. Being forced to update our code base as the framework needs it. (There comes a time when you cannot avoid updating the framework due some security issues. And there are always backward-incompatible breaks because framework developers love to innovate their product and are not motivated patching older versions. Its just the nature of us developers.)

Furthermore having no framework allows us to architecture our product to its cause (what it is), rather than some framework. And that improves readability as well.

Finally we remove the requirement to know the framework. Although some common frameworks are known to most developers, most is never all developers.

### No third-party libraries if possible
Lets avoid dependencies as best as we can, to make our software as independant as possible.

### No unneeded functionality (keep it simple instead)
We want to keep development as light and fun as possible.
So all unnecessary bloat is not welcome.
As developers we always love to create some great features. But most of times a simpler solution will just do fine.
And a simpler solution always is easier to understand for future developers and therefor easier to maintain.

### Use Robert C. Martins rules for clean code
Since code is read way more than it is written, it is important to improve code for readability.
In the book "Clean Code" by Robert C. Martin you can learn that properly.
This book is a must read for every developer.
If you can't afford the book or don't have the time, then at least watch this video:

### Use Robert C. Martins Clean Architecture
There is a book "Clean Architecture" out there. Good book. But to keep things simple:

The use case (business logic) shall not know anything about the way it gets presented of where its data is stores.

