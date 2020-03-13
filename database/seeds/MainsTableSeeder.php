<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        TODO: CREATE 'RoleFactory' and use it
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'user']);

//        TODO: Modify UserFactory to create these users
        $adminRole = Role::where('name','admin') ->first();
        $authorRole = Role::where('name','author') ->first();
        $userRole = Role::where('name','user') ->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('author')
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

        factory(App\Category::class, 4)->create()
            ->each(function ($category) {
                factory(App\Product::class, 8)->create();
            });

        factory(App\Contact::class, 10)->create();

    }
}
