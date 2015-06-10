<?php
//gig_index_test.php

require_once(dirname(__FILE__) . '/../settings.php');
require_once(dirname(__FILE__) . '/../simpletest/web_tester.php');
require_once(dirname(__FILE__) . '/../simpletest/autorun.php');

class GigIndexTests extends WebTestCase
{
    function testGigIndex_PageResponse200_RequestSuccessful()
    {
        $this->assertTrue($this->get(VIRTUAL_PATH . 'index.php'));
        $this->assertResponse(200);

        $this->assertLink('Gig Central Logo'); //logo to index page
        $this->assertLink('Add Gigs'); //nav add link
        $this->assertLink('List of Gigs'); //nav list link
    }
}