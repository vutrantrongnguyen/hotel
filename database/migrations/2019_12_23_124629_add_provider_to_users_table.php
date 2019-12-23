<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->unique()->nullable()->change();
            $table->string('provider');
            $table->string('provider_id');
            $table->string('mobile')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->rememberToken()->nullable()->change();
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
            $table->dropColumn('email');
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
            $table->dropColumn('mobile');
            $table->dropColumn('address');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('password');
        });
    }
}
