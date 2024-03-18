<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Aplikasi</title>
    <!-- Add your styles here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        table {
            /* width: 100%; */
            border-collapse: collapse;
        }

        th,
        td {
            /* padding: 8px; */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        label {
            font-weight: bold;
        }

        input,
        textarea {
            width: 95%;
            padding: 5px;
            margin-top: 4px;
            margin-bottom: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>

<body>

    <form>
        <table>
            <tr>
                <td><label for="name">Nama:</label></td>
                <td>
                    <p>{{ $nama }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="birthPlace">Tempat Lahir:</label></td>
                <td>
                    <p>{{ $lahir }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="birthDate">Tanggal Lahir:</label></td>
                <td>
                    <p>{{ $ttl }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Nama Ayah:</label></td>
                <td>
                    <p>{{ $nama_ayah }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Nama Ibu:</label></td>
                <td>
                    <p>{{ $nama_ibu }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Nomor Telepon:</label></td>
                <td>
                    <p>{{ $no_telp }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Nama Hp:</label></td>
                <td>
                    <p>{{ $no_hp }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Alamat:</label></td>
                <td>
                    <p>{{ $alamat }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Kota:</label></td>
                <td>
                    <p>{{ $kota }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Kode Pos:</label></td>
                <td>
                    <p>{{ $kode_pos }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Kepemilikan Rumah:</label></td>
                <td>
                    <p>{{ $rumah == 'Lainnya' ? $rumah_lainnya : $rumah }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Biaya Pendidikan anda ditanggung oleh:</label></td>
                <td>
                    <p>{{ $biaya_pendidikan == 'Lainnya' ? $biaya_pendidikan_lainnya : $biaya_pendidikan }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Apakah anda mendapatkan keringan biaya pendidikan? :</label></td>
                <td>
                    <p>{{ $ukt == 'Ya' ? $ukt_lainnya : $ukt }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Apakah Anda sedang menjalankan program beasiswa saat ini? Jika IYA, sebutkan
                        program beasiswa tersebut:</label></td>
                <td>
                    <p>{{ $beasiswa == 'Ya' ? $beasiswa_lainnya : $beasiswa }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Isilah dengan singkat alasan Anda mengajukan Indonesia Mining Clubs Academia
                        Scholarship:</label></td>
                <td>
                    <p>{!! $alasan !!}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Nama Perguruan Tinggi :</label></td>
                <td>
                    <p>{{ $nama_kampus }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Fakultas :</label></td>
                <td>
                    <p>{{ $fakultas }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Jurusan :</label></td>
                <td>
                    <p>{{ $jurusan }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Semester:</label></td>
                <td>
                    <p>{{ $semester }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Indeks Prestasi :</label></td>
                <td>
                    <p>{{ $indeks_prestasi }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Indeks Prestasi Kumulatif :</label></td>
                <td>
                    <p>{{ $indeks_prestasi_kumulatif }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Prestasi :</label></td>
                <td>
                    <p>{!! $prestasi !!}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Kartu Tanda Mahasiswa(Aktif):*</label></td>
                <td>
                    <p>{{ $kta }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Transkrip IPK:*</label></td>
                <td>
                    <p>{{ $ipk }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Transkrip IPK:*</label></td>
                <td>
                    <p>{{ $ipk }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Kartu Tanda Penduduk:*</label></td>
                <td>
                    <p>{{ $ktp }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Foto kopi Kartu Keluarga:*</label></td>
                <td>
                    <p>{{ $kk }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Slip Gaji Orang Tua Terakhir:*</label></td>
                <td>
                    <p>{{ $slip_gaji }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Transkrip Pembayaran BOP:*</label></td>
                <td>
                    <p>{{ $bop }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Foto kopi Sertifikat prestasi:</label></td>
                <td>
                    <p>{{ $sertifikat_prestasi }}</p>
                </td>
            </tr>
            <tr>
                <td><label for="fatherName">Upload Pas Foto berwarna(ukuran 4x6):*</label></td>
                <td>
                    <p>{{ $pas_foto }}</p>
                </td>
            </tr>
            <!-- Continue adding rows for each field as per the form in the image -->
            <!-- ... -->
        </table>
    </form>

</body>

</html>
