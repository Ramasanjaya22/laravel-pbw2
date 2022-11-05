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
        //
        Schema::create('Collections', function (Blueprint $table) {
            $table -> integer('Id', 11)->unique();
            $table -> string('namaKoleksi', 100);
            $table -> tinyInteger('jenisKoleksi');
            $table->date('createdAt')->nullable();
            $table -> integer('jumlahKoleksi') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Collections', function (Blueprint $table) {
            //
        });
    }
};
