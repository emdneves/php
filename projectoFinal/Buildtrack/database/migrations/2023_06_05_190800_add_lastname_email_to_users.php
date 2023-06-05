<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastnameEmailToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE users CHANGE nome firstName VARCHAR(255)');
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastName')->after('firstName')->nullable();
            $table->string('email')->unique()->after('lastName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('firstName', 'nome');
            $table->dropColumn('lastName');
            $table->dropColumn('email');
        });
    }
}
