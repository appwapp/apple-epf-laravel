<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppleEpfSongPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(config('apple-epf.database_connection'))->create('song_price', function (Blueprint $table) {
            $table->primary(['song_id', 'storefront_id'], 'song_price_primary');
            $table->unsignedInteger('export_date');
            $table->unsignedBigInteger('song_id');
            $table->decimal('retail_price');
            $table->unsignedBigInteger('storefront_id');
            $table->string('currency_code', 3);
            $table->dateTime('availability_date', 3);
            $table->decimal('hq_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(config('apple-epf.database_connection'))->dropIfExists('song_price');
    }
}
