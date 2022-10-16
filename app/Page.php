<?php

namespace App;

class Page extends Model
{

    public $upload_path = 'uploads/pages';
	public $search_fields = [
        'title',
    ];

    public function getRouteKeyName() {
	    return 'slug';
	}

	public function scopeActive($query){
		return $query->where('status', 1);
	}
}
