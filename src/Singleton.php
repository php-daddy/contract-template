<?php namespace PhpDaddy\Contract\Singleton;

/**
 * Singleton Interface
 *
 * @link http://www.phptherightway.com/pages/Design-Patterns.html
 */
interface Singleton
{
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @staticvar Singleton $instance The *Singleton* instances of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance();

}
