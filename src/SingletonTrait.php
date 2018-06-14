<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace AntiPatterns\Singleton;

/**
 * Trait SingletonTrait
 * @package AntiPatterns\Singleton
 */
trait SingletonTrait
{

    /**
     * @var Singleton
     */
    protected static $instance;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __sleep()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __wakeup()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __clone()
    {
    }
}
