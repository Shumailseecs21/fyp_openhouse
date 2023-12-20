<?php

namespace Database\Seeders;

use App\Models\FYPGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FYPGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        FYPGroup::factory(6)->create();
    }
}
