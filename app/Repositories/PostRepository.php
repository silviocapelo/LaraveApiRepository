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
        // TODO: Implement getPostById() method.
    }

    public function deletePost($postId)
    {
        // TODO: Implement deletePost() method.
    }

    public function createPost(array $postDetails)
    {
        // TODO: Implement createPost() method.
    }

    public function updatePost($postId, array $newDetails)
    {
        // TODO: Implement updatePost() method.
    }

    public function getFulfilledPosts()
    {
        // TODO: Implement getFulfilledPosts() method.
    }
}
