<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()->count(30)->hasOrderToProducts(2)->hasOrderToUsers(1)->create();
        Order::factory()->count(30)->hasOrderToProducts(3)->hasOrderToUsers(1)->create();
    }
}
