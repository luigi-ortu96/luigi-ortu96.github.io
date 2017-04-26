<?php

namespace PHPUnit\Framework\Tests;

use \PHPUnit\Framework\DOMTestCase;

class IndexTest extends DOMTestCase
{

    private $html;

    protected function setUp()
    {
        $this->html = file_get_contents('index.html');
    }

    public function testRegExpContent()
    {
        $selector = 'h4.modal-title';
        $regexp   = '/title/';
        $this->assertSelectRegExp($selector, $regexp, true, $this->html);
    }
}
