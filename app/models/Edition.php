<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Edition extends Eloquent {

	protected $fillable = ['name', 'slug', 'is_sample', 'published_at'];

	protected $dates = ['created_at', 'updated_at', 'published_at'];

	public static function findBySlug($slug)
	{
		$edition = static::where('slug', $slug)
					->whereNotNull('published_at')
					->first();

		if( ! is_null($edition)) return $edition;

		throw (new ModelNotFoundException)->setModel(get_called_class());
	}

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;
		$this->attributes['slug'] = Str::slug($name);
	}

}
