<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\StoreNoticiaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Monolog\Processor\TagProcessor;

class NoticiaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.noticias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        return view('admin.noticias.create', compact('tags'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(StoreNoticiaRequest $request)
    {
        $tag = new Tag();
        if (isset($request->etik)) {
            # code...
             
            $tag->name = $request->etik;
            $tag->save();
            return redirect()->route('post.create');  
            
        }else if(isset($request->eliminar)) {

            for ($i=0; $i < count($request->ids); $i++) { 
                # code...
                //DB::delete('delete tags where id = ?', [$request->ids[$i]]);
                DB::table('tags')->where('id', '=', $request->ids[$i])->delete();
            }
            //DB::delete('delete users where name = ?', ['John'])
            
            return redirect()->route('post.create');

        }else if(isset($request->edita)) {
        
        
          for ($i=0; $i < count($request->edita); $i++) { 
              # code...
               DB::update('update tags set name = ? where id = ?', [$request->edita[$i],$request->ids[$i]]);
              
          }
  
            return redirect()->route('post.create') ;
    
        }else{
        
         $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->picture = Storage::put('post', $request->file('picture'));
        $post->description = $request->description;

        $post->save();
   
        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('post.edit', $post);} 
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('admin.noticias.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $tags = Tag::all();
       
        return view('admin.noticias.edit', compact('post','tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body'=> 'required',
            'description'=>'required',
            'tags'=>'required'
        ]);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        if ($request->file('picture')) {
            # code...
            $url = Storage::put('post', $request->file('picture'));
            if ($post->picture) {
                # code...
                Storage::delete($post->picture);

                $post->picture = $url;
            }else{
              echo "elige una imagen";   
            }
        }

        //$post->picture = Storage::put('post', $request->file('picture'));
        $post->description = $request->description;

        if($request->tags){
            $post->tags()->sync($request->tags);
        }

       $post->update();
      return redirect()->route('post.edit', $post);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Storage::delete($post->picture);
        $post->delete();
        return redirect()->route('post.index');
    }
}
