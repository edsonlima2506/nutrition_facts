<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = $this->getList();

        foreach($list as $item) {
            $userData = Arr::except($item, ['role']);
    
            if($user = User::updateOrCreate(['email' => data_get($item, 'email')], $userData)) {
                $user->assignRole(data_get($item, 'role'));
            }
        }
    }

    /**
     * @return array
     */
    protected function getList(): array
    {
        return [
            [
                'name'      => 'Super Admin',
                'email'     => 'super@admin.com',
                'password'  => Hash::make('password'),
                'role'      => 'super_admin'
            ],
            [
                'name'      => 'Empresário 1',
                'email'     => 'empresario@foodgenius.com',
                'password'  => Hash::make('password'),
                'role'      => 'client'
            ]
        ];
    }
}
