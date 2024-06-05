<?php


namespace App\Repositories;

use App\Models\User;

class UserRepository implements RepositoryInterface
{
    public function create(array $data)
    {
        return User::create($data);
    }
    public function edit(array $data)
    {

    }
    public function delete(array $data)
    {

    }
}
