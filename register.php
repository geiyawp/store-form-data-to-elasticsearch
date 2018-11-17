<?php

require_once 'app/init.php';

if(!empty($_POST)) {
  
  if(isset(
    $_POST['link_profile'],
    $_POST['name'],
    $_POST['age'],
    $_POST['location'],
    $_POST['hometown'],
    $_POST['school'],
    $_POST['jobs'],
    $_POST['religion'],
    $_POST['gender'])) {

    $link_profile = $_POST['link_profile'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $hometown = $_POST['hometown'];
    $school = $_POST['school'];
    $jobs = $_POST['jobs'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];

    $indexed = $client->index([
      'index' => 'new_user',
      'type' => 'users',
      'body' => [
          'link_profile' => $link_profile,
          'name' => $name,
          'age' => $age,
          'location' => $location,
          'hometown' => $hometown,
          'school' => $school,
          'jobs' => $jobs,
          'religion' => $religion,
          'gender' => $gender
      ]
    ]);

    if($indexed) {
      print_r($indexed);
  }

  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SKRISSPY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  </head>
  <body>
    <div id="fb-root"></div>
    <div class="container" style="margin-top: 100px">
      <div class="row justify-content-center">
        <div class="col-md-6 col-offset-3" align="center">
          <img src="img/berita.png"><br><br>
          <form action="add.php" method="post">
            <input class="form-control" placeholder="FB Profile" type="" name="link_profile"><br>
            <input class="form-control" placeholder="Nama" type="" name="name"><br>
            <input class="form-control" placeholder="Umur" type="" name="age"><br>
            <input class="form-control" placeholder="Tempat Tinggal" type="" name="location"><br>
            <input class="form-control" placeholder="Asal" type="" name="hometown"><br>
            <input class="form-control" placeholder="Hobby" type="" name="hobby"><br>
            <input class="form-control" placeholder="Sekolah" type="" name="school"><br>
            <input class="form-control" placeholder="Pekerjaan" type="" name="jobs"><br>
            <input class="form-control" placeholder="Agama" type="" name="religion"><br>
            <input class="form-control" placeholder="Jenis Kelamin" type="" name="gender"><br>
            <input type="submit" name="submitted" value="submit" style="
            margin-bottom: 1.5em;
            margin-top: 6px;">
          </form>      
        </div>
    </div>
</div>
</body>
</html>
