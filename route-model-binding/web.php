<?php
// Ersetze `{id}` durch `{entity}` für das Route-Model-Binding
//Route::resource('generic', GenericController::class);
Route::get('/entity/{entity}', [GenericController::class, 'show']);

