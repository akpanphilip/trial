<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            [
                'mobile' => '+2348188776655',
                'email' => 'example@gmail.com',
                'address' =>
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aliquid, dolor minima sint ratione autem eligendi itaque harum perferendis assumenda.',
            ],
        ]);
    }
}
