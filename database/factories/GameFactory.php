<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Model\Game;
use Faker\Generator as Faker;
use App\Model\Category;

$factory->define(Game::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'category_id' => function () {
            return Category::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        },
        'mi'=> $faker->unique()->randomNumber(),
        'active' => $faker->boolean(),
        'startTime' => Carbon::now(),
        'game01OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game01AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game01Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game01HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game01HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game01HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game02OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game02AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game02Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game02HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game02HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game02HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game03OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game03AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game03Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game03HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game03HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game03HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game04OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game04AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game04Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game04HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game04HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game04HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game05OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game05AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game05Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game05HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game05HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game05HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game06OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game06AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game06Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game06HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game06HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game06HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game07OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game07AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game07Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game07HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game07HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game07HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game08OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game08AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game08Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game08HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game08HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game08HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game09OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game09AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game09Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game09HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game09HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game09HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game10OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game10AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game10Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game10HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game10HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game10HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game11OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game11AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game11Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game11HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game11HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game11HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game12OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game12AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game12Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game12HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game12HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game12HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game13OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game13AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game13Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game13HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game13HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game13HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game14OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game14AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game14Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game14HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game14HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game14HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game15OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game15AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game15Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game15HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game15HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game15HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game16OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game16AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game16Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game16HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game16HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game16HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game17OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game17AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game17Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game17HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game17HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game17HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game18OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game18AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game18Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game18HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game18HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game18HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game19OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game19AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game19Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game19HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game19HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game19HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game20OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game20AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game20Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game20HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game20HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game20HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game21OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game21AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game21Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game21HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game21HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game21HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game22OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game22AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game22Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game22HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game22HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game22HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game23OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game23AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game23Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game23HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game23HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game23HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game24OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game24AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game24Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game24HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game24HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game24HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),

        'game25OrigTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game25AddTypingPts' => $faker->numberBetween($min = 0, $max = 50),
        'game25Typing' => $faker->numberBetween($min = 0, $max = 50),
        'game25HangmanHints' => $faker->numberBetween($min = 0, $max = 50),
        'game25HangmanWins' => $faker->numberBetween($min = 0, $max = 50),
        'game25HangmanLosses' => $faker->numberBetween($min = 0, $max = 50),


    ];
});
