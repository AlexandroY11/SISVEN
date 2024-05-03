<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Paymode;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Categorías
        Category::factory()->count(5)->create();

        // Productos
        Product::factory()->count(20)->create();

        // Modos de pago
        // Paymode::factory()->count(5)->create();

        // Clientes
        Customer::factory()->count(15)->create();

        // Facturas
        Invoice::factory()->count(10)->create();

        // Detalles
        Detail::factory()->count(50)->create();

    }
}
