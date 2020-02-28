<?php

namespace App\Infrastructure\Http\Rest\Controller;

use App\Application\Service\UserService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class UserController extends FOSRestController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @Rest\Get("/users")
     */
    public function getUsers(): View
    {
        $this->userService->getUsers();

        return View::create($this->userService->getUsers(), Response::HTTP_OK);
//        dump($this->userService->getUsers());die();
    }
}
