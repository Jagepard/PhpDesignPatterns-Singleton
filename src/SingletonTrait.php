<?php
/**
 * Date: 27.03.18
 * Time: 23:28
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
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
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
    }

    public function __sleep()
    {
    }

    public function __wakeup()
    {
    }

    public function __clone()
    {
    }
}