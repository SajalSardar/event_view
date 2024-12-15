<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Define table 
     * @var string
     */
    protected $table = 'events';

    /**
     * Define fillable property
     * @var array
     */
    protected $fillable = ['title', 'description', 'details', 'organizer_id', 'category_id', 'status'];

    protected static function boot()
    {
        parent::boot();

        static::created(function () {
            Cache::forget("name_list");
        });

        static::updated(function () {
            Cache::forget("name_list");
        });
    }
}
