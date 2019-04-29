<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 27/04/2019
 * Time: 12:00 PM
 */

namespace App\Http\Resources\v1;


use Illuminate\Http\Resources\Json\Resource;
class subtypeResource extends Resource
{


    public function toArray($request)
    {

                return [
                    'id'=>$this->id,
                    'urn'=>$this->url_name,
                    'title'=>$this->title,
                    'location_based'=>$this->location_base
                ];





    }


}