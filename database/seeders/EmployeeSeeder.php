<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'Yumar Shidiq',
            'email' => 'yumar.s@cycle.com',
            'phone_number' => '089765431267',
            'address' => 'Griya Matahari Regency Blok H1 Gresik',
            'position' => 'Founder',
            'start_date' => '2019-04-20',
        ]);

        Employee::create([
            'name' => 'Nindia Fatimah',
            'email' => 'n.Fatimah@cycle.com',
            'phone_number' => '086789012845',
            'address' => 'Jalan Siti Fatimah No 5F Gresik',
            'position' => 'Manager',
            'start_date' => '2019-04-20',
        ]);

        Employee::create([
            'name' => 'Imamah Kaniya',
            'email' => 'ima.k@cycle.com',
            'phone_number' => '085608923106',
            'address' => 'Griya Kencana Regency Blok C5 Gresik',
            'position' => 'Marketing',
            'start_date' => '2019-04-20',
        ]);

        Employee::create([
            'name' => 'Akhmad Basam',
            'email' => 'a.basam@cycle.com',
            'phone_number' => '0869076512389',
            'address' => 'Jalan Imam Bonjol No 76 Gresik',
            'position' => 'Cashier',
            'start_date' => '2019-04-20',
        ]);


    }
}
