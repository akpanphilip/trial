<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepages')->insert([
            [
                'banner_heading' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, delectus.',
                'banner_paragraph' => 'Lorem ipsum dolor sit amet Corporis, delectus.',
                'left_side_section_text' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit.  Laboriosam sunt similique dolores debitis, facere at molestiae repellat ea.',
            ],
        ]);
    }
}
