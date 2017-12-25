<?php
/**
 * Created by Ahmed Dabak
 * Date: 25.12.2017
 * Time: 17:59
 */

namespace InDepth\ORM\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class RevisionScope implements Scope {

	/**
	 * Apply the scope to a given Eloquent query builder.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder $builder
	 * @param  \Illuminate\Database\Eloquent\Model $model
	 *
	 * @return void
	 */
	public function apply( Builder $builder, Model $model ) {
		$builder->where( 'post_type', 'revision' );
	}
}