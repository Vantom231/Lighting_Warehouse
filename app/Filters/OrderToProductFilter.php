<?php
namespace App\Filters;

class OrderToProductFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'productId' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'orderId' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'quantity' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
    ];
    protected $columnMap = [
        'productId' => 'product_id',
        'orderId' => 'order_id'
    ];
}

?>
