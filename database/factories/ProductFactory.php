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

    private $productDescription = [
        [1, 'Lampa Wisząca czarna', 'Klasyczna lampa wisząca w kolorze czarnym, idealna do nowoczesnych wnętrz.'],
        [2, 'Lampa Wisząca biała', 'Elegancka lampa wisząca w kolorze białym, nadająca się do różnych stylów aranżacji.'],
        [3, 'Lampa Wisząca niebieska', 'Oryginalna lampa wisząca w kolorze niebieskim, dodająca pomieszczeniu wyrazistości.'],
        [4, 'Lampa stojąca czarna', 'Stylowa lampa stojąca w kolorze czarnym, doskonała jako oświetlenie przy fotelu czy w narożniku.'],
        [5, 'Lampa stojąca biała', 'Nowoczesna lampa stojąca w kolorze białym, zapewniająca jasne i równomierne światło.'],
        [6, 'Lampa stojąca niebieska', 'Intrygująca lampa stojąca w kolorze niebieskim, nadająca wnętrzu unikalnego charakteru.'],
        [7, 'Lampa na ścianę czarna', 'Efektowna lampa na ścianę w kolorze czarnym, idealna do oświetlania przejść i korytarzy.'],
        [8, 'Lampa na ścianę biała', 'Praktyczna lampa na ścianę w kolorze białym, doskonała do czytania czy pracy biurowej.'],
        [9, 'Lampa na ścianę niebieska', 'Nastrojowa lampa na ścianę w kolorze niebieskim, tworząca przyjemny nastrój w pomieszczeniu.'],
        [10, 'Lampka na biurko czarna', 'Elegancka lampka na biurko w kolorze czarnym, zapewniająca optymalne oświetlenie do pracy.'],
        [11, 'Lampka na biurko biała', 'Funkcjonalna lampka na biurko w kolorze białym, dostosowana do potrzeb codziennego użytkowania.'],
        [12, 'Lampka na biurko niebieska', 'Żywiołowa lampka na biurko w kolorze niebieskim, nadająca energii i kreatywności.'],
        [13, 'Lampka nocna czarna', 'Stylowa lampka nocna w kolorze czarnym, doskonała do sypialni czy pokoju dziecięcego.'],
        [14, 'Lampka nocna biała', 'Delikatna lampka nocna w kolorze białym, tworząca przyjemną atmosferę relaksu przed snem.'],
        [15, 'Lampka nocna niebieska', 'Spokojna lampka nocna w kolorze niebieskim, pomagająca w stworzeniu sprzyjającego snu otoczenia.'],
        [16, 'Lampka "lava" czarna', 'Efektowna lampka "lava" w kolorze czarnym, ożywiająca przestrzeń swoim nietypowym designem.'],
        [17, 'Lampka "lava" biała', 'Stylowa lampka "lava" w kolorze białym, tworząca fascynujące efekty wizualne.'],
        [18, 'Lampka "lava" niebieska', 'Hipnotyzująca lampka "lava" w kolorze niebieskim, stanowiąca ciekawą dekorację wnętrza.'],
        [19, 'Lampa Wisząca czarna', 'Klasyczna lampa wisząca w kolorze czarnym, idealna do nowoczesnych wnętrz.'],
        [20, 'Lampa Wisząca biała', 'Elegancka lampa wisząca w kolorze białym, nadająca się do różnych stylów aranżacji.'],
        [21, 'Lampa Wisząca niebieska', 'Oryginalna lampa wisząca w kolorze niebieskim, dodająca pomieszczeniu wyrazistości.'],
        [22, 'Lampa stojąca czarna', 'Stylowa lampa stojąca w kolorze czarnym, doskonała jako oświetlenie przy fotelu czy w narożniku.'],
        [23, 'Lampa stojąca biała', 'Nowoczesna lampa stojąca w kolorze białym, zapewniająca jasne i równomierne światło.'],
        [24, 'Lampa stojąca niebieska', 'Intrygująca lampa stojąca w kolorze niebieskim, nadająca wnętrzu unikalnego charakteru.'],
        [25, 'Lampa na ścianę czarna', 'Efektowna lampa na ścianę w kolorze czarnym, idealna do oświetlania przejść i korytarzy.'],
        [26, 'Lampa na ścianę biała', 'Praktyczna lampa na ścianę w kolorze białym, doskonała do czytania czy pracy biurowej.'],
        [27, 'Lampa na ścianę niebieska', 'Nastrojowa lampa na ścianę w kolorze niebieskim, tworząca przyjemny nastrój w pomieszczeniu.'],
        [28, 'lampka chodnikowa  LED czarna', 'Energooszczędna lampka chodnikowa LED w kolorze czarnym, zapewniająca bezpieczne oświetlenie na zewnątrz.'],
        [29, 'lampka chodnikowa  LED biała', 'Nowoczesna lampka chodnikowa LED w kolorze białym, doskonała do podświetlania ścieżek i ogrodów.'],
        [30, 'lampka chodnikowa  LED niebieska', 'Efektowna lampka chodnikowa LED w kolorze niebieskim, nadająca elegancji i wyrazistości otoczeniu.'],
        [31, 'Lampa LED przemysłowa czarna', 'Wytrzymała lampa LED przemysłowa w kolorze czarnym, idealna do magazynów i hal produkcyjnych.'],
        [32, 'Lampa LED przemysłowa biała', 'Mocna lampa LED przemysłowa w kolorze białym, zapewniająca intensywne i skoncentrowane światło.'],
        [33, 'Lampa LED przemysłowa niebieska', 'Efektowna lampa LED przemysłowa w kolorze niebieskim, tworząca unikalną atmosferę w przestrzeni przemysłowej.'],
        [34, 'Lampa warsztatowa czarna', 'Solidna lampa warsztatowa w kolorze czarnym, doskonała do pracy przy naprawach i rzemiośle.'],
        [35, 'Lampa warsztatowa biała', 'Praktyczna lampa warsztatowa w kolorze białym, zapewniająca silne i skierowane światło w miejscu pracy.'],
        [36, 'Lampa warsztatowa niebieska', 'Odporna lampa warsztatowa w kolorze niebieskim, zwiększająca widoczność podczas wykonywania zadań.'],
        [37, 'Halogen przemysłowy czarna', 'Potężny halogen przemysłowy w kolorze czarnym, zapewniający silne i rozproszone światło.'],
        [38, 'Halogen przemysłowy biała', 'Efektywny halogen przemysłowy w kolorze białym, nadający się do różnych zastosowań przemysłowych.'],
        [39, 'Halogen przemysłowy niebieska', 'Intensywny halogen przemysłowy w kolorze niebieskim, stosowany tam, gdzie potrzebne jest oświetlenie o specjalnym efekcie.'],
        [40, 'lampka na kask czarna', 'Praktyczna lampka na kask w kolorze czarnym, doskonała dla rowerzystów czy górników.'],
        [41, 'lampka na kask biała', 'Bezpieczna lampka na kask w kolorze białym, zwiększająca widoczność użytkownika w ciemnych warunkach.'],
        [42, 'lampka na kask niebieska', 'Funkcjonalna lampka na kask w kolorze niebieskim, stosowana w służbach ratowniczych i innych specjalistycznych zawodach.'],
        [43, 'żarówka biała', 'Standardowa żarówka w kolorze białym, zapewniająca miękkie i naturalne światło.'],
        [44, 'żarówka żółta', 'Przytulna żarówka w kolorze żółtym, tworząca ciepłą atmosferę w pomieszczeniach.'],
        [45, 'żarówka energooszczędna', 'Ekonomiczna żarówka energooszczędna, która zmniejsza zużycie energii elektrycznej.'],
        [46, 'żarówka biała wifi', 'Nowoczesna żarówka w kolorze białym z funkcją WiFi, pozwalająca na zdalne sterowanie oświetleniem.'],
        [47, 'żarówka żółta wifi', 'Atmosferyczna żarówka w kolorze żółtym z funkcją WiFi, umożliwiająca dostosowanie światła do nastroju.'],
        [48, 'żarówka rgb wifi', 'Wielokolorowa żarówka z funkcją WiFi, umożliwiająca zmianę oświetlenia w zależności od preferencji i potrzeb.'],
        [49, 'świetlówka biała', 'Jasna świetlówka w kolorze białym, idealna do oświetlenia biur, sklepów i innych przestrzeni.'],
        [50, 'świetlówka żółta', 'Stonowana świetlówka w kolorze żółtym, stwarzająca przytulną atmosferę w domu czy restauracji.'],
        [51, 'świtlówka niebieska', 'Oryginalna świetlówka w kolorze niebieskim, dodająca wnętrzu charakterystycznego akcentu.'],
        [52, 'taśma LED biała', 'Elastyczna taśma LED w kolorze białym, umożliwiająca tworzenie dekoracyjnego i funkcjonalnego oświetlenia.'],
        [53, 'taśma LED żółta', 'Efektowna taśma LED w kolorze żółtym, nadająca się do podświetlania mebli czy detali architektonicznych.'],
        [54, 'taśma LED RGB', 'Zmienna taśma LED w wielu kolorach, umożliwiająca tworzenie efektów oświetleniowych i atmosferycznych.'],
        [55, 'żarówka samochodowa', 'Praktyczna żarówka samochodowa, zastępująca uszkodzoną lub wyczerpaną żarówkę w samochodzie.'],
        [56, 'żarówka podświetlenia tablicy', 'Specjalna żarówka do podświetlania tablicy, zapewniająca czytelność i widoczność informacji.'],
        [57, 'żarówka LED podświtlenia tablicy', 'Energooszczędna żarówka LED do podświetlania tablicy, wydobywająca tekst czy grafiki w jasnym świetle.']
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
        $lumens = NULL;
        $energyOld = NULL;
        $energyNew = NULL;
        $colTempMin = NULL;
        $colTempMax = Null;
         $energy = [
            'A+++' => 'A',
            'A++' => 'B',
            'A+' => 'C',
            'A' => 'D',
            'B' => 'E',
            'C' => 'F',
            'D' => 'G'
        ];
        $this->counter++;


        if ($this->counter%3 == 1) $this->subcategoryCounter++;

        if ($this->counter < 42) {
            $base_material = $this->faker->randomElement(['drewno', 'metal', 'inne']);
            $lampshade_material = $this->faker->randomElement(['przezroczyste', 'półprzezroczyste', 'nieprzezroczyste']);
            $light_source_quantity = $this->faker->numberBetween(1,5);
        } else {
            $lumens = $this->faker->numberBetween(400,4000);
            $energyOld = $this->faker->randomElement(['A+++', 'A++', 'A+', 'A', 'B', 'C', 'D']);
            $energyNew = $energy[$energyOld];
            $colTempMin = $this->faker->numberBetween(1,12)*1000;
            $colTempMax = $this->faker->numberBetween(1,3)*10000;
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
            'lumens' => $lumens,
            'color_temperature_max' => $colTempMax,
            'color_temperature_min' => $colTempMin,
            'energy_class_old' => $energyOld,
            'energy_class_new' => $energyNew,
            'price' => $this->faker->numberBetween(2000,50000)/100,
            'description' => $this->productDescription[$this->counter-1][2]
        ];
    }
}
