<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request, $id)
    {
        $product = Product::find($id);
        if(!$product){
            return response()->json([
                'message' => 'Product not found!'
            ]);
        }
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'body' => $request->body
        ]);

        return response()->json([
            'message' => 'Comment created successfully!',
            'comment' => $comment
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
