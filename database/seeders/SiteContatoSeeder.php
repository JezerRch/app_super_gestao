<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '65999999999';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = '2';
        $contato->mensagem = 'Seja bem vindo!';
        $contato->save();
    }
}
