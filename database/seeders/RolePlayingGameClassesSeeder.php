<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePlayingGameClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Guerreiro', 'function' => 'dano'],
            ['name' => 'Mago', 'function' => 'ataque-distancia'],
            ['name' => 'Arqueiro', 'function' => 'ataque-distancia'],
            ['name' => 'Clerigo', 'function' => 'suporte']
        ];
        DB::table('role_playing_game_classes')->insert($data);
    }
}
