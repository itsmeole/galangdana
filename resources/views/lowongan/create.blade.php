<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posting Lowongan</title>
    <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/style3.css">
</head>
<body>
    <nav>
        Masukan Data Lowongan
    </nav>
    <main>
        <h2>Data Lowongan</h2>
        <form action="{{ route('lowongan.create') }}" method="post">
            @csrf <!-- TODO: Set Action and Method Properties -->
            <div style="margin-bottom: 1rem">
                <label for="nama">nama perusahaan</label>
                <input type="text" name="nama_perusahaan" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="lokasi">lokasi</label>
                <input type="text" name="lokasi" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="waktu">waktu kerja</label>
                <input type="text" name="waktu_kerja" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="gaji">gaji</label>
                <input type="number" name="gaji" placeholder="Rp.x" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="dibuka">lowongan dibuka</label>
                <input type="date" name="dibuka" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="ditutup">lowongan ditutup</label>
                <input type="date" name="ditutup" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="deskripsi">Deskripsi Pekerjaan</label>
                <textarea name="job_deskripsi" id="" rows="3"></textarea>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="info">info perusahaan</label>
                <textarea name="info_perusahaan" id="" rows="3"></textarea>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="tanggung_jawab">tanggung jawab</label>
                <textarea name="tanggung_jawab" id="" rows="3"></textarea>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="kualifikasi">kualifikasi</label>
                <textarea name="kualifikasi" id="" rows="3"></textarea>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="dibutuhkan">dibutuhkan</label>
                <input type="number" name="dibutuhkan" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label for="email">email</label>
                <input type="text" name="email" placeholder="" required>
            </div>

            <div style="margin-bottom: 1rem">
                <label  for="web">web</label>
                <input type="text" name= "web" placeholder="">
            </div>
            <a href="done" : active="request()->routeIs('lowongan.after')"><button type="submit">Posting Lowongan</button></a>
            <a href="/" : active="request()->routeIs('laman.utama')"><button type="Button">Batal</button></a>
        </form>
    </main>
</body>
</html>
