<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Produto::class;
    public function definition(): array
    {
        $nome = fake()->sentence();
        return [
            'nome' => $nome,
            'descricao' => fake()->paragraph(),
            'preco' => fake()->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => 'https://picsum.photos/400/400?random=' . rand(1, 1000),
            'id_user' => User::factory(),
            'id_categoria' => Categoria::factory(),
        ];
    }
}
