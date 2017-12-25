<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 18:03
 */

namespace InDepth\ORM\Models;


use InDepth\ORM\Scopes\PageScope;

/**
 * @property mixed $attachments
 */
class Page extends AbstractPost {
	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot() {
		parent::boot();

		static::addGlobalScope( new PageScope() );
	}

	public function attachments() {
		return $this->hasMany( Attachment::class, 'post_parent' );
	}
}