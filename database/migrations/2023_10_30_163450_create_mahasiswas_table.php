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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('npm', 10);
            $table->string('nama', 50);
            $table->char('nidn', 10);
            $table->timestamps();

            $table->primary('npm');

            $table->foreign('nidn')
            ->references('nidn')
           ->on('dosens')
            ->onUpdate('cascade')
           ->onDelete('cascade');
        });

       
            
          
            
           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropForeign('mahasiswas_nidn_foreign');
            $table->dropColumn('nidn');
            });
        Schema::dropIfExists('mahasiswas');
    }
};
