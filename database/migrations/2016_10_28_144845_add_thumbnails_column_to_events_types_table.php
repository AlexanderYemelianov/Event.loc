<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThumbnailsColumnToEventsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events_types', function($table)
        {
            $table->string('thumbnail')->after('description');
            $table->integer('class')->after('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events_types', function($table)
        {
            $table->dropColumn('thumbnail');
            $table->dropColumn('class');
        });
    }
}
