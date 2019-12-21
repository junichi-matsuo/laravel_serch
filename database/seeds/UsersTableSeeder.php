<?php

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
        //
      DB::table('users')->insert(
        [
        'name' => '松尾潤一',
        'age' => 34,
        'sex' => '男',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ]
        [
        'name' => '松尾育美',
        'age' => 36,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ]

    );
    }
}
