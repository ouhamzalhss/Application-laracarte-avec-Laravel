<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class helpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHelpers_get_title()
    {
    	dd(page_title('Home'));
        $this->assertTrue(true);
    }
}
