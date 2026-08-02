<?php

use Illuminate\Support\Facades\DB;

describe('todolist page', function () {
    it('shows saved descriptions from the database', function () {
        DB::table('todolist')->insert([
            'description' => 'Test description',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->get('/todolist');

        $response->assertOk();
        $response->assertSee('Test description');
    });
});
