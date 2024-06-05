<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Siswa</a></li>
            <li><a href="#">SPP</a></li>
            <li><a href="#">Jurusan</a></li>
            <li><a href="#">Kelas</a></li>

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 w full">Laporan Pembayaran</h1>

            <form action="" method="post" class="flex gap-8 items-center">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="w-[15rem]">
                    <input type="number" id="nis" name="nis" placeholder="Masukan NIS" class="form-control">
                </div>
                <div class="w-[12rem]">
                    <input type="number" id="tahun" name="tahun" placeholder="Masukan tahun" class="form-control">

                </div>
                <button type="submit" name="submit" class="btn btn-primary w-[10rem]">Kirim</button>


            </form>

        </ul>
    </div>


</body>

</html>