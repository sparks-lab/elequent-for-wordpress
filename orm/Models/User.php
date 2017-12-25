<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 16:40
 */

namespace InDepth\ORM\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $comments
 * @property mixed $posts
 * @property int $ID
 */
class User extends Model {

	protected $primaryKey = 'ID';

	protected $fillable = [
		'display_name'
	];

	protected $hidden = [
		'user_pass',
		'user_activation_key'
	];

	public function posts() {
		return $this->hasMany( Post::class, 'post_author' );
	}

	public function comments() {
		return $this->hasMany( Comment::class );
	}
}