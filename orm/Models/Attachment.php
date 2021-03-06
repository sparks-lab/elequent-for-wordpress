<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 18:16
 */

namespace InDepth\ORM\Models;


use InDepth\ORM\Scopes\AttachmentScope;

class Attachment extends AbstractPost {

	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot() {
		parent::boot();

		static::addGlobalScope( new AttachmentScope() );
	}

	public function attachable() {
		if (  null !== Post::find( $this->post_parent )  ){
			return $this->belongsTo( Post::class, 'post_parent' );
		}

		return $this->belongsTo( Page::class, 'post_parent' );
	}
}