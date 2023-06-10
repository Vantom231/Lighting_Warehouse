<?php
namespace App\Filters;

class OrderFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'postDate' => ['eq', 'neq','lt', 'lte', 'gt', 'gte'],
        'acceptDate' => ['eq', 'neq','lt', 'lte', 'gt', 'gte'],
        'sendDate' => ['eq', 'neq','lt', 'lte', 'gt', 'gte'],
        'deliver' => ['eq', 'neq'],
        'deliverAddress' => ['eq', 'neq'],
        'invoice' => ['eq', 'neq'],
        'finished' => ['eq', 'neq']
    ];
    protected $columnMap = [
        'postDate' => 'post_date',
        'acceptDate' => 'accept_date',
        'sendDate' => 'send_date',
        'deliverAddress' => 'deliver_address',
    ];
}

?>
