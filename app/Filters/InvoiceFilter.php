<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoiceFilter extends ApiFilter {

    protected $safeParams = [
        'customerId' => ['eq'],
        'amaount' => ['eq','gt','gte','lt','lte'],
        'status' => ['eq','ne',], 
        'billeDate' => ['eq','gt','gte','lt','lte'],
        'paidDate' => ['eq','gt','gte','lt','lte'],
      
    ];
    
    protected $columMap = [
        'customerId' => 'customer_id',
        'billDate' => 'bill_date',
        'paidDate' => 'paid_date'
    ];
    
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte'=> '>=',
        'ne' => '!='
    ];    
}