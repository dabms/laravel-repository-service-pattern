<?php

class DataService implements DataServiceInterface
{
    protected $model; // Property für das Modell

    public function __construct(Model $model) // DI für das Modell, mit spezifischem Model ersetzen
    {
        $this->model = $model;
    }

    public function findAll(): iterable
    {
        return $this->model::all();
    }

    public function find(int $id): ?Model
    {
        return $this->model::findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data): Model
    {
        $entity = $this->model::findOrFail($id);
        $entity->update($data);
        return $entity;
    }

    public function delete(int $id): void
    {
        $entity = $this->model::findOrFail($id);
        $entity->delete();
    }
}
