<?php

use App\User;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        User::flushEventListeners();
        Category::flushEventListeners();
        Product::flushEventListeners();
        Transaction::flushEventListeners();

        $usersQuantity = 20;
        $categoriesQuantity = 30;
        $productsQuantity = 200;
        $transactionsQuantity = 200;

        factory(User::class, $usersQuantity)->create();
        factory(Category::class, $categoriesQuantity)->create();

        factory(Product::class, $productsQuantity)->create()->each(
        	function ($product) {
        		$categories = Category::all()->random(mt_rand(1, 5))->pluck('id');

        		$product->categories()->attach($categories);
        	});

        // factory(Transaction::class, $transactionsQuantity)->create();

    }
}
