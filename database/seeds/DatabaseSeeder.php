<?php

use estoque\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        $this->call(ProdutosSeeder::class);
    }
}

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        Produto::create([
            'nome' => 'Geladeira',
            'valor'  => 1200.10,
            'descricao' => 'Side by Side com gelo na porta',
            'quantidade'  => 5,

        ]);

        $this->command->info('criado');
    }
}
