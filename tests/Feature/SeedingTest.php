<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

test('Database migration, seeding, and retrieving a person by ID', function () {
    // Command to invoke the migration and seeding
    $status_code = Artisan::call('migrate:fresh', ['--seed' => true]);

    // Check if the migration and seeding were successful
    $this->assertEquals(0, $status_code, 'The migration and seeding command failed.');

    // Retrieve the person with ID = 1
    $person = DB::table('people')->where('id', 1)->first();

    // Check if a person with ID = 1 exists
    $this->assertNotNull($person, "Person with ID 1 not found.");
});
