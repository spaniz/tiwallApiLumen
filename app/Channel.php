<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 03:40 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'tiwall_channel';


    protected $fillable = [
        'title'
    ];
    public function relatedPages()
    {
        return $this->belongsToMany(Page::class, 'tiwall_channel_relation', 'channel_id', 'item_id');
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'id', 'type_id');
    }

    public function subtypes()
    {
        return $this->hasMany(Type::class, 'id', 'subtype_id');
    }
}


