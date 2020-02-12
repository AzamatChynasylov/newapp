<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	
	protected $fillable = ['title', 'parent_id', 'published', 'level', 'created_by', 'modified_by', 'last_date'];

	public function children()
	{
		return $this->hasMany(self::class,'parent_id');
	}



}
