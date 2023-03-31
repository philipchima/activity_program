<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class  DepartmentFilter extends ApiFilter{
    protected $allowedParams = [
        'name' => ['eq'],
        'schoolId' => ['eq'],
        'totalnoofmedals' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'createdBy' => ['eq'],
    ];

    protected $columnMap = [
        'schoolId' => 'schoolid',
        'totalNoOfMedals'=>'totalnoofmedals',
        'createdBy'=>'created_by'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte'=> '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}
