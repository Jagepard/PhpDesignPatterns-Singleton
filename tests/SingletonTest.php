<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace AntiPatterns\Singleton\Tests;

use AntiPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class SingletonTest
 */
class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Singleton::class, Singleton::getInstance());
    }
}