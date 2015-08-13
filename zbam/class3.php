<?php
/**
 * Created by PhpStorm.
 * User: m1
 * Date: 11.08.2015
 * Time: 00:28
 */
class A
{
    function foo() {
        if (isset($this)){
            echo '$this tanımlı';
            echo get_class($this) . "<br>";
        } else {
            echo "\$this tanımsız." . "<br>";
        }
    }
}

class B {
    function bar() {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();
?>