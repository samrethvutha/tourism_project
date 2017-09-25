<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      //  $user=new App\User;
      $user=new User;
      $user->name='Admin';
      $user->email='Admin123@gmail.com';
      $user->password=Hash::make('Admin123');
      $user->save();
      $user=new User;
      $user->name='Owner';
      $user->email='Owner123@gmail.com';
      $user->password=Hash::make('Admin123');
      $user=$user->save();
      $user=new User;
      $user->name='Editor';
      $user->email='Editor123@gmail.com';
      $user->password=Hash::make('Admin123');
      $user=$user->save();
        //  $this->call(ProvincesTableSeeder::class);
        //    $this->call(PermissionTableSeeder::class);
          //  $this->call(RoleTableSeeder::class);
            //   $this->call(UserTableSeeder::class);
              // $this->call(GalleryTypeTableSeeder::class);
    }
}
