<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 * 
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $status
 * @property int $schoolid
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property int $created_by
 *
 * @package App\Models
 */
class Teacher extends Model
{
	protected $table = 'teachers';
	public $incrementing = false;

	protected $casts = [
		'schoolid' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'firstname',
		'lastname',
		'address',
		'phone',
		'email',
		'status',
		'schoolid',
		'created_by'
	];
}
