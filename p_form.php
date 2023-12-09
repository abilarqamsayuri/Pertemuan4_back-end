
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><?php $nama = $_POST['nama']; echo $nama ?></td>
      <td><?php $umur = $_POST['umur']; echo $umur ?></td>
      <td><?php $gender = $_POST['jenis']; echo $gender ?></td>
      <td><?php $pendidikan = $_POST['tingkat']; echo $pendidikan ?></td>
      <td><?php $hobi = $_POST['hobi'];
        foreach($hobi as $hbi){
            echo $hbi." | ";}
    ?></td>
    </tr>
  </tbody>
</table>

<br><br><div class="d-grid gap-2 d-md-block"><a class="btn btn-primary" href="form.php" role="button">Kembali</a></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>

</style>
</body>
</html>