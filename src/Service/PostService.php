<?php declare(strict_types=1);

namespace App\Service;

use App\Repository\PostRepository;

class PostService
{
    /**
     * @var PostRepository
     */
    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }
}