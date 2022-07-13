<?php

namespace DesignPatterns\Structural\Decorator\Caching;

class PostCacheRepository implements IPostRepository
{
    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function all(): array
    {
        return array_map(function($post){
            $post["cache"] = true;
            return $post;
        }, $this->postRepository->all());
    }

    public function get($id): array
    {
        $post = $this->postRepository->get(1);
        $post["cache"] = true;
        return $post;
    }

    public function insert(array $post): array
    {
        return $this->postRepository->insert($post);
    }
}