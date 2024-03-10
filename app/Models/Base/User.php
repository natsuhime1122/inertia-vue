<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property uuid $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $role_id
 * 
 * @property Role $role
 *
 * @package App\Models\Base
 */
class User extends Model
{
	protected $table = 'users';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'email_verified_at' => 'datetime',
		'role_id' => 'int'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
