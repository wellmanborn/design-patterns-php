<?php

namespace DesignPatterns\Structural\Decorator\Caching;

class PostRepository implements IPostRepository
{
    protected PostModel $postModel;

    public function __construct(PostModel $postModel)
    {
        $this->postModel = $postModel;
    }

    protected function getPosts() : array{
        return $this->postModel->all();
    }

    public function all(): array
    {
        return array_filter($this->getPosts(), function($post){
            return $post["published"] == true;
        });
    }

    public function get($id): array
    {
        return $this->getPosts()[$id] ?? [];
    }

    public function insert(array $post): array
    {
        return $this->postModel->insert($post);
    }
}