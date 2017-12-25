<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 18:50
 */

namespace InDepth\ORM\Models;


use InDepth\ORM\Scopes\RevisionScope;

/**
 * @property mixed $revisable
 */
class Revision extends AbstractPost {
	protected static function boot() {
		parent::boot();

		static::addGlobalScope( new RevisionScope() );
	}

	public function revisable() {
		if (  null !== Post::find( $this->post_parent )  ){
			return $this->belongsTo( Post::class, 'post_parent' );
		}

		return $this->belongsTo( Page::class, 'post_parent' );
	}
}