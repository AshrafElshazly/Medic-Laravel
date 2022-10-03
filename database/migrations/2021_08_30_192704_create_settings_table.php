<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id('id');
            $table->string('welcome_txt', 255);
            $table->string('email', 100);
            $table->string('phone', 15);
            $table->string('location', 255);
            $table->text('map');
            $table->string('emegency_phone', 15);
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('pinterest');
            $table->text('github');
            $table->boolean('active')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
