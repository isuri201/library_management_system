<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catergory_id');
            $table->string('title');
            $table->string('author');
            $table->string('ISBN_No');
            $table->date('publication_date');
            $table->string('publisher');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('catergory_id')->references('id')->on('book_catergory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
