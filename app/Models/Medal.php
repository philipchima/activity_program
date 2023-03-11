<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medal
 * 
 * @property int $medal_id
 * @property string $title
 * @property string $description
 * @property string $logo
 * @property int $schoolid
 * @property int $departmentid
 * @property int $stage
 * @property int $created_by
 * @property int $activity
 * @property int $creator_category
 * @property int $updated_at
 * @property int $created_at
 *
 * @package App\Models
 */
class Medal extends Model
{
	protected $table = 'medals';
	protected $primaryKey = 'medal_id';

	protected $casts = [
		'schoolid' => 'int',
		'departmentid' => 'int',
		'stage' => 'int',
		'activity' => 'int',
		'created_by' => 'int',
		'creator_category' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'logo',
		'schoolid',
		'departmentid',
		'stage',
		'activity',
		'created_by',
		'creator_category'
	];
}
