<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download PDF</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <p>Generated at {{$date}}</p>
    <p>Download PDF Berhasil</p>

    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jenis Kelamin</th>
                <th>Semester</th>
                <th>Status</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $index => $student)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $student -> nama }}</td>
                <td>{{ $student -> nim }}</td>
                <td>{{ $student -> JenisKelamin }}</td>
                <td>{{ $student -> Semester }}</td>
                <td>{{ $student -> Status }}</td>
                <td>{{ $student -> IPK }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>