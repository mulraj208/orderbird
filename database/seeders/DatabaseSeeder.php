<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::factory( 1 )->create([
            'username' => 'admin@admin.com',
            'email'    => 'admin@admin.com',
        ]);
        Lead::factory( 100 )->create();
    }
}
