<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function create(array $data);
    public function edit(array $data);
    public function delete($id);
    public function find($id);
    public function search(array $criteria);
    public function all();
}
