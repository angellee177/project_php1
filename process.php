<?php 

include 'connection.php';

session_start();

$id         = 0;
$title      = '';
$author     = '';
$year       = '';
$publisher  = '';

if(isset($_POST['save'])) {
    $title     = $_POST['title'];
    $author    = $_POST['author'];
    $year      = $_POST['year'];
    $publisher = $_POST['publisher'];

    // insert data to table
    mysqli_query($connection, "INSERT INTO Books (title, author, year, publisher) VALUES('$title', '$author', '$year', '$publisher') ");

    // Alert messages
    $_SESSION['message']  = 'Record has been saved!';
    $_SESSION['msg_type'] = 'success';

    // Back to Index 
    header("location: index.php");
}

if(isset($_POST['update'])) {
    $id         = $_POST['id'];
    $title      = $_POST['title'];
    $author     = $_POST['author'];
    $year       = $_POST['year'];
    $publisher  = $_POST['publisher'];

    // update data to table
    mysqli_query($connection, "UPDATE Books SET title='$title', author='$author', year='$year', publisher='$publisher' WHERE id=$id ");

    // Alert messages
    $_SESSION['message']  = 'Record has been updated!';
    $_SESSION['msg_type'] = 'warning';

    // Back to Index 
    header("location: index.php");
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    print_r($id);

    mysqli_query($connection, "DELETE FROM Books WHERE id=$id ");

    // Alert Message
    $_SESSION['message']    = 'Record has been deleted!';
    $_SESSION['msg_type']   = 'danger';

    // Back to Index
    header("location: index.php");
}