<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

test('Database health check', function () {
    try {
        DB::connection('sqlite')->getPdo();
        $this->assertTrue(true, 'Database connection is healthy');
    } catch (QueryException $e) {
        $this->fail('Database connection failed: ' . $e->getMessage());
    }
});
