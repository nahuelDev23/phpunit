<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsersCanCreateStatusesTest extends DuskTestCase
{
    /**
     * @test
     * @return void
     */
    public function users_can_create_statuses()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('body',"Mi primer status")
                    ->press('#create-status')
                    ->screenshot('create-status')
                    ->assertSee('Mi primer status');
        });
    }
}
