<?php

namespace App\Application\Service;

use App\Domain\Model\User\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Application\Service
 */
final class UserService
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUsers()
    {
        return $this->userRepository->findAll();
    }
}
