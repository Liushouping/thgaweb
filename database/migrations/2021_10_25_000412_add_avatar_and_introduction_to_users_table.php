<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarAndIntroductionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('introduction')->nullable();
            $table->boolean('active')->default(false);
            $table->string('current_job')->nullable();
            $table->string('current_restaurant')->nullable();
            $table->integer('gender')->unsigned()->default(1);
            $table->string('cadre')->nullable();
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
            $table->dropColumn('avatar');
            $table->dropColumn('introduction');
            $table->dropColumn('active');
            $table->dropColumn('current_job');
            $table->dropColumn('current_restaurant');
            $table->dropColumn('gender');
            $table->dropColumn('cadre');
        });
    }
}
