<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Post;

class PostRepository implements OrderRepositoryInterface
{

    public function getAllPosts()
    {
        return Post::all();
    }

    public function getPostById($postId)
    {
        return Post::findOrFail($postId);
    }

    public function deletePost($postId)
    {
        Post::destroy($postId);
    }

    public function createPost(array $postDetails)
    {
        return Post::create($postDetails);
    }

    public function updatePost($postId, array $newDetails)
    {
        return Post::whereId($postId)->update($newDetails);
    }

    public function getFulfilledPosts()
    {
        return Post::where('is_fulfilled', true);
    }
}
