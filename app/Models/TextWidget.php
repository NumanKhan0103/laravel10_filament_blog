<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;


    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active',
    ];





    public function getTitle(string $key) : string
    {

        $widget = Cache::get('text-widget-'.$key, function() use ($key) {

                    return TextWidget::query()->when('key', '=', $key)->where('active', '=', 1)->first();
               
                });


        // return widget title if exit else return empty string
        return ( $widget)  ? $widget->title : '';

    }


    public function getContent(string $key) : string
    {
        $widget = Cache::get('text-widget-'.$key, function() use ($key) {

                     return TextWidget::query()->when('key', '=', $key)->where('active', '=', 1)->first();         
                });

        // return widget content if exit else return empty string
        return ( $widget)  ? $widget->content : '';

    }
}
