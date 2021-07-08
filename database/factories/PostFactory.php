<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->limit(1)->first();

        return [
            'title' => $this->faker->text(10),
            'slug' => Str::of($this->faker->text(10))->slug(),
            'body' => $this->faker->paragraphs(3, true),
            'user_id' => $user->id,
        ];
    }
}
