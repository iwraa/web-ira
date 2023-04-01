<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create pegawai</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
        <?php if (isset($_GET['Sukses'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['Sukses']; ?>
            </div>
        <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
                  <th scope="col">NIP</th>
			      <th scope="col">Nama</th>
			      <th scope="col">No HP</th>
                  <th scope="col">Email</th>
                  <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
                <?php 
                    $i = 0;
                    while($rows = mysqli_fetch_assoc($result)){
                    $i++;        
                ?>
			    <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?=$rows['NIP']?></td>
                    <td><?php echo $rows['nama']; ?></td>
                  <td><?php echo $rows['noHP']; ?></td>
                  <td><?php echo $rows['email']; ?></td>
                  <td><a href="update.php?NIP=<?=$rows['NIP']?>" 
                         class="btn btn-success">Update</a></td>
				
				  <td><a href="php/delete.php?NIP=<?=$rows['NIP']?>" 
                         class="btn btn-danger">Delete</a></td>
			    </tr>
                <?php } ?>
			  </tbody>
			</table>
            <?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">create</a>
			</div>
		</div>
	</div>
</body>
</html>