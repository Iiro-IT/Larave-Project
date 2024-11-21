<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->nullable()->after('name');
            $table->string('lastname')->nullable()->after('firstname');
            $table->string('contact')->nullable()->after('email');
            $table->date('birthday')->nullable()->after('contact');
            $table->tinyInteger('status')->default(1)->after('birthday');
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'firstname', 'lastname', 'contact', 'birthday', 'status']);
        });
    }
    
};
