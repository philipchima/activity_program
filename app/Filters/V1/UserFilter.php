<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class  UserFilter extends ApiFilter{
    protected $allowedParams = [
        'name' => ['eq'],
        'email' => ['eq'],
        'departmentId' => ['eq'],
    ];

    protected $columnMap = [
        'departmentId' => 'department_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte'=> '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

}
