<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <form action="php/update.php" 
          method="post">

        <h4 class="display-4 text-center">update</h4><hr><br>
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
                value="<?=$row['NIP'] ?>" >
        </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="name" 
                class="form-control" 
                id="nama" 
                name="nama"
                value="<?=$row['nama'] ?>" >
    </div>

    <div class="form-group">
        <label for="noHP">No HP</label>
        <input type="text" 
                class="form-control" 
                id="noHP" 
                name="noHP"
                value="<?=$row['noHP'] ?>" >

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" 
                class="form-control" 
                id="email" 
                name="email"
                value="<?=$row['email'] ?>" >
    </div> 
    <input type="text" 
           name="NIP"
           value="<?=$row['NIP']?>"
           hidden >

    <button type="submit" 
            class="btn btn-primary"
            name="update">update</button>
    <a href="read.php" class="link-primary">View</a>
</form>
    </div>
</body>
</html>