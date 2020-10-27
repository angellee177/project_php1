<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'process.php' ?>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?> ">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif?>
    <div class="container">
        <h2>Simple CRUD</h2>
        <br/>
        <a href="add.php">Add new Book</a>
        <br/>
        <br/>
        <h3>Books List</h3>
        <hr>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Publisher</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    include 'connection.php';
                    $no = 1;
                    $data = mysqli_query($connection, "SELECT * FROM Books") or die($connection->error);
                    while($books = $data->fetch_assoc()) : 
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $books['title']; ?></td>
                        <td><?php echo $books['author']; ?></td>
                        <td><?php echo $books['year']; ?></td>
                        <td><?php echo $books['publisher']; ?></td>
                        <td>
                            <a href="edit.php?edit=<?php echo $books['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $books['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php 
                    endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>