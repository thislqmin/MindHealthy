<!DOCTYPE html>
<html lang="en">
<head>
<title>MindHealthy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<!-- Form untuk mengedit note -->
<h1>Edit Note</h1>

<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="hari_ke">Hari ke</label>
        <input type="text" name="hari_ke" class="form-control" value="{{ $note->hari_ke }}" required>
    </div>

    <div class="form-group">
        <label for="keluhan">Keluhan</label>
        <textarea name="keluhan" class="form-control" rows="3" required>{{ $note->keluhan }}</textarea>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" rows="5" required>{{ $note->keterangan }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>