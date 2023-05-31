<?php
namespace App\Filters;

class UserFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'name' => ['eq', 'neq'],
        'firstName' => ['eq', 'neq'],
        'lastName' => ['eq', 'neq'],
        'pesel' => ['eq', 'neq'],
        'email' => ['eq', 'neq'],
        'emailVerifiedAt' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'mailingAddress' => ['eq', 'neq'],
        'companyName' => ['eq', 'neq'],
        'nip' => ['eq', 'neq'],
        'companyAddress' => ['eq', 'neq'],
        'companyMailingAddress' => ['eq', 'neq'],
        'accountType' => ['eq', 'neq'],

    ];
    protected $columnMap = [
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'emailVerifiedAt' => 'email_verified_at',
        'mailingAddress' => 'mailing_address',
        'companyName' => 'company_name',
        'companyAddress' => 'company_address',
        'companyMailingAddress' => 'company_mailing_address',
        'accountType' => 'account_type',
    ];
}

?>
