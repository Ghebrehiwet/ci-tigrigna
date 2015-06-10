<?php
//gig_add_test.php

require_once(dirname(__FILE__) . '/../settings.php');
require_once(dirname(__FILE__) . '/../simpletest/web_tester.php');
require_once(dirname(__FILE__) . '/../simpletest/autorun.php');

class GigAddTests extends WebTestCase
{
    function testGigAdd_SubmitFormValues_FormSubmitSuccessful()
    {
        $this->assertTrue($this->get(VIRTUAL_PATH . 'index.php/gig/add'));
        $this->assertResponse(200);

        $this->assertField("Title", "");
        $this->setField("Title", "Unit Tester");
        $this->assertField("Description", "");
        $this->setField("Description", "Unit test for gig_add_test.php");
        $this->assertField("GigNumber", "");
        $this->setField("GigNumber", "206");
        $this->assertField("Type", "");
        $this->setField("Type", "Test Time");
        $this->assertField("Term", "");
        $this->setField("Term", "Testing");
//        $this->assertField("StartDate", ""); //DATE WONT INSERT ACCURATELY
//        $this->setField("StartDate", "");
        $this->assertField("Responsibilities", "");
        $this->setField("Responsibilities", "Unit test");
        $this->assertField("PayRate", "");
        $this->setField("PayRate", "$206/hr");
        $this->assertField("CompanyName", "");
        $this->setField("CompanyName", "Gig Central");
        $this->assertField("CompanyURL", "");
        $this->setField("CompanyURL", "gig@website.com");
        $this->assertField("CompanyLogoURL", "");
        $this->setField("CompanyLogoURL", "gig@logourl.com");
        $this->assertField("ContactName", "");
        $this->setField("ContactName", "Tester");
        $this->assertField("ContactEmail", "");
        $this->setField("ContactEmail", "Tester@example.com");
        $this->assertField("ContactPhone", "");
        $this->setField("ContactPhone", "123-4567");
//        $this->assertField("ClosingDate", ""); //DATE WONT INSERT ACCURATELY
//        $this->setField("ClosingDate", "");
        $this->assertField("SpecialInstructions", "");
        $this->setField("SpecialInstructions", "Tester instructions");

        $this->clickSubmit("Add Gig");

        $this->assertResponse(200);
        $this->assertText("Gig successfully added!"); //alert success
    }
}