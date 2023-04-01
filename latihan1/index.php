<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <form action="php/create.php" 
          method="post">

        <h4 class="display-4 text-center">create</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="form-group">
        <label for="NIP">NIP</label>
        <input type="text" 
                class="form-control" 
                id="NIP" 
                name="NIP"
                placeholder="Masukan NIP">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="name" 
                class="form-control" 
                id="nama" 
                name="nama"
                placeholder="Masukan Nama">
    </div>

    <div class="form-group">
        <label for="noHP">No HP</label>
        <input type="text" 
                class="form-control" 
                id="noHP" 
                name="noHP"
                placeholder="Masukan No HP">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" 
                class="form-control" 
                id="email" 
                name="email"
                placeholder="Masukan email">
    </div> 
    <button type="submit" 
            class="btn btn-primary"
            name="create">create</button>
            <a href="read.php" class="link-primary">View</a>
</form>
    </div>
</body>
</html>