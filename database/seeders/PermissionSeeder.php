<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permission untuk mengelola users
    Permission::updateORcreate(['name' => 'show users']);
    Permission::updateORcreate(['name' => 'add users']);
    Permission::updateORcreate(['name' => 'edit users']);
    Permission::updateORcreate(['name' => 'delete users']);

    
    // Permission for managing departments
    Permission::updateOrCreate(['name' => 'show departement']);
    Permission::updateOrCreate(['name' => 'add departement']);
    Permission::updateOrCreate(['name' => 'edit departement']);
    Permission::updateOrCreate(['name' => 'delete departement']);


    }
}
