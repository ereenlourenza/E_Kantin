<?php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // CustomerSeeder::class,
            // AdminKantinSeeder::class,
            // MenuSeeder::class,
            // KeranjangSeeder::class,
            // TransaksiSeeder::class,
            // RatingReviewSeeder::class,
            // PembayaranSeeder::class,
            ProductSeeder::class,
            // DetailTransaksiSeeder::class,
        ]);
    }
}
