<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 18:02
 */

namespace InDepth\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class AbstractPost extends Model {

	const CREATED_AT = 'post_date';
	const UPDATED_AT = 'post_modified';
	protected $primaryKey = 'ID';
	protected $table = 'posts';

	final public static function getPost( $post = null ) {
		$post = $post ?: get_post();

		switch ( $post->post_type ) {
			case 'post':
				return  Post::find($post->ID);
				break;
			case 'page' :
				return Page::find( $post->ID );
				break;
			case 'attachment' :
				return Attachment::find( $post->ID );
				break;
			case 'revision' :
				return Revision::find( $post->ID );
				break;
			default :
				return new ModelNotFoundException;
		}
	}

	public function author() {
		return $this->belongsTo( User::class, 'post_author' );
	}

	public function metas() {
		return $this->hasMany( PostMeta::class );
	}
}