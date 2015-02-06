<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Edition extends Eloquent {

	protected $fillable = ['name', 'slug', 'is_sample', 'published_at'];

	protected $dates = ['created_at', 'updated_at', 'published_at'];

	public static function findBySlug($slug, $includeUnpublished = false)
	{
		if($includeUnpublished)
		{
			$edition = static::where('slug', $slug)->first();	
		}
		else
		{
			$edition = static::published()
				->where('slug', $slug)
				->first();
		}

		if( ! is_null($edition)) return $edition;

		throw (new ModelNotFoundException)->setModel(get_called_class());
	}

	public static function getSample()
	{
		return static::published()
			->where('is_sample', true)
			->first();
	}

	public static function others($count = 5, $except = null)
	{
		if($except)
		{
			$query = static::published()->where('id', '<>', $except->id);
		}
		else
		{
			$query = static::published();
		}

		return $query->latest()->take($count)->get();
	}

	public static function nextTo($edition)
	{
		return static::published()
			->where('id', '>', $edition->id)
			->orderBy('id', 'asc')
			->first();
	}

	public static function previousTo($edition)
	{
		return static::published()
			->where('id', '<', $edition->id)
			->orderBy('id', 'desc')
			->first();
	}

	public static function publish($id)
	{
		// Find the unpublished edition
		$edition = static::unpublished()->findOrFail($id);

		// Publish it
		$edition->published_at = Carbon\Carbon::now();
		$edition->save();

		return $edition;
	}

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;
		$this->attributes['slug'] = Str::slug($name);
	}

	public function getUrlAttribute()
	{
		return Config::get('app.url') . '/editions/' . $this->slug;
	}

	public function scopeUnpublished($query)
	{
		return $query->whereNull('published_at');
	}

	public function scopePublished($query)
	{
		return $query->whereNotNull('published_at');
	}

}
