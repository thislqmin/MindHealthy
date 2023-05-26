<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/css/userpage.css">
    <title>MindHealthy</title>
</head>
<body>
<div class="row">
    <div class="col-md-2 sidebar">
      <div class="sidebar-header">
        <a href="#"><img src="/img/logo.svg"></a>
      </div>
      <ul class="sidebar-menu">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Statistics</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="{{ route('notes.index') }}">Note</a></li>
      </ul>
    </div>
    <div class="col-md-10">
    <!-- Tampilkan daftar note -->
        <h1>Daftar Note</h1>

        <a href="{{ route('notes.create') }}" class="btn btn-success">Tambah Note</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Hari ke</th>
                    <th>Keluhan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->hari_ke }}</td>
                    <td>{{ $note->keluhan }}</td>
                    <td>{{ $note->keterangan }}</td>
                    <td>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>