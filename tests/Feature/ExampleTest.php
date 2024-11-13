<?php

it('GET / Returns a successful response.', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
