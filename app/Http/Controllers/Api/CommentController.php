<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function getAllUserComment($user_id)
    {
        $comments = Comment::where('commentator_id', $user_id)
            ->withTrashed()
            /**
             * 7.2 жадная загрузка
             */
            ->with('post')
            ->WhereHas('post',function($qPost){
                $qPost->where('image_id','!=',null);
            })
            ->orderBy('created_at','DESC')
            ->get();
        /**
         * 7.2 ленивая загрузка
         */
        foreach ($comments as $comment) {
            $comment->post->image = Post::find($comment->post->image_id)->image;

            /**
             * 7.2.1
             */
            $user = User::find($comment->post->autor_id);
            if($user->active == true)
            {
                $comment->post->autor=$user;
            }else{
                $comment->post->autor=null;
            }
        }



        return $comments;
    }

    public function getAllUserCommentDb($user_id)
    {
        /**
         * 7.1 SQL
         */
        $comments = DB::table('comments')
            ->join('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.*')
            ->where('commentator_id', '=', $user_id)
            ->where('posts.image_id', '!=', NULL)
            ->orderBy('created_at', 'desc')
            ->get();

        return $comments;
    }
}
