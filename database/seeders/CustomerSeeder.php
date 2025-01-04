<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customer = Customer::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $customer->wallet()->create([
            'balance' => 5000.00,
        ]);
    }
}
