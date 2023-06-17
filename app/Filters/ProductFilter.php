<?php
namespace App\Filters;

class ProductFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'subcategoryId' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'name' => ['eq', 'neq', 'like'],
        'height' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'width' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'baseMaterial' => ['eq', 'neq'],
        'lampshadeMateiral' => ['eq', 'neq'],
        'lightSource' => ['eq', 'neq'],
        'lightSourceConnectors' => ['eq', 'neq'],
        'lightSourceQuantity' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'power' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'price' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'lumens' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'colorTemperatureMax' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'colorTemperatureMin' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'description' => ['eq', 'neq']
    ];
    protected $columnMap = [
        'subcategoryId' => 'subcategory_id',
        'baseMaterial' => 'base_material',
        'lampshadeMateiral' => 'lampshade_material',
        'lightSource' => 'light_source',
        'lightSourceConnectors' => 'light_source_connectors',
        'lightSourceQuantity' => 'light_source_quantity',
        'colorTemperatureMax' => 'color_temperature_max',
        'colorTemperatureMin' => 'color_temperature_min',
    ];
}

?>
