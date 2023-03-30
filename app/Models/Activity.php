<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @property int $activity_id
 * @property string $title
 * @property string $description
 * @property string $logo
 * @property int $medalid
 * @property int $stage
 * @property int $status
 * @property int $nooftask
 * @property int $created_by
 * @property int $creator_category
 * @property int $updated_at
 * @property int $created_at
 *
 * @package App\Models
 */
class Activity extends Model
{
	protected $table = 'activity';

	protected $casts = [
		'medalid' => 'int',
		'stage' => 'int',
		'status' => 'int',
		'nooftask' => 'int',
		'created_by' => 'int',
		'creator_category' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'logo',
		'medalid',
		'stage',
		'status',
		'nooftask',
		'created_by',
		'creator_category'
	];

    public function medal()
    {
        return  $this->belongsTo(Medal::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
