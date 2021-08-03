<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'country_create',
            ],
            [
                'id'    => 18,
                'title' => 'country_edit',
            ],
            [
                'id'    => 19,
                'title' => 'country_show',
            ],
            [
                'id'    => 20,
                'title' => 'country_delete',
            ],
            [
                'id'    => 21,
                'title' => 'country_access',
            ],
            [
                'id'    => 22,
                'title' => 'team_create',
            ],
            [
                'id'    => 23,
                'title' => 'team_edit',
            ],
            [
                'id'    => 24,
                'title' => 'team_show',
            ],
            [
                'id'    => 25,
                'title' => 'team_delete',
            ],
            [
                'id'    => 26,
                'title' => 'team_access',
            ],
            [
                'id'    => 27,
                'title' => 'player_create',
            ],
            [
                'id'    => 28,
                'title' => 'player_edit',
            ],
            [
                'id'    => 29,
                'title' => 'player_show',
            ],
            [
                'id'    => 30,
                'title' => 'player_delete',
            ],
            [
                'id'    => 31,
                'title' => 'player_access',
            ],
            [
                'id'    => 32,
                'title' => 'venue_create',
            ],
            [
                'id'    => 33,
                'title' => 'venue_edit',
            ],
            [
                'id'    => 34,
                'title' => 'venue_show',
            ],
            [
                'id'    => 35,
                'title' => 'venue_delete',
            ],
            [
                'id'    => 36,
                'title' => 'venue_access',
            ],
            [
                'id'    => 37,
                'title' => 'match_create',
            ],
            [
                'id'    => 38,
                'title' => 'match_edit',
            ],
            [
                'id'    => 39,
                'title' => 'match_show',
            ],
            [
                'id'    => 40,
                'title' => 'match_delete',
            ],
            [
                'id'    => 41,
                'title' => 'match_access',
            ],
            [
                'id'    => 42,
                'title' => 'result_create',
            ],
            [
                'id'    => 43,
                'title' => 'result_edit',
            ],
            [
                'id'    => 44,
                'title' => 'result_show',
            ],
            [
                'id'    => 45,
                'title' => 'result_delete',
            ],
            [
                'id'    => 46,
                'title' => 'result_access',
            ],
            [
                'id'    => 47,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
