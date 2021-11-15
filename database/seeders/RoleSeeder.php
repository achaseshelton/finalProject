<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['Administrator', 'Librarian', 'Cardholder', 'Child'];
        for ($i = 0; $i < count($titles); $i++) {
            $role = new Role;
            $role->title = $titles[$i];
            $role->save();
        }

    }
}
