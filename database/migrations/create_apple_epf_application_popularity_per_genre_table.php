<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppleEpfApplicationPopularityPerGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(config('apple-epf.database_connection'))->create('application_popularity_per_genre', function (Blueprint $table) {
            $table->primary(['storefront_id', 'genre_id', 'application_id'], 'application_popularity_per_genre_primary');
            $table->unsignedInteger('export_date');
            $table->unsignedBigInteger('storefront_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('application_id');
            $table->unsignedBigInteger('application_rank');
            $table->string('application_type', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(config('apple-epf.database_connection'))->dropIfExists('application_popularity_per_genre');
    }
}
