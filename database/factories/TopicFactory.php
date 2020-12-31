<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => User::all()->random()->id,
            'note_id' => Note::all()->random()->id,
            'description' => $this->faker->paragraph(1),
        ];
    }
}
