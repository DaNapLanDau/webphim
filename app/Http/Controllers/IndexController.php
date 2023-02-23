<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;



class IndexController extends Controller
{
    public function home(){
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();
        return view('pages.home',compact('category','genre','category_home'));
    }
    public function category($slug){
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $cate_slug = Category::where('slug',$slug)->first();
        $movie = Movie::where('category_id',$cate_slug->id)->orderBy('ngaycapnhat','DESC')->paginate(16);
        return view('pages.category',compact('category','genre','cate_slug','movie'));
    }
    public function genre($slug){
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $genre_slug = Genre::where('slug',$slug)->first();
        $movie = Movie::where('genre_id',$genre_slug->id)->orderBy('ngaycapnhat','DESC')->paginate(16);
        return view('pages.genre',compact('category','genre','genre_slug','movie'));
    }
    public function movie($slug){
        $category = Category::orderBy('id','DESC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $movie = Movie::with('category','genre')->where('slug',$slug)->where('status',1)->first();
        return view('pages.movie',compact('category','genre','movie'));
    }
    public function watch($slug)
    {
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genre = Genre::orderBy('id', 'DESC')->get();
        $movie = Movie::with('category', 'genre')->where('slug', $slug)->where('status', 1)->first();
        return view('pages.watch', compact('category', 'genre', 'movie'));
    }
    public function episode(){
        return view('pages.episode');
    }
}
