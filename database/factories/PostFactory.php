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
        //$user = User::all()->random()->id;

        return [
            'title' => $this->faker->text(10),
            'slug' => Str::of($this->faker->text(10))->slug(),
            'picture' => 'post/'.$this->faker->image('public/storage/post', 660,400,null,false),
            'description'=>$this->faker->text(250),
            'body' => $this->faker->paragraphs(5, true),
            'user_id' => User::all()->first(),
        ];
    }
}
