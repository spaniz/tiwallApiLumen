<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 27/04/2019
 * Time: 12:00 PM
 */

namespace App\Http\Resources\v1;


use Illuminate\Http\Resources\Json\ResourceCollection;

class PageCollection extends ResourceCollection
{
    public function toArray($request)
    {

        return [
            'data' => $this ->collection->map(function ($item){
                return [
                    'id'=>$item->id,
                    'title'=>$item->title,
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