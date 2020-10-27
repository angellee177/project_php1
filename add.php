<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?> ">
            <?php 
                echo $_SESSION_['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <div class="container">
        <h2>Simple CRUD</h2>
        <br/>
        <a href="index.php">Back</a>
        <br/>
        <br/>
        <h3>Add new Book</h3>
        <hr>
        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter your Book Title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control"  placeholder="Enter author name">
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" placeholder="Enter year of publishing">
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input type="text" name="publisher" class="form-control" placeholder="Enter Book Publisher">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="save" >Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>