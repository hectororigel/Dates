<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->unsignedBigInteger('phoneNumber');
            $table->string('email');
            $table->string('datetimepicker1')->nullable();
            $table->string('datetimepicker2')->nullable();
            $table->string('reservation_date')->nullable();
            $table->string('reservation_end_date')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *$table->date('reservation_end_date')->nullable()->unsigned();
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
