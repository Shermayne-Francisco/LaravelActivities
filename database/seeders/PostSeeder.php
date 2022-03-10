<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('posts')->insert([
            'title' => 'Post Title Sample',
            'description' => 'Description Sample',
            'created_at' => Carbon::now()
        ]);
    }
}
