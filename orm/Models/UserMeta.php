<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 17:27
 */

namespace InDepth\ORM\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $user
 * @property int $umeta_id
 */
class UserMeta extends Model {

	protected $primaryKey = 'umeta_id';

	protected $table = 'usermeta';

	public $timestamps = false;

	public function user() {
		return $this->belongsTo( User::class );
	}
}