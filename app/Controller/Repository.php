<?php

namespace App\Controller;

interface Repository
{
    public function insert(array $data): array;
    public function delete(int $userId): array;
    public function update(int $userId, array $data): array;
    public function select(): array;
    public function selectOne(int $userId): UserEntity;
}
