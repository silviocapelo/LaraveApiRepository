<?php

namespace App\Http\Controllers;

use App\Interfaces\PostRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PostController extends Controller
{
    protected PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
                'data' => $this->postRepository->getAllPosts()
            ]);
    }

    public function store(Request $request): JsonResponse
    {
        $postDetails = $request->only([
            'author',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->postRepository->createPost($postDetails)
            ],
            ResponseAlias::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse
    {
        $postId = $request->route('id');

        return response()->json([
            'data' => $this->postRepository->getPostById($postId)
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $postId = $request->route('id');
        $postDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->postRepository->updatePost($postId, $postDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $postId = $request->route('id');
        $this->postRepository->deletePost($postId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
