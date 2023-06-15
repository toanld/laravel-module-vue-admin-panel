<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BalajiDharma\LaravelMenu\Models\Menu;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AdminCoreSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'permission list',
            'permission create',
            'permission edit',
            'permission delete',
            'role list',
            'role create',
            'role edit',
            'role delete',
            'user list',
            'user create',
            'user edit',
            'user delete',
            'menu list',
            'menu create',
            'menu edit',
            'menu delete',
            'menu.item list',
            'menu.item create',
            'menu.item edit',
            'menu.item delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('permission list');
        $role1->givePermissionTo('role list');
        $role1->givePermissionTo('user list');
        $role1->givePermissionTo('menu list');
        $role1->givePermissionTo('menu.item list');

        $role2 = Role::create(['name' => 'admin']);
        foreach ($permissions as $permission) {
            $role2->givePermissionTo($permission);
        }

        $role3 = Role::create(['name' => 'super-admin']);
        $role4 = Role::create(['name' => 'guest']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'toanld1905@gmail.com',
        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        // create menu
        $menu = Menu::create([
            'name' => 'Admin',
            'machine_name' => 'admin',
            'description' => 'Admin Menu',
        ]);

        $menu_items = [
            [
                'name'      => 'Dashboard',
                'uri'       => '/dashboard',
                'enabled'   => 1,
                'weight'    => 0,
                'icon'      => '<path fill="currentColor" d="M21,16H3V4H21M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2Z"></path>'
            ],
            [
                'name'      => 'Permissions',
                'uri'       => '/<admin>/permission',
                'enabled'   => 1,
                'weight'    => 1,
                'icon'      => '<path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14M7,22H9V24H7V22M11,22H13V24H11V22M15,22H17V24H15V22Z"></path>'
            ],
            [
                'name'      => 'Roles',
                'uri'       => '/<admin>/role',
                'enabled'   => 1,
                'weight'    => 2,
                'icon'      => '<path fill="currentColor" d="M15 14C16.33 14 19 14.67 19 16V17H11V16C11 14.67 13.67 14 15 14M15 13C16.11 13 17 12.11 17 11S16.11 9 15 9C13.9 9 13 9.89 13 11C13 12.11 13.9 13 15 13M22 8V18C22 19.11 21.11 20 20 20H4C2.9 20 2 19.11 2 18V6C2 4.89 2.9 4 4 4H10L12 6H20C21.11 6 22 6.9 22 8M20 8H4V18H20V8Z"></path>'
            ],
            [
                'name'      => 'Users',
                'uri'       => '/<admin>/user',
                'enabled'   => 1,
                'weight'    => 3,
                'icon'      => '<path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"></path>'
            ],
            [
                'name'      => 'Menus',
                'uri'       => '/<admin>/menu',
                'enabled'   => 1,
                'weight'    => 4,
                'icon'      => '<path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>'
            ]
        ];

        $menu->menuItems()->createMany($menu_items);
    }
}
