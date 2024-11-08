<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $list = DB::table('books')
        ->select('books.id','title','thumbnail','author','publisher','Publication','Price','Quantity','categories.name as categoty_name')
        ->join('categories','categories.id', '=' ,'books.Category_id')
        ->orderBy('price','DESC')
        ->limit(8)
        ->get();

        $lists = DB::table('books')
        ->select('books.id','title','thumbnail','author','publisher','Publication','Price','Quantity','categories.name as categoty_name')
        ->join('categories','categories.id', '=' ,'books.Category_id')
        ->orderBy('price','ASC')
        ->limit(8)
        ->get();
        return view('home',compact('lists','list'));
    }
    public function show($id){
        $detail = DB::table('books')
        ->select('books.id as id','title','thumbnail','author','publisher','Publication','Price','Quantity','categories.name as categoty_name')
        ->join('categories','categories.id', '=' ,'books.Category_id')
        ->Where('books.id',$id)
        ->first();
        return view('detail',compact('detail'));
    }
    public function category($id){
        $books = DB::table('books')
        ->select('books.id as id','title','thumbnail','author','publisher','Publication','Price','Quantity','categories.name as categoty_name')
        ->join('categories','categories.id', '=' ,'books.Category_id')
        ->Where('books.Category_id',$id)
        ->get();
    $category = DB::table('categories')->where('id', $id)->first();
    return view('category', compact('books', 'category'));
    }
}
