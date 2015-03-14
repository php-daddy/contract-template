<?php namespace PhpDaddy\Test;

use PhpDaddy\Contract\Singleton\AbstractSingleton;
use PhpDaddy\Stub\SingletonChild;

class SingletonTest extends TestCase
{
    /** @test */
    public function should_instantiate()
    {
        $firstInstance = SingletonChild::getInstance();

        $this->assertInstanceOf(
            'PhpDaddy\Contract\Singleton\Singleton',
            $firstInstance
       );
    }

    /** @test */
    public function should_have_the_same_instance()
    {
        $firstInstance = SingletonChild::getInstance();
        $secondInstance = SingletonChild::getInstance();

        $this->assertInstanceOf(
            'PhpDaddy\Contract\Singleton\Singleton',
            $firstInstance
        );
        $this->assertInstanceOf(
            'PhpDaddy\Contract\Singleton\Singleton',
            $secondInstance
        );
        $this->assertSame($firstInstance, $secondInstance);
    }
}
