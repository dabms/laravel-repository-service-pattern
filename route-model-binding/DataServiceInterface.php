<?php

use Illuminate\Database\Eloquent\Collection;

interface DataServiceInterface
{
    public function findAll(): Collection;
    public function create(array $data): Entity;
    public function findById(int $id): ?Entity;
    public function update(Entity $entity, array $data): Entity;
    public function delete(Entity $entity): bool;
}
