<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the shop with example products (images in public/img).
     *
     * @return void
     */
    public function run()
    {
        $company = new Company;
        $company->name = 'OLD&NEW';
        $company->save();

        // name, image, price, discount %, on offer this week
        $products = [
            ['Pack de mandos', 'mandos.jpg', 59.99, 25, true],
            ['Auriculares', 'auriculares.jpg', 39.99, 20, true],
            ['Teclado retroiluminado', 'teclado.jpg', 49.99, 15, true],
            ['Ratón óptico', 'raton.jpg', 14.99, 0, false],
            ['Disco duro externo', 'disco-externo.jpg', 69.99, 0, false],
            ['Cable USB', 'cable-usb.jpg', 7.99, 0, false],
            ['Micrófonos', 'microfonos.jpg', 89.99, 0, false],
        ];

        foreach ($products as [$name, $image, $price, $discount, $onOffer]) {
            $product = new Product;
            $product->company_id = $company->id;
            $product->name = $name;
            $product->description = $name . ' de ejemplo para la tienda.';
            $product->imgurl = '/img/' . $image;
            $product->price = $price;
            $product->discountPercent = $discount;
            $product->discountStart_at = now()->subDays($onOffer ? 1 : 30);
            $product->discountEnd_at = now()->addDays($onOffer ? 7 : -20);
            $product->save();
        }
    }
}
