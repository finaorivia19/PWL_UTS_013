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
            Schema::create('penggajianP', function (Blueprint $table) {
                $table->id();
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
            Schema::create('penggajian', function (Blueprint $table) {
                $table->integer('Nip')->primary();
                $table->string('Nama',50)->nullable();
                $table->string('Alamat',50)->nullable();
                $table->string('Jabatan',50)->nullable();
                $table->string('Gaji pokok',20)->nullable();
                $table->timestamps();
            });
    }
    };
