<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Caching\Test;

use DesignPatterns\Structural\Decorator\Caching\PostCacheRepository;
use DesignPatterns\Structural\Decorator\Caching\PostModel;
use DesignPatterns\Structural\Decorator\Caching\PostRepository;
use PHPUnit\Framework\TestCase;

class CashingTest extends TestCase{

    public function testPostRepository(){
        $postRepository = new PostRepository(new PostModel());
        $this->assertSame(count($postRepository->all()), 2);

        $postRepository->insert(["id" => 4, "data" => "Post #4", "published" => true]);
        $this->assertSame(count($postRepository->all()), 3);
    }

    public function testPostCacheRepository(){
        $postRepository = new PostRepository(new PostModel());
        $postCacheRepository = new PostCacheRepository($postRepository);

        $this->assertArrayHasKey("cache", $postCacheRepository->get(1));
        $this->assertArrayNotHasKey("cache", $postRepository->get(1));

        $postCacheRepository->insert(["id" => 4, "data" => "Post #4", "published" => true]);
        $this->assertSame(count($postCacheRepository->all()), 3);
        $this->assertArrayNotHasKey("cache", $postRepository->get(4));
        $this->assertArrayHasKey("cache", $postCacheRepository->get(4));
    }

}