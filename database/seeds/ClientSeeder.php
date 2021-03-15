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
                'name' => 'Alberta',
                'address' => 'Germany',
                'phone' => '09453673339',
                'capitalization' => 40000,
                'loan' => 20000
            ],
            [
                'name' => 'John Marta',
                'address' => 'UK',
                'phone' => '09485541601',
                'capitalization' => 800000,
                'loan' => 150000
            ],
            [
                'name' => 'Jurge bugwak',
                'address' => 'Panglao',
                'phone' => '508-9117',
                'capitalization' => 350000,
                'loan' => 700000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
