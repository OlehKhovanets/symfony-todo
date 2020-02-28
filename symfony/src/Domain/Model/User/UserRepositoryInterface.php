<?php

namespace App\Domain\Model\User;

/**
 * Interface ArticleRepositoryInterface
 * @package App\Domain\Model\Article
 */
interface UserRepositoryInterface
{

    /**
     * @param int $articleId
     * @return User
     */
    public function findById(int $articleId): ?User;

    /**
     * @return array
     */
    public function findAll(): array;

    /**
     * @param User $article
     */
    public function save(User $article): void;

    /**
     * @param User $article
     */
    public function delete(User $article): void;

}
