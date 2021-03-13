<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name'          => 'Theresa Ling',
            'address'       => 'Dao, Dauis, Bohol',
            'phone'         => '09123456789',
            'capitalization' => 45000,
            'loan'           => 1000
        ],

        [
            'name'          => 'Wanwan Tigreal',
            'address'       => 'Pondol,Loon,Bohol',
            'phone'         => '09897865437',
            'capitalization' => 5000,
            'loan'           => 2500
        ],

        [
            'name'          => 'Guinever Harith',
            'address'       => 'Panggangan,Calape,Bohol',
            'phone'         => '09897969890',
            'capitalization' => 5600,
            'loan'           => 2530
        ],

        [
            'name'          => 'Lesley Roger',
            'address'       => 'Cabulijan,Tubigon,Bohol',
            'phone'         => '09123452345',
            'capitalization' => 8500,
            'loan'           => 2000
        ],
        
    ];

    foreach($data as $client) {
        \App\Client::create($client);
    }
    }
}
