<?php

namespace Database\Seeders;

use App\Models\Shirt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShirtSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shirts = [
            [
                "name" => "Starbox",
                "artist" => "Daniel Bernal",
                "image" => asset("storage/starbox.png"),
                "price" => 20,
            ],
            [
                "name" => "Fishbowl Entry",
                "artist" => "Fishbowl Artist",
                "image" => asset("storage/logo.png"),
                "price" => 5,
            ]
        ];
        foreach($shirts as $key => $value){
            Shirt::create($value);
        }
    }
}
