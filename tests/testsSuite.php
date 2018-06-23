<?php

/**
 * Static test suite.
 */
class testsSuite extends PHPUnit_Framework_TestSuite
{

    /**
     * Constructs the test suite handler.
     */
    public function __construct()
    {
        $this->setName('testsSuite');
    }

    /**
     * Creates the suite.
     */
    public static function suite()
    {
        return new self();
    }
}

