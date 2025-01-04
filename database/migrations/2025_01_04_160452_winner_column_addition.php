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
        Schema::table('matches', function (Blueprint $table) {
            $table->id(); // Adds a primary key ID column.
            $table->string('winner')->nullable(); // Replace 'column_name' with the column after which you want to add the 'winner' column.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropColumn('winner');
            $table->dropColumn('id'); // Removes the primary key ID column.
        });
    }
};
