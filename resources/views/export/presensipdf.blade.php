<h1 style="text-align: center;font-family:Arial">Presensi Kelas</h1>

<table border="1" cellpadding="10" cellspacing="0" class="table" style="border:1px solid black; text-align:center; margin:auto; font-family:Arial, Helvetica, sans-serif">
    <thead>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Waktu Absen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($presensis as $presensi)
            
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$presensi->nisn}}</td>
            <td>{{$presensi->nama}}</td>
            <td>{{$presensi->kelas}}</td>
            <td>{{$presensi->jk}}</td>
            <td>{{$presensi->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>