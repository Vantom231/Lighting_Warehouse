<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Oświetlenie domowe']);
        Category::create(['name' => 'Oświetlenie ogrodowe']);
        Category::create(['name' => 'Oświetlenie przemysłowe']);
        Category::create(['name' => 'źródła światła']);
        Category::create(['name' => 'inne']);
    }
}
