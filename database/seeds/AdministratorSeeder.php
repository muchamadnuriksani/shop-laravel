<?php

use Illuminate\Database\Seeder;
use \App\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User;
        $administrator->username = "administrator";
        $administrator->name = "Site administrator";
        $administrator->email = "administrator@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larashop");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Erowati Baru, Semarang Utara, Kota Semarang";
        $administrator->phone = "08811195656";

        $administrator->save();

        $this->command->info("User admin berhasil diinsert");
    }
}
