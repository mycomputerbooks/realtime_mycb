<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->string('slug');
            $table->boolean('active');
            $table->string('startTime');
            $table->integer('game01OrigTypingPts');
            $table->integer('game01AddTypingPts');
            $table->integer('game01Typing');
            $table->integer('game01HangmanHints');
            $table->integer('game01HangmanWins');
            $table->integer('game01HangmanLosses');

            $table->integer('game02OrigTypingPts');
            $table->integer('game02AddTypingPts');
            $table->integer('game02Typing');
            $table->integer('game02HangmanHints');
            $table->integer('game02HangmanWins');
            $table->integer('game02HangmanLosses');

            $table->integer('game03OrigTypingPts');
            $table->integer('game03AddTypingPts');
            $table->integer('game03Typing');
            $table->integer('game03HangmanHints');
            $table->integer('game03HangmanWins');
            $table->integer('game03HangmanLosses');

            $table->integer('game04OrigTypingPts');
            $table->integer('game04AddTypingPts');
            $table->integer('game04Typing');
            $table->integer('game04HangmanHints');
            $table->integer('game04HangmanWins');
            $table->integer('game04HangmanLosses');

            $table->integer('game05OrigTypingPts');
            $table->integer('game05AddTypingPts');
            $table->integer('game05Typing');
            $table->integer('game05HangmanHints');
            $table->integer('game05HangmanWins');
            $table->integer('game05HangmanLosses');

            $table->integer('game06OrigTypingPts');
            $table->integer('game06AddTypingPts');
            $table->integer('game06Typing');
            $table->integer('game06HangmanHints');
            $table->integer('game06HangmanWins');
            $table->integer('game06HangmanLosses');

            $table->integer('game07OrigTypingPts');
            $table->integer('game07AddTypingPts');
            $table->integer('game07Typing');
            $table->integer('game07HangmanHints');
            $table->integer('game07HangmanWins');
            $table->integer('game07HangmanLosses');

            $table->integer('game08OrigTypingPts');
            $table->integer('game08AddTypingPts');
            $table->integer('game08Typing');
            $table->integer('game08HangmanHints');
            $table->integer('game08HangmanWins');
            $table->integer('game08HangmanLosses');

            $table->integer('game09OrigTypingPts');
            $table->integer('game09AddTypingPts');
            $table->integer('game09Typing');
            $table->integer('game09HangmanHints');
            $table->integer('game09HangmanWins');
            $table->integer('game09HangmanLosses');

            $table->integer('game10OrigTypingPts');
            $table->integer('game10AddTypingPts');
            $table->integer('game10Typing');
            $table->integer('game10HangmanHints');
            $table->integer('game10HangmanWins');
            $table->integer('game10HangmanLosses');

            // =================================

            $table->integer('game11OrigTypingPts');
            $table->integer('game11AddTypingPts');
            $table->integer('game11Typing');
            $table->integer('game11HangmanHints');
            $table->integer('game11HangmanWins');
            $table->integer('game11HangmanLosses');

            $table->integer('game12OrigTypingPts');
            $table->integer('game12AddTypingPts');
            $table->integer('game12Typing');
            $table->integer('game12HangmanHints');
            $table->integer('game12HangmanWins');
            $table->integer('game12HangmanLosses');

            $table->integer('game13OrigTypingPts');
            $table->integer('game13AddTypingPts');
            $table->integer('game13Typing');
            $table->integer('game13HangmanHints');
            $table->integer('game13HangmanWins');
            $table->integer('game13HangmanLosses');

            $table->integer('game14OrigTypingPts');
            $table->integer('game14AddTypingPts');
            $table->integer('game14Typing');
            $table->integer('game14HangmanHints');
            $table->integer('game14HangmanWins');
            $table->integer('game14HangmanLosses');

            $table->integer('game15OrigTypingPts');
            $table->integer('game15AddTypingPts');
            $table->integer('game15Typing');
            $table->integer('game15HangmanHints');
            $table->integer('game15HangmanWins');
            $table->integer('game15HangmanLosses');

            $table->integer('game16OrigTypingPts');
            $table->integer('game16AddTypingPts');
            $table->integer('game16Typing');
            $table->integer('game16HangmanHints');
            $table->integer('game16HangmanWins');
            $table->integer('game16HangmanLosses');

            $table->integer('game17OrigTypingPts');
            $table->integer('game17AddTypingPts');
            $table->integer('game17Typing');
            $table->integer('game17HangmanHints');
            $table->integer('game17HangmanWins');
            $table->integer('game17HangmanLosses');

            $table->integer('game18OrigTypingPts');
            $table->integer('game18AddTypingPts');
            $table->integer('game18Typing');
            $table->integer('game18HangmanHints');
            $table->integer('game18HangmanWins');
            $table->integer('game18HangmanLosses');

            $table->integer('game19OrigTypingPts');
            $table->integer('game19AddTypingPts');
            $table->integer('game19Typing');
            $table->integer('game19HangmanHints');
            $table->integer('game19HangmanWins');
            $table->integer('game19HangmanLosses');

            $table->integer('game20OrigTypingPts');
            $table->integer('game20AddTypingPts');
            $table->integer('game20Typing');
            $table->integer('game20HangmanHints');
            $table->integer('game20HangmanWins');
            $table->integer('game20HangmanLosses');

            $table->integer('game21OrigTypingPts');
            $table->integer('game21AddTypingPts');
            $table->integer('game21Typing');
            $table->integer('game21HangmanHints');
            $table->integer('game21HangmanWins');
            $table->integer('game21HangmanLosses');

            $table->integer('game22OrigTypingPts');
            $table->integer('game22AddTypingPts');
            $table->integer('game22Typing');
            $table->integer('game22HangmanHints');
            $table->integer('game22HangmanWins');
            $table->integer('game22HangmanLosses');

            $table->integer('game23OrigTypingPts');
            $table->integer('game23AddTypingPts');
            $table->integer('game23Typing');
            $table->integer('game23HangmanHints');
            $table->integer('game23HangmanWins');
            $table->integer('game23HangmanLosses');

            $table->integer('game24OrigTypingPts');
            $table->integer('game24AddTypingPts');
            $table->integer('game24Typing');
            $table->integer('game24HangmanHints');
            $table->integer('game24HangmanWins');
            $table->integer('game24HangmanLosses');

            $table->integer('game25OrigTypingPts');
            $table->integer('game25AddTypingPts');
            $table->integer('game25Typing');
            $table->integer('game25HangmanHints');
            $table->integer('game25HangmanWins');
            $table->integer('game25HangmanLosses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
