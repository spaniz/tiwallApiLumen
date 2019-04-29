<?php namespace App\Http\Controllers\v1;

use App\Page;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\PageCollection;

/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 12:41 PM
 */

class PageController extends Controller{
    public function list(){

       $Pages = Page::paginate(3);
        return new PageCollection($Pages);
    }



}