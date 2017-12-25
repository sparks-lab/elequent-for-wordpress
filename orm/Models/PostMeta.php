<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 17:16
 */

namespace InDepth\ORM\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $post
 * @property int $meta_id
 */
class PostMeta extends Model {

	protected $primaryKey = 'meta_id';

	protected $table = 'postmeta';

	public $timestamps = false;

	public function post() {
		return $this->belongsTo( Post::class );
	}
}