<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Database\Factories\UserFactory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->sentence(),
          'body' => $this->faker->paragraph(),
          'user_id' => User::factory(),
        ];
    }
}
