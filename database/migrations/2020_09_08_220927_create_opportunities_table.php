<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('worth');
            $table->string('eligibility_slug');
            $table->string('status_slug');
            $table->string('detail_1');
            $table->string('detail_2');
            $table->text('about');
            $table->string('status');
            $table->string('eligibility');
            $table->text('how_to_apply');
            $table->text('requirements');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
