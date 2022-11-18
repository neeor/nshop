<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description');  
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections'); 
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
        Schema::table('subsections', function (Blueprint $table) {
            $table->dropForeign('subsections_section_id_foreign');            
            $table->dropColumn('section_id');
        });        
        Schema::dropIfExists('subsections');
    }
}
