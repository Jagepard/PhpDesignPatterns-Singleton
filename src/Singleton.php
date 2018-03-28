<?php
/**
 * Date: 27.03.18
 * Time: 23:38
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace AntiPatterns\Singleton;


final class Singleton
{
    use SingletonTrait;

    /**
     * @var string
     */
    protected $className = "Singleton \n";

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }
}