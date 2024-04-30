<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menuses')->insert([
            ['title' => 'หน้าหลัก', 'icon' => 'm2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25', 'link' => '/', 'permission' => 'user', 'parent_id' => null],
            ['title' => 'งานของฉัน', 'icon' => 'M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z', 'link' => '/admin', 'permission' => 'admin', 'parent_id' => null],
            ['title' => 'บัญชี (สาร)', 'icon' => 'M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z', 'link' => '/reports', 'permission' => 'ceo', 'parent_id' => null],
            ['title' => 'Profile', 'icon' => 'M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z', 'link' => '/profile', 'permission' => 'user', 'parent_id' => null], // Parent menu
            ['title' => 'Edit Profile', 'icon' => 'M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z', 'link' => '/profile/edit', 'permission' => 'user', 'parent_id' => 4], // Submenu under Profile
            ['title' => 'Delete Profile', 'icon' => 'M22 10.5h-6m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM4 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 10.374 21c-2.331 0-4.512-.645-6.374-1.766Z', 'link' => '/profile/delete', 'permission' => 'user', 'parent_id' => 4], // Submenu under Profile
            ['title' => 'บัญชีสาร (สากล)', 'icon' => 'M8.5 3.528v4.644c0 .729-.29 1.428-.805 1.944l-1.217 1.216a8.75 8.75 0 0 1 3.55.621l.502.201a7.25 7.25 0 0 0 4.178.365l-2.403-2.403a2.75 2.75 0 0 1-.805-1.944V3.528a40.205 40.205 0 0 0-3 0Zm4.5.084.19.015a.75.75 0 1 0 .12-1.495 41.364 41.364 0 0 0-6.62 0 .75.75 0 0 0 .12 1.495L7 3.612v4.56c0 .331-.132.649-.366.883L2.6 13.09c-1.496 1.496-.817 4.15 1.403 4.475C5.961 17.852 7.963 18 10 18s4.039-.148 5.997-.436c2.22-.325 2.9-2.979 1.403-4.475l-4.034-4.034A1.25 1.25 0 0 1 13 8.172v-4.56Z', 'link' => '/raw_material/global', 'permission' => 'user', 'parent_id' => 3],
            ['title' => 'บัญชีสาร (ในระบบ)', 'icon' => 'M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z', 'link' => '/raw_material/global', 'permission' => 'user', 'parent_id' => 3],
            ['title' => 'การจัดส่งเทสเตอร์', 'icon' => 'm20.772 10.156-1.368-4.105A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.105A2.003 2.003 0 0 0 2 12v5c0 .753.423 1.402 1.039 1.743-.013.066-.039.126-.039.195V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.062c0-.069-.026-.13-.039-.195A1.993 1.993 0 0 0 22 17v-5c0-.829-.508-1.541-1.228-1.844zM4 17v-5h16l.002 5H4zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6z', 'link' => '/shipping_tester', 'permission' => 'user', 'parent_id' => null],
        ]);

        // Adding roles for menus
        DB::table('menu_roles')->insert([
            ['menus_id' => 1, 'roles_id' => 1],
            ['menus_id' => 1, 'roles_id' => 3],
            ['menus_id' => 2, 'roles_id' => 1],
            ['menus_id' => 3, 'roles_id' => 3],
            ['menus_id' => 4, 'roles_id' => 1], // Assume role 1 is also for regular users
            ['menus_id' => 5, 'roles_id' => 1], // Edit Profile access
            ['menus_id' => 6, 'roles_id' => 1], // Delete Profile access
        ]);

        // Assuming you know the IDs of menus and roles
        // Example: Menu 1 is accessible by Role 1 in Company 1 and by all users in Role 2 in Company 2
        DB::table('menu_accesses')->insert([

            ['menus_id' => 1, 'roles_id' => null, 'company_id' => null, 'user_id' => null],


            ['menus_id' => 2, 'roles_id' => 2, 'company_id' => 1, 'user_id' => null],
            ['menus_id' => 2, 'roles_id' => 3, 'company_id' => 1, 'user_id' => null],


            ['menus_id' => 2, 'roles_id' => null, 'company_id' => 1, 'user_id' => null],
            ['menus_id' => 2, 'roles_id' => null, 'company_id' => 2, 'user_id' => null],


            ['menus_id' => 3, 'roles_id' => 5, 'company_id' => null, 'user_id' => null],
            ['menus_id' => 7, 'roles_id' => 5, 'company_id' => null, 'user_id' => null],
            ['menus_id' => 8, 'roles_id' => 5, 'company_id' => null, 'user_id' => null],


            ['menus_id' => 4, 'roles_id' => null, 'company_id' => null, 'user_id' => null],
            ['menus_id' => 5, 'roles_id' => null, 'company_id' => null, 'user_id' => null],
            ['menus_id' => 6, 'roles_id' => null, 'company_id' => null, 'user_id' => null],

            ['menus_id' => 9, 'roles_id' => 5, 'company_id' => null, 'user_id' => null],
        ]);

        // Note: The 'user_id' is null where the rule applies to all users within the role at a company.
        // If 'company_id' is null, it implies all companies (if your logic supports this).

    }
}
