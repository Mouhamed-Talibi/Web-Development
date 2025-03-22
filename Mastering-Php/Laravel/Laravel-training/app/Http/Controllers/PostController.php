<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function indexAction(){
        $all_posts = Post::all(); // return a collection object 
        return view('posts.index', compact("all_posts"));
    }

    public function showaction(Post $post){
        /*
            We can show the post by 4 methods: 
                1- Route model binding : 
                    public function showAction(Post $post){ return something } 
                    Post : The Model Class Name 
                    $post : The dynamic varibales in the route : posts.show
                2- using find
                    $singlePost = Post::find($id);
                3- using findOrFail($id);
                    it handle the case if the id not exists 
                4- using where : 
                    $singlePost = Post::wher("id", $postId)->first();
                        it return to you a model object
        */
        return view("posts.show", compact("post"));
    }

    public function createAction(){
        $postsCreators = Post::all();
        return view('posts.create', compact("postsCreators"));
    }

    public function storeAction(){
        /*
            first method :
                $data = request()->all();
            Second Method : 
                $column = request()->column; 
        */ 

        /*
            Method 2 to insert data : 
            -------------------------
            Post::create([
                'title'=>$title,
                'creator'=>$creator,
                'description'=>$description
            ]);

            - !! to use it you need to write it in the Post model : 
            $protected $fillable = [
            'title',
            'creator',
            'description'
            ];
        */

        // validate the data : 
        request()->validate([
            'title'=>['required', 'min:9'],
            'creator'=>['required'],
            'description'=>['required']
        ]);

        // store the submitted data 
        $post = new Post;
        $post->title = request()->title;
        $post->creator = request()->creator;
        $post->description = request()->description;

        // insert the submitted data :
        $post->save();
        return to_route("posts.index");
    }

    public function editAction(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function updateAction($postId){
        $title = request()->title;
        $description = request()->description;
        $creator = request()->creator;
        // dd($title, $description, $creator);
        // find post : 
        $post = Post::findOrFail($postId);
        // update post 
        $post->update([
            'title'=>$title,
            'creator'=>$creator,
            'description'=>$description,
        ]);
        return to_route('posts.show', $postId);
    }

    public function destroyAction($postId){
        $post = Post::findOrFail($postId);
        $post->delete();
        // Post::where('id', $postId)->delete();
        return to_route('posts.index');
    }
}
