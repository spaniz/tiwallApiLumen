<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 27/04/2019
 * Time: 12:00 PM
 */

namespace App\Http\Resources\v1;


use App\Type as TypeModel;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Channel;
class ChannelCollection extends ResourceCollection
{
    public function toArray($request)
    {

        return [
            'data' => $this ->collection->map(function ($item){
                return [
                    'id'=>$item->id,
                    'title'=>$item->title,
                    'type'=>new TypeResource( Channel::find($item->id)->types()->get()[0]),
                    'subtype'=>new TypeResource( Channel::find($item->id)->subtypes()->get()[0]),
                   'related_pages'=> new PageCollection( Channel::find($item->id)->relatedPageS()->get()),
                ];
            })
        ];
    }

    public function with($request)
    {
        return [
            'status'=>'success'
        ];
    }

}