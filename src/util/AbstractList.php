<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;

abstract class AbstractList extends \ArrayObject
{
    public function __construct($input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        foreach ($input as $key => $value) {
            $this->validateValue($value);
        }
        parent::__construct($input, $flags, $iterator_class);
    }

    private function validateValue($value)
    {
        $type = $this->getListElementType();
        if(!$value instanceof $type) {
            throw new \InvalidArgumentException($this->getListElementType().
                "-List is not allowed to contain elements of type \"".gettype($type));
        }
    }

    public function offsetSet($index, $newval)
    {
        $this->validateValue($newval);
        parent::offsetSet($index, $newval);
    }

    public function append($value)
    {
        $this->validateValue($value);
        parent::append($value);
    }

    abstract function getListElementType();
}