<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
    function loading(){
    	$articles = DB::connection('bddbde')->table('article')->get();
    	$topArticles = DB::connection('bddbde')->table('article')->orderBy('nbSell','DESC')->take('3')->get();
    	$tags = DB::connection('bddbde')->table('tag')->where('articleTag','1')->get();
    	return view('shop',[
    		'articles'=>$articles,
    		'topArticles'=>$topArticles,
    		'tags'=>$tags,
    	]);
    }
}
