<?php
namespace ContinuousPHPTest;

use PHPUnit_Framework_TestCase as TestCase;
use ContinuousPHP\Foo;

class FooTest extends TestCase
{
    public function setUp()
    {
        $this->foo = new Foo();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf(Foo::class, $this->foo);
    }

    public function testBar()
    {
        $this->assertTrue($this->foo->bar());
    }
}
