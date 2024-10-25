<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
//        BOTELLAS
//        JACK DANIELS 540 Bs. 40 Bs.
//        BOTELLA VASO
//        JHONY WOLKER NEGRO 550 Bs. 40 Bs.
//        JHONY WOLKER AZUL 2.500 Bs.
//        CHIVAS REGAL 450 Bs. 40 Bs.
//        OLD PARR 450 Bs. 40 Bs.
//        RON BACARDI SOLERA 350 Bs. 35 Bs.
//        RON HAVANA 300 Bs. 30 Bs.
//        RON ABUELO 250 Bs. 25 Bs.
//        SIGANI CASA REAL NEGRO 250 Bs. 25 Bs.
//        SIGANI CASA DON LUCHO 350 Bs. 30 Bs.
//        SHOTS
//        JIGER MASTERS 350 Bs. 25 Bs.
//        TEQUILA JOSE CUERVO 300 Bs. 25 Bs.
//        FERNET BRANCA NEGRO 250 Bs. 25 Bs.
//        FERNET BRANCA VERDE 250 Bs. 25 Bs.
//        GASEOSAS
//        COCA COLA 500 ML 10 Bs.
//        5 Bs.
//        FANTA 500 ML 10 Bs.
//        5 Bs.
//        SPRITE 500 ML 10 Bs.
//        5 Bs.
//        AGUA VITAL 500 ML 10 Bs.
//        5 Bs.
//RESTO - BAR
//RESTO - BAR
//COCKTAILS CON ALCOHOL
//MARGARITA BLUEE 30 Bs.
//        PIÑA COLADA 35 Bs.
//        DAIQUIRI 35 Bs.
//        TODO BLUE 60 Bs.
//        TEQUILA SUN RISE 30 Bs.
//        YUNGUEÑITO 30 Bs.
//        CHUFLABLUEE 30 Bs.
//        CAIPIRIÑA 30 Bs.
//        COCKTAILS SIN ALCOHOL
//PIÑA BLUE VIRGEN 20 Bs.
//        SKY BLUEE 20 Bs.
//        BLUEE TONIC 20 Bs.
//        CERVEZAS
//CORONA 15 Bs.
//        HUARI 15 Bs.
//        BLUE MONT 15 Bs.
//RESTO - BAR
//JUGOS NATURALES
//MARACUYA 20 Bs.
//        JARRA
//TUMBO 20 Bs.
//        MOCONCHINCHE 20 Bs.
//        PIÑA 20 Bs.
//        TABLITAS - PIQUEO
//TABLA PICAÑA BLUEE (2 PERSONAS) 60 Bs. CARNE PICAÑA, PAPA FRITA O YUCA FRITA, RODAJITAS DE
//PAN FRANCES TOSTADO.
//        TABLA POLLO BLUEE (2 PERSONAS) 50 Bs. CARNE POLLO, PAPA FRITA O YUCA FRITA, RODAJITAS DE
//PAN FRANCES TOSTADO.
//        ENSALADAS
//ENSALADA CESAR (1 PORCION) 20 Bs. LECHUGA MORADA, POLLO GRILL, ADERESO
//CESAR, QUESO PARMESANO
//ENSALADA BLUE (1 PORCION) 20 Bs. LECHUGA MORADA, RODAJAS DE TOMATE,
//ARITOS DE CEBOLLA BLANCA, QUESO
//MUZARELLA
//TABLA MIX BLUEE (2 PERSONAS) 70 Bs. CARNE POLLO, CARNE DE VACA, PAPA FRITA O YUCA
//FRITA, RODAJITAS DE PAN FRANCES TOSTADO.
//        ENSALADA SALTEADA BLUE (1 PORCION) 20 Bs. TOMATE, CEBOLLAS, PIMENTON, SEMI COCIDAS
//EN JUGO DE SALSA SOYA.
//RESTO - BAR
//COMIDA RAPIDA
//POLLO FRITO TODO BLUEE (1 PORCION) 25 Bs. UNA PRESA DE POLLO, PAPA FRITA, PLATANITOS FRITOS,
//ARROZ CON VERDURAS.
//        ALITAS DE POLLO TODO BLUEE
//25 Bs. 6 ALITAS DE POLLO, PAPA FRITA, 3 SALSAS
//DISPONIBLES 2 A ELEGIR
//HAMBURGUESA BLUEEMONT
//HAMBURGUESA DE RES, PAN BLANCO, RODAJAS 20 Bs.
//        DE TOMATE, ARITOS DE CEBOLLA, PAPA FRITA,
//QUESO MUZARELLA
//SALCHIPAPA TODO BLUEE
//15 Bs. TROCITOS DE CHORIZO, PAPA FRITA, ADERESOS
//CARNES A LA PARRILLA
// BIFE CHORIZO 400gr.
//        35 Bs.
//        TIRA 400gr.
//        30 Bs.
//        PUNTA S 400gr.
//        30 Bs.
//        CARNE DE RES (BIFE CHORIZO) PAPA FRITA, ARROZ
//CON QUESO, ENSALADA
//CARNE DE RES (TIRA) PAPA FRITA, ARROZ
//CON QUESO, ENSALADA
//CARNE DE RES (PUNTA S) PAPA FRITA, ARROZ
//CON QUESO, ENSALADA
//EXTRAS
//ARROZ CON QUESO (1 PORCION) 10 Bs.
//        PAPA FRITA (1 PORCION) 10 Bs.
//        YUCA FRITA (1 PORCION) 10 Bs.
//        PAN CON AJO (1 PORCION) 7 Bs.
//        VERDURAS SALTEADAS (1 PORCION) 10 Bs.
//RESTO - BAR
//PLATOS NACIONALES
//SABADO -DOMINGO
//LECHON AL HORNO (1 PORCION) 35 Bs.
//        POLLO AL HORNO (1 PORCION) 30 Bs.
//        CHULETA DE CERDO, PAPA, PLATANO. OCA,
//CAMOTE AL HORNO, CHOCLO, ENSALADA.
//        1 PRESA DE POLLO, PAPA, PLATANO. OCA,
//CAMOTE AL HORNO, CHOCLO, ENSALADA.
//        CHARQUE BLUEE (1 PORCION)
//30 Bs. CARNE DE LLAMA, MOTE, PAPA, HUEVO,
//QUESO DE CARACOLLO
//LAPING BLUEE (1 PORCION)
//CARNE DE RES, PAPA, MOTE DE HABA, 35 Bs.
//        ENSALADA SOLTERITO.
//        FRICASE BLUEE (1 PORCION)
//CARNE 35 Bs. DE CERDO, MOTE, PAPA, EN SOPA
//PLATOS NACIONALES
//BRAUNNI DE CHOCOLATE (1 PORCION) 10 Bs.
//        PIE DE LIMON BLUEE (1 PORCION) 10 Bs.
//        CHEESKEY BLUEE (1 PORCION) 10 Bs.

        // Desactiva las restricciones de clave foránea para evitar errores
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate de las tablas
        DB::table('categories')->truncate();
        DB::table('sales')->truncate();
        DB::table('products')->truncate();

        // Activa de nuevo las restricciones de clave foránea
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Category::create(['name' => 'BOTELLAS', 'icon' => 'fa-solid fa-bottle-water',]);
        Category::create(['name' => 'SHOTS', 'icon' => 'fa-solid fa-whiskey-glass',]);
        Category::create(['name' => 'GASEOSAS', 'icon' => 'fa-solid fa-bottle-droplet',]);
        Category::create(['name' => 'COCKTAILS CON ALCOHOL', 'icon' => 'fa-solid fa-cocktail',]);
        Category::create(['name' => 'COCKTAILS SIN ALCOHOL', 'icon' => 'fa-solid fa-cocktail',]);
        Category::create(['name' => 'CERVEZAS', 'icon' => 'fa-solid fa-beer',]);
        Category::create(['name' => 'JUGOS NATURALES', 'icon' => 'fa-solid fa-glass-water-droplet',]);
        Category::create(['name' => 'TABLITAS - PIQUEO', 'icon' => 'fa-solid fa-cheese',]);
        Category::create(['name' => 'ENSALADAS', 'icon' => 'fa-solid fa-leaf',]);
        Category::create(['name' => 'COMIDA RAPIDA', 'icon' => 'fa-solid fa-drumstick-bite',]);
        Category::create(['name' => 'CARNES A LA PARRILLA', 'icon' => 'fa-solid fa-burger',]);
        Category::create(['name' => 'EXTRAS', 'icon' => 'fa-solid fa-plus',]);
        Category::create(['name' => 'PLATOS NACIONALES', 'icon' => 'fa-solid fa-utensils',]);
        Category::create(['name' => 'POSTRES', 'icon' => 'fa-solid fa-ice-cream',]);

        // Productos de BOTELLAS
        Product::create(['name' => 'JACK DANIELS BOTELLA', 'price' => 540, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'JACK DANIELS VASO', 'price' => 40, 'unidad' => 'VASO', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'JHONY WOLKER NEGRO BOTELLA', 'price' => 550, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'JHONY WOLKER AZUL BOTELLA', 'price' => 2500, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'CHIVAS REGAL BOTELLA', 'price' => 450, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'OLD PARR BOTELLA', 'price' => 450, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'RON BACARDI SOLERA BOTELLA', 'price' => 350, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'RON HAVANA BOTELLA', 'price' => 300, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'RON ABUELO BOTELLA', 'price' => 250, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'SIGANI CASA REAL NEGRO BOTELLA', 'price' => 250, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);
        Product::create(['name' => 'SIGANI CASA DON LUCHO BOTELLA', 'price' => 350, 'unidad' => 'BOTELLA', 'category_id' => 1, 'status' => 'Active']);

        // Productos de SHOTS
        Product::create(['name' => 'JIGER MASTERS SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'Active']);
        Product::create(['name' => 'TEQUILA JOSE CUERVO SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'Active']);
        Product::create(['name' => 'FERNET BRANCA NEGRO SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'Active']);
        Product::create(['name' => 'FERNET BRANCA VERDE SHOT', 'price' => 25, 'unidad' => 'SHOT', 'category_id' => 2, 'status' => 'Active']);

        // Productos de GASEOSAS
        Product::create(['name' => 'COCA COLA 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'Active']);
        Product::create(['name' => 'FANTA 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'Active']);
        Product::create(['name' => 'SPRITE 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'Active']);
        Product::create(['name' => 'AGUA VITAL 500 ML', 'price' => 10, 'unidad' => 'BOTELLA', 'category_id' => 3, 'status' => 'Active']);

        // Productos de COCKTAILS CON ALCOHOL
        Product::create(['name' => 'MARGARITA BLUEE', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'PIÑA COLADA', 'price' => 35, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'DAIQUIRI', 'price' => 35, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'TODO BLUE', 'price' => 60, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'TEQUILA SUN RISE', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'YUNGUEÑITO', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'CHUFLABLUEE', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);
        Product::create(['name' => 'CAIPIRIÑA', 'price' => 30, 'unidad' => 'COPA', 'category_id' => 4, 'status' => 'Active']);

        // Productos de COCKTAILS SIN ALCOHOL
        Product::create(['name' => 'PIÑA BLUE VIRGEN', 'price' => 20, 'unidad' => 'COPA', 'category_id' => 5, 'status' => 'Active']);
        Product::create(['name' => 'SKY BLUEE', 'price' => 20, 'unidad' => 'COPA', 'category_id' => 5, 'status' => 'Active']);
        Product::create(['name' => 'BLUEE TONIC', 'price' => 20, 'unidad' => 'COPA', 'category_id' => 5, 'status' => 'Active']);

        // Productos de CERVEZAS
        Product::create(['name' => 'CORONA', 'price' => 15, 'unidad' => 'BOTELLA', 'category_id' => 6, 'status' => 'Active']);
        Product::create(['name' => 'HUARI', 'price' => 15, 'unidad' => 'BOTELLA', 'category_id' => 6, 'status' => 'Active']);
        Product::create(['name' => 'BLUE MONT', 'price' => 15, 'unidad' => 'BOTELLA', 'category_id' => 6, 'status' => 'Active']);

        // Productos de JUGOS NATURALES
        Product::create(['name' => 'MARACUYA', 'price' => 20, 'unidad' => 'JARRA', 'category_id' => 7, 'status' => 'Active']);
        Product::create(['name' => 'TUMBO', 'price' => 20, 'unidad' => 'JARRA', 'category_id' => 7, 'status' => 'Active']);
        Product::create(['name' => 'MOCONCHINCHE', 'price' => 20, 'unidad' => 'JARRA', 'category_id' => 7, 'status' => 'Active']);

        // Productos de TABLITAS - PIQUEO
        Product::create(['name' => 'TABLA PICAÑA BLUEE (2 PERSONAS)', 'description' => 'CARNE PICAÑA, PAPA FRITA O YUCA FRITA, RODAJITAS DE PAN FRANCES TOSTADO.', 'price' => 60, 'unidad' => 'TABLA', 'category_id' => 8, 'status' => 'Active']);
        Product::create(['name' => 'TABLA POLLO BLUEE (2 PERSONAS)', 'description' => 'CARNE POLLO, PAPA FRITA O YUCA FRITA, RODAJITAS DE PAN FRANCES TOSTADO.', 'price' => 50, 'unidad' => 'TABLA', 'category_id' => 8, 'status' => 'Active']);
        Product::create(['name' => 'TABLA MIX BLUEE (2 PERSONAS)', 'description' => 'CARNE POLLO, CARNE DE VACA, PAPA FRITA O YUCA FRITA, RODAJITAS DE PAN FRANCES TOSTADO.', 'price' => 70, 'unidad' => 'TABLA', 'category_id' => 8, 'status' => 'Active']);

        // Productos de ENSALADAS
        Product::create(['name' => 'ENSALADA CESAR (1 PORCION)', 'description' => 'LECHUGA MORADA, POLLO GRILL, ADERESO CESAR, QUESO PARMESANO', 'price' => 20, 'unidad' => 'PORCION', 'category_id' => 9, 'status' => 'Active']);
        Product::create(['name' => 'ENSALADA BLUE (1 PORCION)', 'description' => 'LECHUGA MORADA, RODAJAS DE TOMATE, ARITOS DE CEBOLLA BLANCA, QUESO MUZARELLA', 'price' => 20, 'unidad' => 'PORCION', 'category_id' => 9, 'status' => 'Active']);
        Product::create(['name' => 'ENSALADA SALTEADA BLUE (1 PORCION)', 'description' => 'TOMATE, CEBOLLAS, PIMENTON, SEMI COCIDAS EN JUGO DE SALSA SOYA.', 'price' => 20, 'unidad' => 'PORCION', 'category_id' => 9, 'status' => 'Active']);

        // Productos de COMIDA RAPIDA
        Product::create(['name' => 'POLLO FRITO TODO BLUEE (1 PORCION)', 'description' => 'UNA PRESA DE POLLO, PAPA FRITA, PLATANITOS FRITOS, ARROZ CON VERDURAS.', 'price' => 25, 'unidad' => 'PORCION', 'category_id' => 10, 'status' => 'Active']);
        Product::create(['name' => 'ALITAS DE POLLO TODO BLUEE', 'description' => '6 ALITAS DE POLLO, PAPA FRITA, 3 SALSAS DISPONIBLES 2 A ELIGIR', 'price' => 25, 'unidad' => 'PORCION', 'category_id' => 10, 'status' => 'Active']);
        Product::create(['name' => 'HAMBURGUESA BLUEEMONT', 'description' => 'HAMBURGUESA DE RES, PAN BLANCO, RODAJAS DE TOMATE, ARITOS DE CEBOLLA, PAPA FRITA, QUESO MUZARELLA', 'price' => 20, 'unidad' => 'PORCION', 'category_id' => 10, 'status' => 'Active']);
        Product::create(['name' => 'SALCHIPAPA TODO BLUEE', 'description' =>'TROCITOS DE CHORIZO, PAPA FRITA, ADERESOS', 'price' => 15, 'unidad' => 'PORCION', 'category_id' => 10, 'status' => 'Active']);

        // Productos de CARNES A LA PARRILLA
        Product::create(['name' => 'BIFE CHORIZO 400gr.', 'description' => 'CARNE DE RES (BIFE CHORIZO) PAPA FRITA, ARROZ CON QUESO, ENSALADA', 'price' => 35, 'unidad' => 'PORCION', 'category_id' => 11, 'status' => 'Active']);
        Product::create(['name' => 'TIRA 400gr.', 'description' => 'CARNE DE RES (TIRA) PAPA FRITA, ARROZ CON QUESO, ENSALADA', 'price' => 30, 'unidad' => 'PORCION', 'category_id' => 11, 'status' => 'Active']);
        Product::create(['name' => 'PUNTA S 400gr.', 'description' => 'CARNE DE RES (PUNTA S) PAPA FRITA, ARROZ CON QUESO, ENSALADA', 'price' => 30, 'unidad' => 'PORCION', 'category_id' => 11, 'status' => 'Active']);

        // Productos de EXTRAS
        Product::create(['name' => 'ARROZ CON QUESO (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 12, 'status' => 'Active']);
        Product::create(['name' => 'PAPA FRITA (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 12, 'status' => 'Active']);
        Product::create(['name' => 'YUCA FRITA (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 12, 'status' => 'Active']);
        Product::create(['name' => 'PAN CON AJO (1 PORCION)', 'price' => 7, 'unidad' => 'PORCION', 'category_id' => 12, 'status' => 'Active']);

        // Productos de PLATOS NACIONALES

        Product::create(['name' => 'LECHON AL HORNO (1 PORCION)', 'description' => 'CHULETA DE CERDO, PAPA, PLATANO. OCA, CAMOTE AL HORNO, CHOCLO, ENSALADA.', 'price' => 35, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);
        Product::create(['name' => 'POLLO AL HORNO (1 PORCION)', 'description' => '1 PRESA DE POLLO, PAPA, PLATANO. OCA, CAMOTE AL HORNO, CHOCLO, ENSALADA.', 'price' => 30, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);
        Product::create(['name' => 'CHULETA DE CERDO, PAPA, PLATANO. OCA, CAMOTE AL HORNO, CHOCLO, ENSALADA.', 'price' => 30, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);
        Product::create(['name' => 'CHARQUE BLUEE (1 PORCION)', 'description' => 'CARNE DE LLAMA, MOTE, PAPA, HUEVO, QUESO DE CARACOLLO', 'price' => 30, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);
        Product::create(['name' => 'LAPING BLUEE (1 PORCION)', 'description' => 'CARNE DE RES, PAPA, MOTE DE HABA, ENSALADA SOLTERITO.', 'price' => 35, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);
        Product::create(['name' => 'FRICASE BLUEE (1 PORCION)', 'description' => 'CARNE DE CERDO, MOTE, PAPA, EN SOPA', 'price' => 35, 'unidad' => 'PORCION', 'category_id' => 13, 'status' => 'Active']);

        // Productos de POSTRES
        Product::create(['name' => 'BRAUNNI DE CHOCOLATE (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 14, 'status' => 'Active']);
        Product::create(['name' => 'PIE DE LIMON BLUEE (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 14, 'status' => 'Active']);
        Product::create(['name' => 'CHEESKEY BLUEE (1 PORCION)', 'price' => 10, 'unidad' => 'PORCION', 'category_id' => 14, 'status' => 'Active']);
    }
}
