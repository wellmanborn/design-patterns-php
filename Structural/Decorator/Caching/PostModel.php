<?php

namespace DesignPatterns\Structural\Decorator\Caching;

class PostModel
{
    protected array $posts = [
        [
            "id" => 1,
            "data" => "Post #1",
            "published" => true
        ],
        [
            "id" => 2,
            "data" => "Post #2",
            "published" => false
        ],
        [
            "id" => 3,
            "data" => "Post #3",
            "published" => true
        ]
    ];

    public function all() : array{
        return $this->posts;
    }

    public function insert($post) : array{
        $this->posts[] = $post;
        return $this->posts;
    }
}