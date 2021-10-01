<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'view_user'],
            ['name' => 'create_user'],
            ['name' => 'update_user'],
            ['name' => 'delete_user'],

            ['name' => 'view_unit'],
            ['name' => 'update_unit'],

            ['name' => 'view_all_branch'],
            ['name' => 'view_branch'],
            ['name' => 'create_branch'],
            ['name' => 'update_branch'],
            ['name' => 'delete_branch'],

            ['name' => 'view_department'],
            ['name' => 'create_department'],
            ['name' => 'update_department'],
            ['name' => 'delete_department'],

            ['name' => 'view_content'],
            ['name' => 'create_content'],
            ['name' => 'update_content'],
            ['name' => 'delete_content'],
            ['name' => 'download_content'],
            
            

           
        ]);
    }
}
