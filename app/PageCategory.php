<?php

namespace App;

class PageCategory extends Model
{
	public $search_fields = ['name'];
	
    public function scopeActive($query){
		return $query->where('status', 1);
	}
}
