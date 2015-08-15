<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title',
        'body',
        'published_at',

    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }


    /**
     * setNameAttribute to Carbon objetc
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    /**
     * @param $date
     * @return Carbon
     */
    public function getPublishedAtAttribute($date)
    {
        return new Carbon($date);
    }

    /**
     * An article has always 1 user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /** Get tags associated with the article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /** Tag ids associated with the article
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags()->lists('id');
    }

}
