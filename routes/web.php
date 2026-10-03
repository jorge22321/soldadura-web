<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

/* =========================================================
   HOME
========================================================= */

Route::get('/', function (): Response {
    return Inertia::render('Welcome');
})->name('home');

/* =========================================================
   SITIO PUBLICO
========================================================= */

Route::get('/nosotros', fn (): Response => Inertia::render('Website/About'))->name('about');
Route::get('/servicios', fn (): Response => Inertia::render('Website/Services'))->name('services.index');
Route::get('/servicios/{slug}', fn (string $slug): Response => Inertia::render('Website/Service', ['slug' => $slug]))
    ->whereIn('slug', ['soldadura-tig', 'soldadura-mig-mag', 'arco-sumergido', 'corte-laser-biselado', 'ensayos-no-destructivos', 'mecanizado-ensamblaje'])
    ->name('services.show');
Route::get('/proyectos', fn (): Response => Inertia::render('Website/Projects'))->name('projects');
Route::get('/preguntas-frecuentes', fn (): Response => Inertia::render('Website/Faq'))->name('faq');
Route::get('/contacto', fn (): Response => Inertia::render('Website/Contact'))->name('contact');
Route::get('/blog', fn (): Response => Inertia::render('Website/Blog', ['category' => false]))->name('blog.index');
Route::get('/blog/categoria/fabricacion-y-soldadura', fn (): Response => Inertia::render('Website/Blog', ['category' => true]))->name('blog.category');
Route::get('/blog/{slug}', fn (string $slug): Response => Inertia::render('Website/Post', ['slug' => $slug]))
    ->whereIn('slug', ['aprovechar-material-fabricacion-metalica', 'datos-cotizar-soldadura', 'planificar-fabricacion-metalica'])
    ->name('blog.show');
Route::redirect('/productos', '/servicios', 301)->name('productos');

/* =========================================================
   DASHBOARD
========================================================= */

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/* =========================================================
   PERFIL
========================================================= */

Route::middleware('auth')->group(function () {

    Route::get(
        '/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');

    Route::patch(
        '/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');

    Route::delete(
        '/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');

});

require __DIR__.'/auth.php';
