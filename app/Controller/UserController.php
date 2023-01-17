<?php

namespace App\Controller;

class UserController
{

    private ?UserService $userService = null;
    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function getAllUsers(): array
    {
        return $this->userService->getAllUsers();
    }

    public function getUser(int $userId): UserEntity
    {
        return $this->userService->getUser($userId);
    }

    public function addUser(array $data): array
    {
        return $this->userService->addUser($data);
    }

    public function updateUser(int $userId, array $data): array
    {
        return $this->userService->updateUser($userId, $data);
    }

    public function deleteUser(int $userId): array
    {
        return $this->userService->deleteUser($userId);
    }
}