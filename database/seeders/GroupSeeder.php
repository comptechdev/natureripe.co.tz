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
        Group::create(["name" => "Pickles & Sauce"]);
        Group::create(["name" => "Cashewnuts"]);
        Group::create(["name" => "Fruit Jams"]);
        Group::create(["name" => "Butter"]);
        Group::create(["name" => "Honey"]);
    }
}
