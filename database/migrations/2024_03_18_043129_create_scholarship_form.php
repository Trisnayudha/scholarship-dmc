<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_form', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_ayah');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('lahir');
            $table->date('ttl');
            $table->string('nama_ibu');
            $table->string('no_hp');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('rumah');
            $table->string('rumah_lainnya')->nullable();
            $table->string('biaya_pendidikan');
            $table->string('biaya_pendidikan_lainnya')->nullable();
            $table->string('ukt');
            $table->string('ukt_lainnya')->nullable();
            $table->string('beasiswa');
            $table->string('beasiswa_lainnya')->nullable();
            $table->text('alasan');
            $table->string('nama_kampus');
            $table->string('jurusan');
            $table->string('indeks_prestasi');
            $table->string('fakultas');
            $table->string('semester');
            $table->string('indeks_prestasi_kumulatif');
            $table->text('prestasi');
            // Untuk file, simpan path-nya saja
            $table->string('kta')->nullable();
            $table->string('ipk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('slip_gaji')->nullable();
            $table->string('bop')->nullable();
            $table->string('sertifikat_prestasi')->nullable();
            $table->string('pas_foto')->nullable();
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
        Schema::dropIfExists('scholarship_form');
    }
}
