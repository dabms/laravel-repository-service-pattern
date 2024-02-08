<?php

interface DataServiceInterface
{
    public function findAll(): iterable;
    public function find(int $id): ?Model;
    public function create(array $data): Model;
    public function update(int $id, array $data): Model;
    public function delete(int $id): void;
}
