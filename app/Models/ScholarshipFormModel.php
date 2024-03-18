<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipFormModel extends Model
{
    use HasFactory;
    protected $table = 'scholarship_form';

    protected $fillable = [
        'nama',
        'nama_ayah',
        'no_telp',
        'email',
        'alamat',
        'lahir',
        'ttl',
        'nama_ibu',
        'no_hp',
        'kota',
        'kode_pos',
        'rumah',
        'rumah_lainnya',
        'biaya_pendidikan',
        'biaya_pendidikan_lainnya',
        'ukt',
        'ukt_lainnya',
        'beasiswa',
        'beasiswa_lainnya',
        'alasan',
        'nama_kampus',
        'jurusan',
        'indeks_prestasi',
        'fakultas',
        'semester',
        'indeks_prestasi_kumulatif',
        'prestasi',
        // Assuming you are saving URLs for these fields, not the file objects themselves
        'kta',
        'ipk',
        'ktp',
        'kk',
        'slip_gaji',
        'bop',
        'sertifikat_prestasi',
        'pas_foto',
    ];
}
