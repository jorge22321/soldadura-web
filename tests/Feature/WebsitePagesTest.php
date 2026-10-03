<?php

namespace Tests\Feature;

use Inertia\Testing\AssertableInertia as Assert;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class WebsitePagesTest extends TestCase
{
    #[DataProvider('publicPages')]
    public function test_public_pages_render_the_approved_website(string $url, string $component): void
    {
        $this->get($url)->assertInertia(fn (Assert $page) => $page->component($component));
    }

    /** @return array<string, array{string, string}> */
    public static function publicPages(): array
    {
        return [
            'home' => ['/', 'Welcome'],
            'about' => ['/nosotros', 'Website/About'],
            'services' => ['/servicios', 'Website/Services'],
            'projects' => ['/proyectos', 'Website/Projects'],
            'faq' => ['/preguntas-frecuentes', 'Website/Faq'],
            'contact' => ['/contacto', 'Website/Contact'],
            'blog' => ['/blog', 'Website/Blog'],
        ];
    }

    #[DataProvider('serviceSlugs')]
    public function test_service_details_render_the_requested_service(string $slug): void
    {
        $this->get('/servicios/'.$slug)->assertInertia(fn (Assert $page) => $page
            ->component('Website/Service')
            ->where('slug', $slug));
    }

    /** @return array<int, array{string}> */
    public static function serviceSlugs(): array
    {
        return [
            ['soldadura-tig'], ['soldadura-mig-mag'], ['arco-sumergido'],
            ['corte-laser-biselado'], ['ensayos-no-destructivos'], ['mecanizado-ensamblaje'],
        ];
    }

    #[DataProvider('articleSlugs')]
    public function test_articles_render_the_requested_content(string $slug): void
    {
        $this->get('/blog/'.$slug)->assertInertia(fn (Assert $page) => $page
            ->component('Website/Post')
            ->where('slug', $slug));
    }

    /** @return array<int, array{string}> */
    public static function articleSlugs(): array
    {
        return [
            ['aprovechar-material-fabricacion-metalica'],
            ['datos-cotizar-soldadura'],
            ['planificar-fabricacion-metalica'],
        ];
    }

    public function test_blog_category_renders_the_category_view(): void
    {
        $this->get('/blog/categoria/fabricacion-y-soldadura')->assertInertia(fn (Assert $page) => $page
            ->component('Website/Blog')
            ->where('category', true));
    }

    public function test_unknown_services_and_articles_return_not_found(): void
    {
        $this->get('/servicios/no-existe')->assertNotFound();
        $this->get('/blog/no-existe')->assertNotFound();
    }

    public function test_old_product_links_redirect_to_services(): void
    {
        $this->get('/productos')->assertStatus(301)->assertRedirect('/servicios');
    }
}
