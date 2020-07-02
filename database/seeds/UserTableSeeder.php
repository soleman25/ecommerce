<?php

use App\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('Create default roles, permission and user administrator?', true)) {
            // Reset cached roles and permissions.
            app()['cache']->forget('spatie.permission.cache');

            // seed the default permission.
            $permissions = Permission::defaultPermissions();
            foreach ($permissions as $perms) {
                Permission::firstOrCreate(['name' => $perms]);
            }
            $this->command->info('Default Permissions added.');

            // seed the default roles.
            $roles = Role::defaultRoles();
            foreach ($roles as $role) {
                $role = Role::firstOrCreate(['name' => $role]);

                // assign all permissions.
                if ($role->name == 'admin') {
                    $role->syncPermissions(Permission::all());
                }
            }

            $this->command->info('Default Roles added.');
            $user = factory(User::class)->create();
            $user->assignRole('admin');
            $this->command->info('Here is your admin details to login:');
            $this->command->warn($user->email);
            $this->command->warn('Password is "secret"');
        }
    }
}
        // Confirm roles and permisson default needed.
