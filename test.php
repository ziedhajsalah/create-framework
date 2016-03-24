<?php

require_once __DIR__ . '/vendor/autoload.php';

/**
 *
 */
class IndexTest extends \PHPUnit_Framework_TestCase
{

    function testHello()
    {
        $_GET['name'] = 'Zied';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->$this->assertEquals('Hello Zied', $content);
    }
}
