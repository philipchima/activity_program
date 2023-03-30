<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class School
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $city_id
 * @property string $logo
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $created_by
 * @property string $slogan
 * @property int $status
 * @property string $website
 *
 * @package App\Models
 */
class School extends Model
{
    use HasFactory;
	protected $table = 'schools';

	protected $casts = [
		'city_id' => 'int',
		'created_by' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'city_id',
		'logo',
		'created_by',
		'slogan',
		'status',
		'website'
	];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
