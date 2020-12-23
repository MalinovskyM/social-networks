<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function getAllUser($limit = null)
    {
        /**
         * 6.1 take() для лимита
         */
        $users = User::all()->take($limit);

        $result = [];

        foreach ($users as $user ) {
            if(!$user->active){
                continue;
            }
            unset(
                $user->created_at,
                $user->updated_at,
                $user->email,
                $user->email_verified_at,
                $user->active
            );
            foreach ($user->post as $post) {

                $img_id = $post->image_id;
                $img_url = Image::find($img_id);
                $post->image_url = $img_url->url;
                $post->created_at_ts = Carbon::parse($post->created_at)->timestamp;
                unset(
                    $post->autor_id,
                    $post->deleted_at,
                    $post->updated_at,
                    $post->image_id,
                    $post->created_at
                );
                /**
                 * 6.2 колличество комментариев
                 */
                $count_of_comments = Comment::where('post_id',$post->id)->count();
                $post->count_of_comments = $count_of_comments;
            }
            array_push($result, $user);
        }


        return ["data" => $result];
    }
}
