<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $post=Post::all();
        $video=Video::find(1);

        return view('articles',[
            'posts'=>$post,
            'video'=>$video
    ]);
    }
    public function show($id){

       $post=Post::findOrFail($id);
       //$post=Post::where('title','Doloribus id neque omnis asperiores ipsam.')->firstOrFail();
       /* $posts=[
            1=>'mon titre n1',
            2=>'mon titre n2'
        ];

        $post=$posts[$id] ?? 'pas de titre';*/
        return view('article',[
            'post'=>$post
        ]);
    }

    public function create(){
        return view('form');
    }

    public function stores(Request $request){

        // $post=new Post;
        // $post->title=$request->title;
        // $post->content=$request->content;
        // $post->save();

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]);
        dd('post creer');

    }
    public function contact(){

        return view('contact');
    }

    public function register(){
        $post=Post::find(10);
        $video=Video::find(1);
        $comment1=new Comment(['content'=>'mon premier commentaire']);
        $comment2=new Comment(['content'=>'mon deuxieme commentaire']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);
        $comment3=new Comment(['content'=>'mon troisieme commentaire']);
        $video->comments()->save($comment3);

    }

}