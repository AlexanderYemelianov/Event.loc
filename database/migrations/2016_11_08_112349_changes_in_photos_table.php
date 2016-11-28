<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangesInPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function($table)
        {
            $table->dropColumn('events_id');
            $table->dropColumn('photo_description');
            $table->dropColumn('display_name');
        });

        Schema::table('photos', function($table)
        {
            $table->integer('gallery_id')->unsigned()->index()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function($table)
        {
            $table->integer('events_id')->unsigned()->index();
            $table->longText('display_name')->after('photo_name');
            $table->longText('photo_description')->after('display_name');
        });

        Schema::table('photos', function($table)
        {
            $table->dropColumn('gallery_id');
        });

    }
}
