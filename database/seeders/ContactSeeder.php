<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_tb')->insert([
            'Heading' => 'heading is here',
            'phone' => '+01-3-8888-6868',
            'address' => '60-49 Road 11378 New York',
            'opentime' => '10:00 am to 23:00 pm',
            'email' => 'contact@armanhosen.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        
    }
}
