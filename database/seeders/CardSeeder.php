<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cards=[["Name"=>"Underground Sea", "Set"=>"Unlimited Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>1800.00], ["Name"=>"Underground Sea", "Set"=>"Collectors\' Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>250.00], ["Name"=>"Underground Sea", "Set"=>"Revised Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>800.00], ["Name"=>"Underground Sea", "Set"=>"Limited Edition Alpha", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>8000.00], ["Name"=>"Underground Sea", "Set"=>"Intl. Collectors\' Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>250.00], ["Name"=>"Underground Sea", "Set"=>"Limited Edition Beta", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>4800.00], ["Name"=>"Underground Sea", "Set"=>"30th Anniversary Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>170.00], ["Name"=>"Underground Sea", "Set"=>"30th Anniversary Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>400.00], ["Name"=>"Taiga", "Set"=>"Unlimited Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>800.00], ["Name"=>"Taiga", "Set"=>"Collectors\' Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>125.00], ["Name"=>"Taiga", "Set"=>"Intl. Collectors\' Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>125.00], ["Name"=>"Taiga", "Set"=>"Limited Edition Alpha", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>2400.00], ["Name"=>"Taiga", "Set"=>"Revised Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>350.00], ["Name"=>"Taiga", "Set"=>"30th Anniversary Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>130.00], ["Name"=>"Taiga", "Set"=>"Limited Edition Beta", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>2000.00], ["Name"=>"Taiga", "Set"=>"30th Anniversary Edition", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>80.00], ["Name"=>"Taigam, Ojutai Master", "Set"=>"Commander 2017", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>0.10], ["Name"=>"Taigam, Ojutai Master", "Set"=>"Multiverse Legends", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>1.00], ["Name"=>"Taigam, Ojutai Master", "Set"=>"Multiverse Legends", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>0.50], ["Name"=>"Taigam, Ojutai Master - Serial Numbered", "Set"=>"Multiverse Legends", "Condition"=>"NM", "Finish"=>"non-foil", "Source"=>"FaceToFaceGames", "Price"=>40.00]];
        foreach($cards as $card){
            DB::table('cards')->insert($card);
        }
    }
}
