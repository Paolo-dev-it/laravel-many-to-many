<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            'Instagram',
            'Facebook',
            'Twitter',
            'Telegram',
        ];

        foreach ($socials as $social) {
            $newSocial = new Category();
            $newSocial->user= $social;
            $newSocial->save();
        }
    }
}
