<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 03:40 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'tiwall_channel_type';


    protected $fillable = [
        'url_name', 'title', 'parent_id', 'location_base', 'related_item'
    ];

}


