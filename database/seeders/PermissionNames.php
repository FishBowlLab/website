<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionNames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionIDs= [
            [
                "Permission_ID" =>1,
                "Permission_Name"=>"Admin",
            ],
            [
                "Permission_ID" =>2,
                "Permission_Name"=>"Super User",
            ],
            [
                "Permission_ID" =>3,
                "Permission_Name"=>"Standard User",
            ],
            [
                "Permission_ID" =>4,
                "Permission_Name"=>"Guest",
            ],
        ];
        // Awkwardly don't have a model for permissions.  Read on this to see if a model handling the relationship would be easier
        foreach($permissionIDs as $permissionID){
            DB::table('permission')->insert($permissionID);
        }
    }
}
