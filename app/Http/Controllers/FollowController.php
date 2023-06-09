<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    private $follow;

    public function __construct(Follow $follow)
    {
        $this->follow = $follow;
    }

    public function store($user_id)
    {
        $this->follow->follower_id = Auth::user()->id; //Me
        $this->follow->following_id = $user_id;  //other user
        $this->follow->save(); 

        return redirect()->back();
    }

    public function destroy($user_id)
    {
        $this->follow 
                    ->where('follower_id', Auth::user()->id)
                    ->where('following_id', $user_id)
                    ->delete();

        return redirect()->back();

    }
}
