<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace AntiPatterns\Singleton\Tests;

use AntiPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Singleton::class, Singleton::getInstance());
    }
}
