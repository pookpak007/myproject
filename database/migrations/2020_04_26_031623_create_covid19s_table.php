<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid19s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('date')->nullable();
            $table->string('country')->nullable();
            $table->integer('total')->nullable();
            $table->integer('active')->nullable();
            $table->integer('death')->nullable();
            $table->integer('recovered')->nullable();
            $table->float('a',16,2)->nullable();          //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->float('remark',16,2)->nullable();     //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->float('c',16,2)->nullable();          //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้


        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid19s');
    }
}
