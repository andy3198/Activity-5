<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Gunner',
                'address' => 'Velika',
                'phone' => '0909090909090',
                'capitalization' => 20000,
                'loan' => 10000
            ],
            [
                'name' => 'Brawler',
                'address' => 'Kaiator',
                'phone' => '09090909',
                'capitalization' => 40000,
                'loan' => 300000
            ],
            [
                'name' => 'Valkyrie',
                'address' => 'Horizon',
                'phone' => '09090956565',
                'capitalization' => 50000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}

