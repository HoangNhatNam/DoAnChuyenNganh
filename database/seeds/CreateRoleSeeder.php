<?php

use Illuminate\Database\Seeder;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
           ['name' => 'admin', 'display_name' => 'Quản trị hệ thống'],
            ['name' => 'guest', 'display_name' => 'Khách hàng'],
            ['name' => 'developer', 'display_name' => 'Phát triển hệ thống'],
            ['name' => 'content', 'display_name' => 'Chỉnh sửa nội dung'],
        ]);
    }
}
