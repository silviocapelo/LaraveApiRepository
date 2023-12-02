<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function getAllPosts();
    public function getPostById($postId);
    public function deletePost($postId);
    public function createPost(array $postDetails);
    public function updatePost($postId, array $newDetails);
    public function getFulfilledPosts();
}
