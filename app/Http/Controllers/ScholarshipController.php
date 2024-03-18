<?php

namespace App\Http\Controllers;

use App\Helpers\WhatsappApi;
use App\Models\ScholarshipFormModel;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('scholarship');
    }

    public function store(Request $request)
    {
        // Validasi request
        $validated = $request->validate([
            'nama' => 'required',
            'nama_ayah' => 'nullable',
            'no_telp' => 'nullable',
            'email' => 'required|email|unique:scholarship_form,email',
            'alamat' => 'nullable',
            'lahir' => 'nullable',
            'ttl' => 'nullable|date',
            'nama_ibu' => 'nullable',
            'no_hp' => 'nullable',
            'kota' => 'nullable',
            'kode_pos' => 'nullable',
            'rumah' => 'nullable',
            'rumah_lainnya' => 'nullable',
            'biaya_pendidikan' => 'nullable',
            'biaya_pendidikan_lainnya' => 'nullable',
            'ukt' => 'nullable',
            'ukt_lainnya' => 'nullable',
            'beasiswa' => 'nullable',
            'beasiswa_lainnya' => 'nullable',
            'alasan' => 'nullable',
            'nama_kampus' => 'nullable',
            'jurusan' => 'nullable',
            'indeks_prestasi' => 'nullable',
            'fakultas' => 'nullable',
            'semester' => 'nullable',
            'indeks_prestasi_kumulatif' => 'nullable',
            'prestasi' => 'nullable',
            'kta' => 'file|nullable',
            'ipk' => 'file|nullable',
            'ktp' => 'file|nullable',
            'kk' => 'file|nullable',
            'slip_gaji' => 'file|nullable',
            'bop' => 'file|nullable',
            'sertifikat_prestasi' => 'file|nullable',
            'pas_foto' => 'file|nullable',
        ]);

        // Handle file uploads and save the paths
        $filePaths = [];
        $applicant = new ScholarshipFormModel();

        // Menangani pengunggahan file
        $fileFields = ['kta', 'ipk', 'ktp', 'kk', 'slip_gaji', 'bop', 'sertifikat_prestasi', 'pas_foto'];
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $timestamp = now()->timestamp; // Mengambil timestamp saat ini
                $fileName = $timestamp . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension(); // Nama file menjadi timestamp_field.extensi
                $filePath = $request->file($field)->storeAs('public/documents', $fileName); // Simpan file ke dalam direktori penyimpanan dengan nama file yang telah disesuaikan
                $fileUrl = asset('storage/documents/' . $fileName); // Buat URL penyimpanan file

                // Menyimpan URL dalam atribut yang sesuai di model (misal: $applicant->kta)
                $applicant->{$field} = $fileUrl;
            }
        }

        // Save data to the database
        $applicant->fill($request->except($fileFields));
        foreach ($filePaths as $field => $path) {
            $applicant->{$field} = $path;
        }
        $applicant->save();
        // dd($request->all());
        $send = new WhatsappApi();
        $send->phone = '083829314436';
        $send->message = 'Hai mba ada yg submit scholarship, cek yaaa

hehehe';
        $send->WhatsappMessage();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
