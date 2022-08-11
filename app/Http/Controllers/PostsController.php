<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    //
    public function index() {
        // $posts = $this->post->get();
        $posts = DB::table('posts')
        ->get();
        // ->insert([
        //     'title' => 'Product',
        //     'body' => 'This is my computer'
        // ]);
        // ->where('id', '=', 5)
        // ->update([
        //     'body' => 'dell is very beautiful'
        // ]);
        dd($posts);
        // return view('posts.index');
    }
}
