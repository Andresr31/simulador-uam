<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);

        $admin = User::create([
            'fullname' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $admin->assignRole('admin');

        $teacher = User::create([
            'fullname' => 'Profesor',
            'email' => 'profesor@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $teacher->assignRole('teacher');

        $student = User::create([
            'fullname' => 'Estudiante',
            'email' => 'estudiante@gmail.com',
            'career' => 'Ingenieria de sistemas',
            'semester' => '6',
            'password' => Hash::make('12345678')
        ]);
        $student->assignRole('student');
    }
}
