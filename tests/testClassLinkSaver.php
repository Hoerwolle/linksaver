<?php
use PHPUnit\Framework\TestCase;

class LinkSaverTest extends TestCase
{
    public function testConstructClass()
    {
        $linksaver = new LinkSaver();
        $this->assert(is_Class($linksaver, "LinkSaver"));
    }
    
}

