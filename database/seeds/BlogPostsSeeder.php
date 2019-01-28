<?php

use Illuminate\Database\Seeder;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogposts')->insert(
            ['title'=>'TestPosting1',
            'contents'=>'This is a posting',
            'visible'=>1]
        );
        DB::table('blogposts')->insert(
            ['title'=>'TestPosting2',
            'contents'=>'This is a posting - yeah',
            'visible'=>1]
        );
        DB::table('blogposts')->insert(
            ['title'=>'TestPosting3',
            'contents'=>'This is another posting',
            'visible'=>1]
        );
    }
}
