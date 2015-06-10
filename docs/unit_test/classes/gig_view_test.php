<?php
//gig_view_test.php

require_once(dirname(__FILE__) . '/../settings.php');
require_once(dirname(__FILE__) . '/../simpletest/web_tester.php');
require_once(dirname(__FILE__) . '/../simpletest/autorun.php');

class GigViewTests extends WebTestCase
{
    function testGigView_ShowView_ViewSuccessful()
    {
        $this->assertTrue($this->get(VIRTUAL_PATH . 'index.php/gig/view/1'));
        $this->assertResponse(200);

        $this->assertText("GigID");
        $this->assertText("Gig Title");
        $this->assertText("Type");
        $this->assertText("Description");
        $this->assertText("Responsibilities");
        $this->assertText("Requirements");
        $this->assertText("Company Name");
        $this->assertText("Contact Name");
        $this->assertText("Contact Phone");
        $this->assertText("Contact Email");
        $this->assertText("Date Added");
        $this->assertText("Closing Date");
        $this->assertText("Status");
        $this->assertText("Special Instructions");
        $this->assertText("Last Updated");
    }
}