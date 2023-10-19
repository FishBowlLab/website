<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionInitial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            [
                "Role_ID"=>1,
                "Permission_ID"=>1,
            ],
            [
                "Role_ID"=>2,
                "Permission_ID"=>4,
            ],
            [
                "Role_ID"=>3,
                "Permission_ID"=>2,
            ],
            [
                "Role_ID"=>4,
                "Permission_ID"=>3,
            ],
        ];
        //
        foreach($roles as $role){
            DB::table('role_permission')->insert($role);
        }
    }
}
