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
      DB::table('users')->insert([
        [
        'name' => '矢島英樹',
        'age' => 46,
        'sex' => '男',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '豊田陽子',
        'age' => 45,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '大村さくら',
        'age' => 16,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '神田美咲',
        'age' => 22,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],


    ]);
    }
}
