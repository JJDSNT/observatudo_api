<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('remote_id');
            $table->string('source');
            $table->url('source_url');
            $table->string('nome_responsavel');
            $table->email('email_responsavel');
            $table->string('cargo_responsavel');
            $table->string('frequencie');
            $table->char('direction');
            $table->string('competency');
            $table->integer('competency_id');
            $table->timestamps();
            $table->unique(['source', 'remote_id']);
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
        Schema::dropIfExists('indicators');
    }
}
