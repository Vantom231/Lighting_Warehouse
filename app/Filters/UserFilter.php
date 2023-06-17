<?php
namespace App\Filters;

class UserFilter extends Filter {
    protected $safeParms = [
        'id' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'name' => ['eq', 'neq', 'like'],
        'firstName' => ['eq', 'neq', 'like'],
        'lastName' => ['eq', 'neq', 'like'],
        'pesel' => ['eq', 'neq', 'like'],
        'email' => ['eq', 'neq', 'like'],
        'emailVerifiedAt' => ['eq', 'neq', 'lt', 'lte', 'gt', 'gte'],
        'mailingAddress' => ['eq', 'neq', 'like'],
        'companyName' => ['eq', 'neq', 'like'],
        'nip' => ['eq', 'neq', 'like'],
        'companyAddress' => ['eq', 'neq', 'like'],
        'companyMailingAddress' => ['eq', 'neq', 'like'],
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
