<?php

use App\Category;
use App\Partition;
use App\Configuration;
use Illuminate\Database\Seeder;

class StarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::insert([[
            'key' => 'tel',
            'value' => '+2 0111 222 3333'
        ], [
            'key' => 'facebook_link',
            'value' => 'https://facebook.com'
        ], [
            'key' => 'twitter_link',
            'value' => 'https://twitter.com'
        ], [
            'key' => 'youtube_link',
            'value' => 'https://youtube.com'
        ], [
            'key' => 'instagram_link',
            'value' => 'https://youtube.com'
        ], [
            'key' => 'mail',
            'value' => 'support@classperfume.com'
        ],[
            'key' => 'about',
            'value' => 'The Company manufactures perfumes using the newest global technological means and working with the
                            latest automatic production lines beside tests.'
        ],[
            'key' => 'address',
            'value' => '11 st, Mohandseen, Giza, Egypt'
        ]]);

        Partition::insert([[
            'name' => 'Perfumes'
        ],[
            'name' => 'Spray'
        ],[
            'name' => 'Roll on'
        ],[
            'name' => 'Cleaner'
        ],[
            'name' => 'Pecticides'
        ]]);

        Category::insert([[
            'partition_id' => 1,
            'name' => 'Men'
        ],[
            'partition_id' => 1,
            'name' => 'Women'
        ],[
            'partition_id' => 2,
            'name' => 'Men'
        ],[
            'partition_id' => 2,
            'name' => 'Women'
        ],[
            'partition_id' => 3,
            'name' => 'New offers'
        ],[
            'partition_id' => 4,
            'name' => 'New offers'
        ],[
            'partition_id' => 5,
            'name' => 'New offers'
        ]]);
    }
}
