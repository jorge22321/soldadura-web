<?php

// 1. Crear directorios temporales obligatorios en /tmp
$viewsPath = '/tmp/views';
$storagePath = '/tmp/storage';

if (!is_dir($viewsPath)) {
    mkdir($viewsPath, 0755, true);
}

if (!is_dir($storagePath)) {
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/framework/cache', 0755, true);
    mkdir($storagePath . '/logs', 0755, true);
}

// 2. Cargar el autoloader de Composer
require __DIR__ . '/../vendor/autoload.php';

// 3. Inicializar la aplicación de Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 4. Redirigir la ruta de almacenamiento al directorio temporal
$app->useStoragePath($storagePath);

// 5. Procesar la petición HTTP
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);