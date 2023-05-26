<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private $productsList = [
        'Lampa Wisząca czarna', 'Lampa Wisząca biała', 'Lampa Wisząca niebieska',
        'Lampa stojąca czarna', 'Lampa stojąca biała', 'Lampa stojąca niebieska',
        'Lampa na ściane czarna', 'Lampa na ściane biała', 'Lampa na ściane niebieska',
        'lampka na biurko czarna', 'lampka na biurko biała', 'lampka na biurko niebieska',
        'lampka nocna czarna', 'lampka nocna biała', 'lampka nocna niebieska',
        'lampka "lava" czarna', 'lampka "lava" biała', 'lampka "lava" niebieska',
        'Lampa Wisząca czarna', 'Lampa Wisząca biała', 'Lampa Wisząca niebieska',
        'Lampa stojąca czarna', 'Lampa stojąca biała', 'Lampa stojąca niebieska',
        'Lampa na ściane czarna', 'Lampa na ściane biała', 'Lampa na ściane niebieska',
        'lampka chodnikowa  LED czarna', 'lampka chodnikowa  LED biała', 'lampka chodnikowa  LED niebieska',
        'Lampa LED przemysłowa czarna', 'Lampa LED przemysłowa biała','Lampa LED przemysłowa niebieska',
        'Lampa warsztatowa czarna', 'Lampa warsztatowa biała', 'Lampa warsztatowa niebieska',
        'Halogen przemysłowy czarna', 'Halogen przemysłowy biała', 'Halogen przemysłowy niebieska',
        'lampka na kask czarna', 'lampka na kask biała', 'lampka na kask niebieska',
        'żarówka biała', 'żarówka żółta', 'żarówka energooszczędna',
        'żarówka biała wifi', 'żarówka żółta wifi', 'żarówka rgb wifi',
        'świetlówka biała', 'świetlówka żółta', 'świtlówka niebieska',
        'taśma LED biała', 'taśma LED żółta', 'taśma LED RGB',
        'żarówka samochodowa', 'żarówka podświetlenia tablicy', 'żarówka LED podświtlenia tablicy'
    ];
    private $counter = 0;
    private $subcategoryCounter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $base_material = NULL;
        $lampshade_material = NULL;
        $light_source_quantity = NULL;
        $this->counter++;

        if ($this->counter%3 == 1) $this->subcategoryCounter++;

        if ($this->counter < 42) {
            $base_material = $this->faker->randomElement(['drewno', 'metal', 'inne']);
            $lampshade_material = $this->faker->randomElement(['przezroczyste', 'półprzezroczyste', 'nieprzezroczyste']);
            $light_source_quantity = $this->faker->numberBetween(1,5);
        }


        return [
            'subcategory_id' => $this->subcategoryCounter,
            'name' => $this->productsList[$this->counter-1],
            'height' => $this->faker->numberBetween(0, 30),
            'width' => $this->faker->numberBetween(0, 30),
            'base_material' => $base_material,
            'lampshade_material' => $lampshade_material,
            'light_source' => 'brak informacji',
            'light_source_connectors' => 'brak informacji',
            'light_source_quantity' => $light_source_quantity,
            'power' => $this->faker->numberBetween(50,100),
            'price' => $this->faker->numberBetween(2000,50000)/100,
            'description' => $this->faker->text()
        ];
    }
}
