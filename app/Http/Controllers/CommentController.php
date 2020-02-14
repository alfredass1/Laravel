<?php

namespace App\Http\Controllers;
use App\Comment;
use App\ad;
use Illuminate\Http\Request;
use App\Category;
use File;
use Gate;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function showCommentForm(Ad $ad)
    {
        return view('skelbimai.pages.komentaroForma', compact('ad'));

    }

    public function addComment(Ad $ad)
    {
        Comment::create([
            'name' => request('name'),
            'comment' => request('comment'),
            'ad_id' => $ad->id,
            'user_id' => Auth()->id()

        ]);

        return redirect('skelbimas/'.$ad->id);
    }
}
