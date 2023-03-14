<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'JS';
        $role->description = 'Jefe Soporte';
        $role->save();

        $role = new Role();
        $role->name = 'AS';
        $role->description = 'Auxiliar Soporte';
        $role->save();
        
        $role = new Role();
        $role->name = 'C';
        $role->description = 'Cliente';
        $role->save();
    }
}
