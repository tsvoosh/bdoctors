<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('lastname', 25)->after('firstname');
            $table->string('address', 75)->after('lastname');
            $table->string('city', 25)->after('address');
            $table->string('telephone', 25)->nullable();
            $table->string('photo')->default('default.png');
            $table->text('cv')->nullable();
            $table->string('performance')->nullable();
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
            //
            $table->dropColumn('lastname');
            $table->dropColumn('address');
        });
    }
}
