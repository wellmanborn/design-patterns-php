<?php

namespace DesignPatterns\Structural\Decorator\Caching;

interface IPostRepository
{
    public function all() : array;

    public function get($id) : array;

    public function insert(array $post) : array;
}