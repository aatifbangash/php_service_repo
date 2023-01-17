<?php
namespace App\Controller;

class UserRepository implements Repository
{
    private ?db $db = null;
    public function __construct()
    {
        $this->db = new db();
    }

    public function select(): array
    {
        return array_map(function ($data) {
            return new UserEntity(
                id: $data['id'],
                firstName: $data['firstName'],
                lastName: $data['lastName'],
                email: $data['email'],
            );
        }, $this->db->data);
    }

    public function selectOne(int $userId): UserEntity
    {
        $user = array_filter($this->select(), function ($user) use ($userId) {
            return ($user->getId() == $userId) ? $user : true;
        })[0];

        return $user;
    }

    public function insert(array $data): array
    {
        $this->db->data[] = $data;
        return $this->select();
    }


    public function delete(int $userId): array
    {
        return array_filter($this->select(), function ($user) use ($userId) {
            return ($user->getId() !== $userId) ? $user : true;
        });
    }


    public function update(int $userId, array $data): array
    {
        return array_map(function ($user) use ($userId, $data) {

            if ($user->getId() === $userId)
                return $data;

            return $user;
        }, $this->select());
    }
}