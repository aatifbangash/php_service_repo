<?php

namespace App\Controller;

class UserService
{

    private ?UserRepository $repository = null;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function getAllUsers(): array
    {
        return $this->repository->select();
    }

    public function getUser(int $userId): UserEntity
    {
        return $this->repository->selectOne($userId);
    }

    public function addUser(array $data): array
    {
        return $this->repository->insert($data);
    }

    public function updateUser(int $userId, array $data): array
    {
        return $this->repository->update($userId, $data);
    }

    public function deleteUser(int $userId): array
    {
        return $this->repository->delete($userId);
    }
}