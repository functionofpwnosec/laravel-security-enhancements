<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Comment::create([
            'content' => $request->content,
            'article_id' => $article->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles.show', $article);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
