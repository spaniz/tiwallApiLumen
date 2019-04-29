<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 27/04/2019
 * Time: 12:00 PM
 */

namespace App\Http\Resources\v1;

use App\Channel;
use Illuminate\Http\Resources\Json\Resource;
use Morilog\Jalali\Jalalian;

class ChannelResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'urn'=>$this->url_name,
            'type'=>new TypeResource( Channel::find($this->id)->types()->get()[0]),
            'subtype'=>new TypeResource( Channel::find($this->id)->subtypes()->get()[0]),
            'title'=>$this->title,
            'start_date'=>$this->start_date,
            'start_date_text'=>Jalalian::forge($this->start_date)->format('%A %d %B %Y'),
            'end_date'=>$this->end_date,
            'end_date_text'=>Jalalian::forge($this->end_date)->format('%A %d %B %Y'),
            "has"=> 'hasssssssssss',
            "image"=>'imageeeeeee',
            "cover"=>'coverrrrrrrrrrr',
            "tag"=>'tag',
            'relatedPage'=>new PageCollection(Channel::find($this->id)->relatedPages()->get())
        ];
    }

}