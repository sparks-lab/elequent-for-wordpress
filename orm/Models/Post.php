<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 16:02
 */

namespace InDepth\ORM\Models;

use InDepth\ORM\Scopes\PostScope;

/**
 * @property mixed $attachments
 */
class Post extends AbstractPost {

	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot() {
		parent::boot();

		static::addGlobalScope( new PostScope() );
	}

	public function attachments() {
		return $this->hasMany( Attachment::class, 'post_parent' );
	}
}