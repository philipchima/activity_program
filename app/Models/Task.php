<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $task_id
 * @property string $title
 * @property string $description
 * @property string $logo
 * @property int $activityid
 * @property int $stage
 * @property int $status
 * @property int $noofupload
 * @property int $created_by
 * @property int $creator_category
 * @property int $updated_at
 * @property int $created_at
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'task';
	protected $primaryKey = 'task_id';

	protected $casts = [
		'activityid' => 'int',
		'stage' => 'int',
		'status' => 'int',
		'noofupload' => 'int',
		'created_by' => 'int',
		'creator_category' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'logo',
		'activityid',
		'stage',
		'status',
		'noofupload',
		'created_by',
		'creator_category'
	];
}
