<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      User::factory(1)->create();

      $roles = [
         [
            'name' => 'Admin'
         ],
         [
            'name' => 'User'
         ]
      ];

      foreach($roles as $role) {
         Role::create($role);
      }
   }
}
