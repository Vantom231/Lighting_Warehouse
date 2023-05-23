<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    private $subcategory_list = [
        'Lampy wiszące',
        'Lampy stojące',
        'Lampy naścienne',
        'Lampki na biurko',
        'Lampki nocne',
        'inne',

        'Lampy wiszące',
        'Lampy stojące',
        'Lampy naścienne',
        'inne',

        'Lampy LED przemysłowe',
        'Lampy warsztatowe',
        'Halogeny przemysłowe',
        'inne',

        'żarówki',
        'żarówki led',
        'świetlówki',
        'taśmy LED',
        'inne'
    ];
    private $counter = 0;
    private $category_counter = 1;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->counter++;

        if ($this->counter == 7 ) $this->category_counter = 2;
        if ($this->counter == 11 ) $this->category_counter = 3;
        if ($this->counter == 15 ) $this->category_counter = 4;


        return [
            'name' => $this->subcategory_list[$this->counter-1],
            'category_id' =>$this->category_counter
        ];
    }
}
