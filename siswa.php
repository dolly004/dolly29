<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Data Siswa</h2>

    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>SPP</th>
            </tr>
        </thead>
        <tbody id="siswa-table">

        </tbody>
    </table>

    <script>
        const dataSiswa = [{
                nis: '22001001',
                nama_lengkap: 'Dolly fernando panjaitan',
                alamat: 'Dian anyar',
                kelas: 'Xl-Rekayasa perangkat lunak',
                SPP: '550.00000'
            },
            {
                nis: '22001002',
                nama_lengkap: 'Indri yani aprilia',
                alamat:'Gang elang',
                kelas: 'Xl-Rekayasa perangkat lunak',
                SPP: '440.00000'
            },
            {
                nis: '22001003',
                nama_lengkap: 'Nadia septi anggraeni',
                alamat:'Gang sate',
                kelas: 'Xl-Rekayasa perangkat lunak', 
                SPP: '330.00000'
            },
            {
                nis: '22001004',
                nama_lengkap: 'Dea noviyanti',
                alamat:'Cigangsa', 
                kelas: 'Xl-Rekayasa perangkat lunak',
                SPP: '220.00000'
            },

        ];

        function tampilkanDataSiswa() {
            const tabel = document.getElementById('siswa-table');
            tabel.innerHTML = '';

            dataSiswa.forEach(siswa => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td>${siswa.nis}</td>
                <td>${siswa.nama_lengkap}</td>
                <td>${siswa.alamat}</td>
                <td>${siswa.kelas}</td>
                <td>${siswa.SPP}</td>
            `;
                tabel.appendChild(row); 
            });
        }

        window.onload = tampilkanDataSiswa;
    </script>

</body>

</html>