<?php

namespace App\Console\Commands\Acl;

use App\Models\System\Admin;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FakeAclCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'acl:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed dât phân quyền';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("init");
        $permissions = json_decode(file_get_contents(public_path() . '/json/permission.json'), true);
        $permissions = $permissions['permission'];
        $this->warn("-- truncate");
        Schema::disableForeignKeyConstraints();
        \DB::table('admins')->truncate();
        \DB::table('model_has_permissions')->truncate();
        \DB::table('model_has_roles')->truncate();
        \DB::table('role_has_permissions')->truncate();
        \DB::table('permissions')->truncate();
        \DB::table('roles')->truncate();
        $admin = Admin::first();
        $this->warn("-- Insert Admin");
        if (!$admin) {
            $admin             = new Admin();
            $admin->name       = 'Admin';
            $admin->email      = 'admin@gmail.com';
            $admin->phone      = '';
            $admin->created_at = Carbon::now();
            $admin->password   = \Hash::make('123456789');
            $admin->save();
        }
        $this->warn("-- Insert Permission");
        foreach ($permissions as $permission) {
            $permission['guard_name'] = 'admins';
            $permission['created_at'] = Carbon::now();
            $permissionInsert         = $permission;
            $this->warn("-- -- Permission: ". $permission['name']);
            Permission::create($permissionInsert);
        }
        $this->warn("-- Insert Role");
        $roleFake = [
            'name'        => 'SupperAdmin',
            'guard_name'  => 'admins',
            'description' => 'Full quyền',
            'created_at'  => Carbon::now()
        ];
        $role     = Role::create($roleFake);
        $this->warn("-- givePermissionTo");
        $role->givePermissionTo(1);
        $this->warn("-- syncRoles");
        $admin->syncRoles($role->id);
        Schema::enableForeignKeyConstraints();
    }
}
