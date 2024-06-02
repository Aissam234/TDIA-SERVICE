<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFiliereToFillieresInTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('teachers', function (Blueprint $table) {
        //     $table->renameColumn('filiere', 'fillieres');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('teachers', function (Blueprint $table) {
        //     $table->renameColumn('fillieres', 'filiere');
        // });
    }
}