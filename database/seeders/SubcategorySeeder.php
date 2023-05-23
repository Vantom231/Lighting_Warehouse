<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create(['name' => 'Lampy wiszące', 'category_id' => '1']);
        Subcategory::create(['name' => 'Lampy stojące', 'category_id' => '1']);
        Subcategory::create(['name' => 'Lampy naścienne', 'category_id' => '1']);
        Subcategory::create(['name' => 'Lampki na biurko', 'category_id' => '1']);
        Subcategory::create(['name' => 'Lampki nocne', 'category_id' => '1']);
        Subcategory::create(['name' => 'inne', 'category_id' => '1']);

        Subcategory::create(['name' => 'Lampy wiszące', 'category_id' => '2']);
        Subcategory::create(['name' => 'Lampy stojące', 'category_id' => '2']);
        Subcategory::create(['name' => 'Lampy naścienne', 'category_id' => '2']);
        Subcategory::create(['name' => 'inne', 'category_id' => '2']);

        Subcategory::create(['name' => 'Lampy LED przemysłowe', 'category_id' => '3']);
        Subcategory::create(['name' => 'Lampy warsztatowe', 'category_id' => '3']);
        Subcategory::create(['name' => 'Halogeny przemysłowe', 'category_id' => '3']);
        Subcategory::create(['name' => 'inne', 'category_id' => '3']);

        Subcategory::create(['name' => 'żarówki', 'category_id' => '4']);
        Subcategory::create(['name' => 'żarówki led', 'category_id' => '4']);
        Subcategory::create(['name' => 'świetlówki', 'category_id' => '4']);
        Subcategory::create(['name' => 'taśmy LED', 'category_id' => '4']);
        Subcategory::create(['name' => 'inne', 'category_id' => '4']);
    }
}
