<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 17:30
 */

namespace InDepth\ORM\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $post
 * @property mixed $user
 * @property int $comment_ID
 */
class Comment extends Model {

	protected $primaryKey = 'comment_ID';

	public function user() {
		return $this->belongsTo( User::class );
	}

	public function post() {
		return $this->belongsTo( Post::class );
	}
}