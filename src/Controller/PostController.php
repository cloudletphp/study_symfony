<?php declare(strict_types=1);

namespace App\Controller;

use App\Service\PostService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController
{
    private $service;

    /**
     * PostController constructor.
     *
     * @param PostService $service
     */
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/", name="post")
     */
    public function index()
    {
        var_dump($this->service);
        exit;
    }
}