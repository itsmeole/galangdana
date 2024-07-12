<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('lowongan.create') }}" method="post">
        @csrf
        <div>
            <label for="nama">nama perusahaan</label>
            <input type="text" name="nama_perusahaan" placeholder="" required>
        </div>
        <div>
            <label for="posisi">Posisi</label>
            <input type="text" name="posisi" placeholder="" required>
        </div>
        <div>
            <label for="lokasi">lokasi</label>
            <input type="text" name="lokasi" placeholder="" required>
        </div>
        <div>
            <label for="waktu">waktu kerja</label>
            <input type="text" name="waktu_kerja" placeholder="" required>
        </div>
        <div>
            <label for="gaji">gaji</label>
            <input type="number" name="gaji" placeholder="Rp.x" required>
        </div>
        <div>
            <label for="dibuka">dibuka</label>
            <input type="date" name="dibuka" placeholder="" required>
        </div>
        <div>
            <label for="ditutup">ditutup</label>
            <input type="date" name="ditutup" placeholder="" required>
        </div>
        <div>
            <label for="deskripsi">job deskripsi</label>
            <textarea name="job_deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="info">info perusahaan</label>
            <textarea name="info_perusahaan" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="tanggung_jawab">tanggung jawab</label>
            <textarea name="tanggung_jawab" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="kualifikasi">kualifikasi</label>
            <textarea name="kualifikasi" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="dibutuhkan">dibutuhkan</label>
            <input type="number" name="dibutuhkan" placeholder="" required>
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
