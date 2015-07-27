<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
        'title',
        'sub_title',
        'content',
        'published_at',
        'author_id'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at' <= Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at' > Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

}
