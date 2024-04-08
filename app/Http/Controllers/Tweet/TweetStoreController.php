<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
        // $tweet = new Tweet();

        // $tweet->users_id = Auth::id();
        // $tweet->content = request('content');

        // $tweet->save();

        Tweet::create([
            'users_id' => Auth::id(),
            'content' => request('content'),
        ]);
        return redirect()->back();
    }
}
