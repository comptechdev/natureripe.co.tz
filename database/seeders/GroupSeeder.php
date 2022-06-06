<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Group::create(["name" => "Hot Sauces"]);
        Group::create(["name" => "Sweet Sauces"]);
        Group::create(["name" => "Jams"]);
        Group::create(["name" => "Snacks"]);
    }
}
