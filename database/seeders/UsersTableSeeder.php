<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();


         \DB::table('users')->insert(array (
                        0 =>
                             array (
                                 'id' => 1,
                                 'role_id' => 1,
                                 'name' => 'Wave Admin',
                                 'email' => 'z.aisa@ya.ru',
                                 'username' => 'admin',
                                 'avatar' => 'users/default.png',
                                 'password' => Hash::make('zako1996'),
                                 'remember_token' => '4oXDVo48Lm1pc4j7NkWI9cMO4hv5OIEJFMrqjSCKQsIwWMGRFYDvNpdioBfo',
                                 'settings' => NULL,
                                 'created_at' => '2017-11-21 16:07:22',
                                 'updated_at' => '2018-09-22 23:34:02',
                                 'stripe_id' => NULL,
                                 'card_brand' => NULL,
                                 'card_last_four' => NULL,
                                 'trial_ends_at' => NULL,
                                 'verification_code' => NULL,
                                 'verified' => 1,
                             ),
                    1 =>
                    array (
                        'id' => 2,
                        'role_id' => 4,
                        'name' => 'Pro client',
                        'email' => 'pro@ya.ru',
                        'username' => 'proclient',
                        'avatar' => 'users/default.png',
                        'password' => Hash::make('zako1996'),
                        'remember_token' => '4osXDVo48Lm1pc4j7NkWI9cMO4hv5OIEJFMrqjSCKQsIwWMGRFYDvNpdioBfo',
                        'settings' => NULL,
                        'created_at' => '2017-11-21 16:07:22',
                        'updated_at' => '2018-09-22 23:34:02',
                        'stripe_id' => NULL,
                        'card_brand' => NULL,
                        'card_last_four' => NULL,
                        'trial_ends_at' => NULL,
                        'verification_code' => NULL,
                        'verified' => 1,
                    ),
                ));

    }
}
