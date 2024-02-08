<?php

use Illuminate\Database\Eloquent\Collection;

class DataService implements DataServiceInterface
{
    // Kein Property für das Modell sowie Constructor bei einfachen r-m-b operationen


    public function findAll(): Collection
    {
        return Entity::all(); // Entity durch Model ersetzen
    }

    public function findById(int $id): ?Entity
    {
        // Finden einer Entität anhand ihrer ID
        return Entity::find($id);
    }

    public function create(array $data): Entity
    {
        // Erstellen einer neuen Entität mit den bereitgestellten Daten und Rückgabe der Instanz
        return Entity::create($data);
    }

    public function update(Entity $entity, array $data): Entity
    {
        // Aktualisieren der Entität mit den bereitgestellten Daten
        $entity->update($data);
        return $entity;
    }

    public function delete(Entity $entity): bool
    {
        // Löschen der übergebenen Entität
        return $entity->delete();
    }
}
