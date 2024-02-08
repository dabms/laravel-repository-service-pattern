<?php

class GenericController extends Controller
{
    protected $genericService; // 'generic' mit spezifischem Bezeichner ersetzen

    public function __construct(DataServiceInterface $dataService)
    {
        $this->genericService = $dataService;
    }
    // Methode zum Abrufen aller Entitäten
    public function getAllEntities()
    {
        $entities = $this->dataService->findAll();
        return response()->json($entities);
    }

    // Methode zum Abrufen einer spezifischen Entität durch ID
    public function getEntityById($id)
    {
        $entity = $this->dataService->findById($id);
        return response()->json($entity);
    }

    // Methode zum Erstellen einer neuen Entität
    public function createEntity(Request $request)
    {
        $entity = $this->dataService->create($request->all());
        return response()->json($entity, 201);
    }

    // Methode zum Aktualisieren einer Entität
    public function updateEntity(Request $request, $id)
    {
        $existingEntity = $this->dataService->findById($id);
        if ($existingEntity) {
            $updatedEntity = $this->dataService->update($existingEntity, $request->all());
            return response()->json($updatedEntity);
        }
        return response()->json(['error' => 'Entity not found'], 404);
    }

    // Methode zum Löschen einer Entität
    public function deleteEntity($id)
    {
        $entity = $this->dataService->findById($id);
        if ($entity) {
            $this->dataService->delete($entity);
            return response()->json(['success' => 'Entity deleted']);
        }
        return response()->json(['error' => 'Entity not found'], 404);
    }

}
