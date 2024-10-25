
<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear Categorías
        Category::create(['name' => 'BOTELLAS', 'icon' => 'fa-solid fa-bottle']);
        Category::create(['name' => 'SHOTS', 'icon' => 'fa-solid fa-glass-shot']);
        Category::create(['name' => 'GASEOSAS', 'icon' => 'fa-solid fa-soda']);
        Category::create(['name' => 'COCKTAILS CON ALCOHOL', 'icon' => 'fa-solid fa-cocktail']);
        Category::create(['name' => 'COCKTAILS SIN ALCOHOL', 'icon' => 'fa-solid fa-cocktail']);
        Category::create(['name' => 'CERVEZAS', 'icon' => 'fa-solid fa-beer']);
        Category::create(['name' => 'JUGOS NATURALES', 'icon' => 'fa-solid fa-juice']);
        Category::create(['name' => 'TABLITAS - PIQUEO', 'icon' => 'fa-solid fa-cheese']);
        Category::create(['name' => 'ENSALADAS', 'icon' => 'fa-solid fa-salad']);
        Category::create(['name' => 'COMIDA RAPIDA', 'icon' => 'fa-solid fa-fast-food']);
        Category::create(['name' => 'CARNES A LA PARRILLA', 'icon' => 'fa-solid fa-grill']);
        Category::create(['name' => 'EXTRAS', 'icon' => 'fa-solid fa-plus']);
        Category::create(['name' => 'PLATOS NACIONALES', 'icon' => 'fa-solid fa-plate']);

        // Productos de BOTELLAS
        Product::create(['name' => 'JACK DANIELS BOTELLA', 'price' => 540, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'JACK DANIELS VASO', 'price' => 40, 'unidad' => 'VASO', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'JHONY WOLKER NEGRO BOTELLA', 'price' => 550, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'JHONY WOLKER AZUL BOTELLA', 'price' => 2500, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'CHIVAS REGAL BOTELLA', 'price' => 450, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'OLD PARR BOTELLA', 'price' => 450, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'RON BACARDI SOLERA BOTELLA', 'price' => 350, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'RON HAVANA BOTELLA', 'price' => 300, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'RON ABUELO BOTELLA', 'price' => 250, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'SIGANI CASA REAL NEGRO BOTELLA', 'price' => 250, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);
        Product::create(['name' => 'SIGANI CASA DON LUCHO BOTELLA', 'price' => 350, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'ACTIVE']);

        // Productos de SHOTS
        Product::create(['name' => 'JIGER MASTERS SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'ACTIVE']);
        Product::create(['name' => 'TEQUILA JOSE CUERVO SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'ACTIVE']);
        Product::create(['name' => 'FERNET BRANCA NEGRO SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'ACTIVE']);
        Product::create(['name' => 'FERNET BRANCA VERDE SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'ACTIVE']);

        // Productos de GASEOSAS
        Product::create(['name' => 'COCA COLA 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'ACTIVE']);
        Product::create(['name' => 'FANTA 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'ACTIVE']);
        Product::create(['name' => 'SPRITE 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'ACTIVE']);
        Product::create(['name' => 'AGUA VITAL 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'ACTIVE']);

        // Productos de COCKTAILS CON ALCOHOL
        Product::create(['name' => 'MARGARITA BLUEE', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'ACTIVE']);
        Product::create(['name' => 'PIÑA COLADA', 'price' => 35, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'ACTIVE']);
        Product::create(['name' => 'DAIQUIRI', 'price' => 35, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'ACTIVE']);
        Product::create(['name' => 'TODO BLUE', 'price' => 60, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'ACTIVE']);
        Product::create(['name' => 'TEQUILA SUN RISE', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'ACTIVE']);

        // Agrega más productos siguiendo el mismo patrón para las demás categorías...
    }
}
