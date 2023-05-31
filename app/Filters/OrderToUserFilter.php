<?php
namespace App\Filters;

class OrderToUserFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'userId' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'orderId' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'role' => ['eq', 'neq'],
    ];
    protected $columnMap = [
        'userId' => 'user_id',
        'orderId' => 'order_id'
    ];
}

?>
