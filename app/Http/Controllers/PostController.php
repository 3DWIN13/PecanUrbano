<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Livewire\withPagination;    


class PostController extends Controller
{
    //
    
    public function index()
    {
        
       $posts = Post::latest('id')->paginate(10);

        return view('index',compact('posts') );
        # code...
    }

    public function noticias(Post $item)
    {
        
       
    $rela = $item->tags->first()->posts()->where('post_id', '!=', $item->id)->latest('id')->take(2)->get();
 
    $recientes= Post::latest('id')->where('id' ,'!=', $item->id)->take(4)->get();   
       return view('post', compact('item', 'rela', 'recientes') );
        # code...
        //return $item->tags->first()->posts()->where('post_id', '!=', $item->id)->get();
    }

    public function tags(Tag $tag)
    {
        $etiqueta = $tag->posts()->get();
        # code...
        return view('tags', compact('etiqueta', 'tag'));

        //return $tag->posts()->get();
    }
}
