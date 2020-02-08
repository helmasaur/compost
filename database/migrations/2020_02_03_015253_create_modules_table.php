<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name')->unique();
            $table->text('content');
            $table->unsignedTinyInteger('module_type_id');
            $table->boolean('is_activated')->default(false);
            $table->unsignedTinyInteger('order');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('module_type_id')
                ->references('id')
                ->on('module_types');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
