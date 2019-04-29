<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 03:40 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'tiwall_program';


    protected $fillable = [
        'title'
    ];

    public function relatedChannel()
    {
        return $this->belongsToMany(Channel::class, 'tiwall_channel_relation', 'channel_id', 'item_id');
    }

}