<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('name');
            $table->char('penghasilan_ortu', 2);
            $table->char('listrik', 2);
            $table->char('kendaraan', 2);
            $table->char('rata_nilai', 2);
            $table->char('tahun_lulus', 2);
            $table->char('luas_tanah', 2);
            $table->char('jml_tanggungan', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
