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
<div class="container-fluid">
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
          <li><a href="#">Chat</a></li>
        </ul>
      </div>
      <div class="col-md-10">
      <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="profile-form">
          <h2>Profile</h2>
          <form>
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="phone">Telepon</label>
              <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="occupation">Pekerjaan</label>
              <input type="text" class="form-control" id="occupation" name="occupation">
            </div>
            <div class="form-group">
              <label for="workplace">Asal Tempat Kerja</label>
              <input type="text" class="form-control" id="workplace" name="workplace">
            </div>
            <div class="form-group">
              <label for="birthplace">Tempat Lahir</label>
              <input type="text" class="form-control" id="birthplace" name="birthplace">
            </div>
            <div class="form-group">
              <label for="birthdate">Tanggal Lahir</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>
            <div class="form-group">
              <label for="bio">Bio</label>
              <textarea class="form-control" id="bio" name="bio" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
        
      </div>
    </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>