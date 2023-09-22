<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
         'slug', 
         'thumbnail',
         'body',
         'active',
         'published_at',
         'user_id',
    ];


    protected $casts = [
        'published_at' => 'datetime',

    ];


    // only get few word for long description to show on front end 
    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 30);
    }


    public function getThumbnail()
    {
        if(str_starts_with($this->thumbnail, 'http')){

            return $this->thumbnail;
        }

        return '/storage/'. $this->thumbnail;

    }


    public function getFormateDate(): string
    {
        return $this->published_at->format('F jS, Y');
    }

    // relationship 

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
