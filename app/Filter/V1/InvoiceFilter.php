<?php

namespace App\Filter\V1;

use Illuminate\Http\Request;
use App\Filter\ApiFilter;

class InvoiceFilter extends ApiFilter {
    // $table->integer('customer_id');
    // $table->integer('price');
    // $table->string('status');
    // $table->dateTime('billed_date');
    // $table->dateTime('paid_date')->nullable();
    protected $allowedParams = [
        'customer_id' => ['eq'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq'],
        'billed_date' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'paid_date' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap  = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'PaidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
        'ne' => '!=', 
    ];


    
    
}