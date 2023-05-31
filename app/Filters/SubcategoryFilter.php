<?php
namespace App\Filters;

class SubcategoryFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'name' => ['eq', 'neq'],
        'categoryId' => ['eq', 'neq']
    ];
    protected $columnMap = [
        'categoryId' => 'category_id'
    ];
}

?>
