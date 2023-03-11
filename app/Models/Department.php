<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property string $name
 * @property int $schoolid
 * @property int $totalnoofmedals
 * @property int $status
 * @property int $created_by
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	public $incrementing = false;

	protected $casts = [
		'schoolid' => 'int',
		'totalnoofmedals' => 'int',
		'status' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'name',
		'schoolid',
		'totalnoofmedals',
		'status',
		'created_by'
	];
}
