<?php

use Illuminate\Database\Seeder;

class SentinelDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        DB::table('users')->truncate();

        $admin = Sentinel::getUserRepository()->create(array(
            'username' => 'admin',
            'email'    => 'admin@admin.com',
            'phone'    => '0936200593',
            'password' => '12345678',
        ));

        $mod = Sentinel::getUserRepository()->create(array(
            'username' => 'mod',
            'email'    => 'mod@mod.com',
            'phone'    => '0936200593',
            'password' => '12345678'
        ));

        $staff = Sentinel::getUserRepository()->create(array(
            'username' => 'staff',
            'email'    => 'staff@staff.com',
            'phone'    => '0936200593',
            'password' => '12345678'
        ));

        $shop = Sentinel::getUserRepository()->create(array(
            'username' => 'shop',
            'email'    => 'shop@shop.com',
            'phone'    => '0936200593',
            'password' => '12345678'
        ));

        // Create Activations
        DB::table('activations')->truncate();
        $code = Activation::create($admin)->code;
        Activation::complete($admin, $code);
        $code = Activation::create($mod)->code;
        Activation::complete($mod, $code);
        $code = Activation::create($staff)->code;
        Activation::complete($staff, $code);
        $code = Activation::create($shop)->code;
        Activation::complete($shop, $code);

        // Create Roles
        $administratorRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => array(
                'users.create' => true,
                'users.update' => true,
                'users.view' => true,
                'users.destroy' => true,
                'roles.create' => true,
                'roles.update' => true,
                'roles.view' => true,
                'roles.delete' => true
            )
        ));
        $moderatorRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Moderator',
            'slug' => 'moderator',
            'permissions' => array(
                'users.update' => true,
                'users.view' => true,
            )
        ));

        $staffRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Staff',
            'slug' => 'staff',
            'permissions' => array()
        ));

        $shopRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Shop',
            'slug' => 'shop',
            'permissions' => array()
        ));

        // Assign Roles to Users
        $administratorRole->users()->attach($admin);
        $moderatorRole->users()->attach($mod);
        $staffRole->users()->attach($staff);
        $shopRole->users()->attach($shop);
    }
}
