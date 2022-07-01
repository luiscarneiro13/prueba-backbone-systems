<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_entities', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code')->index();
            $table->string('locality')->nullable();
            $table->bigInteger("federal_entity_id");
            $table->string("federal_entity_name");
            $table->string("federal_entity_code")->nullable();
            $table->string("settlement_key");
            $table->string("settlement_name");
            $table->string("settlement_zone_type");
            $table->string("settlement_type_name");
            $table->string("municipality_key");
            $table->string("municipality_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_entities');
    }
}
