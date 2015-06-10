<?php
//all_tests.php

require_once(dirname(__FILE__) . '/../settings.php');//settings like VIRTUAL_PATH & PHYSICAL_PATH
require_once(dirname(__FILE__) . '/../simpletest/web_tester.php');
require_once(dirname(__FILE__) . '/../simpletest/autorun.php');

class AllTests extends TestSuite
{
    function AllTests()
    {
        $this->TestSuite('All tests');
        $this->addFile('gig_add_test.php');
        $this->addFile('gig_index_test.php');
		$this->addFile('gig_mylist_test.php');
		$this->addFile('gig_view_test.php');
//		$this->addFile('.php');
    }
}