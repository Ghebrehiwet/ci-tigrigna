<?php
//gig_mylist_test.php

require_once(dirname(__FILE__) . '/../settings.php');
require_once(dirname(__FILE__) . '/../simpletest/web_tester.php');
require_once(dirname(__FILE__) . '/../simpletest/autorun.php');

class GigMyListTests extends WebTestCase
{
    function testGigMyList_ShowList_ListSuccessful()
    {
        $this->assertTrue($this->get(VIRTUAL_PATH . 'index.php/gig/mylist'));
        $this->assertResponse(200);

        $this->assertText("GigID");
        $this->assertText("GigTitle");
        $this->assertText("Description");
        $this->assertLink('View Gig Details');
    }
}