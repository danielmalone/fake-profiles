<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesControllerTest extends TestCase
{
	/** @test */
    public function it_displays_welcome_text()
    {
        $this->visit('/')
        	 ->see('Welcome! Fake Profiles this way...');
    }

    /** @test */
    public function it_displays_about_info() {
    	$this->visit('/about')
    		 ->see('About Daniel');
    }
}
