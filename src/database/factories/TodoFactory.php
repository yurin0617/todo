<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->realText(20), // 20文字程度のダミー文章
            'category_id' => $this->faker->numberBetween(1, 3), // 1~3番のカテゴリをランダムに指定
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
