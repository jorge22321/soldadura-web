<?php

// 1. Preparar directorios temporales obligatorios en /tmp
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

require __DIR__ . '/../vendor/autoload.php';

try {
    // 2. Inicializar Laravel
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    $app->useStoragePath($storagePath);

    // 3. Procesar la petición
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    // Captura directamente la falla raíz omitiendo el renderizador de Blade
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    
    echo "=== DETALLE DEL ERROR REAL ===\n\n";
    echo "Mensaje: " . $e->getMessage() . "\n";
    echo "Archivo: " . $e->getFile() . " (Línea " . $e->getLine() . ")\n\n";
    echo "Traza:\n" . $e->getTraceAsString();
    exit(1);
}