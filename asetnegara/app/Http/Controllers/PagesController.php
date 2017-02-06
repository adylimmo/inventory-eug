<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;

class PagesController extends Controller
{

    public function getHome()
    {
    	$data = DB::table('sumernote')
        ->join('category','sumernote.id_category','=','category.id_category')
        ->join('users','users.id','=','sumernote.idusers')
        ->select('sumernote.id_category','category.nama_category','users.email','users.first_name','sumernote.title','sumernote.slug','sumernote.detail', 'sumernote.created_at')
        ->get();
        return view('pages.home',compact('data'));

        // return view('pages.home');

    }
}