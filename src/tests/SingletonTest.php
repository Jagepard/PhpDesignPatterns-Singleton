<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use AntiPatterns\Singleton\Singleton;


/**
 * Class FactoryMethodTest
 */
class SingletonTest extends PHPUnit_Framework_TestCase
{

    protected function setUp(): void
    {

    }

    public function testInstance()
    {
        $this->assertInstanceOf(Singleton::class, Singleton::getInstance());
    }

    public function testClassName()
    {
        $this->assertEquals(Singleton::getInstance()->getClassName(), "Singleton \n");
    }
}