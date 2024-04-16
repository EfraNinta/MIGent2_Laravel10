<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id', 'fk_role_user_to_role')
            ->references('id')->on('role') ->onUpdate('CASCASE') ->onDelete
            ('CASCADE');
            $table->foreign('user_id', 'fk_role_user_to_users')
            ->references('id')->on('users') ->onUpdate('CASCASE') ->onDelete
            ('CASCADE');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign('fk_role_user_to_role');
            $table->dropForeign('fk_role_user_to_users');
            //
        });
    }
};
