<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lesson::truncate();

        Model::unguard();

        $this->call('LessonsTableSeeder');

        Model::reguard();
    }
}
