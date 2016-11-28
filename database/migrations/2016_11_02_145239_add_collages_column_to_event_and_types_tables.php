<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCollagesColumnToEventAndTypesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function($table)
        {
            $table->string('collage')->after('thumbnails');
        });

        Schema::table('events_types', function($table)
        {
            $table->string('collage')->after('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function($table)
        {
            $table->dropColumn('collage');
        });

        Schema::table('events_types', function($table)
        {
            $table->dropColumn('collage');
        });
    }
}
