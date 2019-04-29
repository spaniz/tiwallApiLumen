<?php namespace App\Http\Controllers\v1;

use App\Channel;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ChannelCollection;
use App\Http\Resources\v1\PageCollection;
use App\Http\Resources\v1\subtypeResource;
use App\Http\Resources\v1\TypeResource;
use App\Http\Resources\v1\ChannelResource as ChannelResource;
use App\Page;

/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 12:41 PM
 */

class ChannelController extends Controller{
    public function list(){
       $channel = Channel::paginate(3);
       return new ChannelCollection($channel);
    }

    public function get($id){
        $channel = Channel::findorFail($id);
        return new ChannelResource($channel);
    }

}