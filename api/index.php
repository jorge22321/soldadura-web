<?php

// 1. Crear directorios temporales en /tmp antes de inicializar Laravel
$tmpDirs = [
    '/tmp/views',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache'
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Asignar ruta compilada de vistas en el entorno
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/views';

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. Forzar el uso de rutas con permisos de escritura
$app->useStoragePath('/tmp/storage');
$app->useBootstrapPath('/tmp/bootstrap/cache');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 4. Capturar el error real durante la fase de arranque
try {
    $kernel->bootstrap();
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== ERROR REAL DE ARRANQUE ===\n\n";
    echo "Mensaje: " . $e->getMessage() . "\n";
    echo "Archivo: " . $e->getFile() . " (Línea " . $e->getLine() . ")\n\n";
    echo "Traza:\n" . $e->getTraceAsString();
    exit(1);
}

// 5. Procesar la petición si el arranque fue exitoso
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);