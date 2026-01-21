<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('name');
            });
        }

        // Update existing products
        $products = \Illuminate\Support\Facades\DB::table('products')->get();
        foreach ($products as $product) {
            $slug = \Illuminate\Support\Str::slug($product->name);
            $originalSlug = $slug;
            $count = 1;
            // Check for uniqueness including the ones we just updated in this loop (which are in DB)
            while (\Illuminate\Support\Facades\DB::table('products')->where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            \Illuminate\Support\Facades\DB::table('products')
                ->where('id', $product->id)
                ->update(['slug' => $slug]);
        }

        // Change column to not nullable and unique after population
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
