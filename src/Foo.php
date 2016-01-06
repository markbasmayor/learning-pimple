<?php
namespace MB;
class Foo {
    public $prop1;
    public $prop2;

    public function __toString() {
        return 'prop1: '.$this->prop1.', prop2:'.$this->prop2;
    }
}