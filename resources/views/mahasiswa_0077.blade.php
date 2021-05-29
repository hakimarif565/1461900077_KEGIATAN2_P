<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Perpus</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>buku_id</th>
                <th>buku_judul</th>
                <th>kategori_id</th>
                <th>buku_deskripsi</th>
                <th>buku_jumlah</th>
                <th>buku_cover</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($mahasiswa_0077 as $mhs)
            <tr>
                <td>{{$mhs->buku_id}}</td>
                <td>{{$mhs->buku_judul}}</td>
                <td>{{$mhs->kategori_id}}</td>
                <td>{{$mhs->buku_deskripsi}}</td>
                <td>{{$mhs->buku_jumlah}}</td>
                <td>{{$mhs->buku_cover}}</td>
                <td>
                <a href="">Edit </a>
                |
                <a href=""> Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>