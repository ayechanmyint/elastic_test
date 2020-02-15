<?php

namespace App\Services;
use App\Post;
use \Cache;
use \Mail;
use App\Mail\PostCreate;
use App\Mail\PostUpdate;

class PostService
{

    public function make($data){
        
        $data['author_id'] = \Auth::user()->id;
        $post = Post::create($data);

        Cache::forever('post.' . $post->id, $post);

        Mail::to('ayechanmyint789@gmail.com')->send(
            new PostCreate($post)
        );

        return $post;
    }

    public function update($data, $post)
    {
        $post->update($data);
        
        // if(!$post->is_published){
        //     $post->unsearchable();
        // }
        Cache::forever('post.' . $post->id, $post);

        \Mail::to('ayechanmyint789@gmail.com')->send(
            new PostUpdate($post)
        );

        return $post;
    }

    // public function postUpdate($post_id,$data){

    //    Cache::forget('post.' .$post_id);
    //    return $post = POST::find($post_id)->update($data);
        

    //     Cache::forever('post.' . $post->id, $post);
    //     \Mail::to('ayechanmyint@gmail.com')->send(
    //         new PostUpdate($post)
    //     );
       
    // }


}