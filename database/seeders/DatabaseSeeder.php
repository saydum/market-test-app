<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CustomerRequest;
use App\Models\ProductSeller;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->count(100)->create();
         CustomerRequest::factory()->count(100)->create();
         ProductSeller::factory()->count(100)->create();
    }
}
