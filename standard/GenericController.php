<?php

class GenericController extends Controller
{
    protected $genericService; // 'generic' mit spezifischem Bezeichner ersetzen

    public function __construct(DataServiceInterface $genericService)
    {
        $this->genericService = $genericService;
    }

    public function index()
    {
        $posts = $this->genericService->findAll();
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = $this->genericService->find($id);
        return response()->json($post);
    }

    public function store(Request $request)
    {
        $post = $this->genericService->create($request->all());
        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        $post = $this->genericService->update($id, $request->all());
        return response()->json($post);
    }

    public function destroy($id)
    {
        $this->genericService->delete($id);
        return response()->json(null, 204);
    }
}
