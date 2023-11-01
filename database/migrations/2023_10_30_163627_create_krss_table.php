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
        Schema::create('krss', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->char('kode_matakuliah', 8);
            $table->timestamps();
                
                $table->foreign('npm')
                ->references('npm')
               ->on('mahasiswas')
                ->onUpdate('cascade')
               ->onDelete('cascade');
             
                    $table->foreign('kode_matakuliah')
                    ->references('kode_matakuliah')
                   ->on('matakuliahs')
                    ->onUpdate('cascade')
                   ->onDelete('cascade');
                   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('krss', function (Blueprint $table) {
            $table->dropForeign('krss_npm_foreign');
            $table->dropColumn('npm');
            });

            Schema::table('krss', function (Blueprint $table) {
                $table->dropForeign('krss_kode_matakuliah_foreign');
                $table->dropColumn('kode_matakuliah');
                });

        Schema::dropIfExists('krss');
    }
};