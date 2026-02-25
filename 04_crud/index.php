<?php

// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'php learning', 'this is desc', current_timestamp());

$insert = false;
//  Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes"; 

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// exit();
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
if (isset($_POST['snoEdit'])){
    //Update the record
        $sno = $_POST['snoEdit'];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];

    // Sql query to be executed
    $sql = "UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
}
else{
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Sql query to be executed
    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $insert = true;
    }
    else{
        echo "error ---> ". 
        mysqli_error($conn);
    }
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes App - Notes taking made easy</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css">
    
</head>

<body>
    <!-- Edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button> -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit this Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/codeM/04_crud/index.php" method = "POST">
            <input type="hidden" class="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" id="titleEdit" name="titleEdit">
            </div>
            <div class="form-group">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3">Update Note</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Notes App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php 
    if($insert){
        echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been inserted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    ?>
    <div class="container my-4">
        <h2>Add a Note</h2>
        <form action="/codeM/04_crud/index.php" method = "POST">
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3">Add Note</button>
        </form>
    </div>
    <div class="container my-4">
        <table class="table" id='myTable'>
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM `notes`";
                $result = mysqli_query($conn, $sql);
                $sno=0;
                while($row = mysqli_fetch_assoc($result)){
                    $sno = $sno+1;
                    echo "<tr>
                    <th scope='row'>". $sno . "</th>
                    <td>". $row['title'] . "</td>
                    <td>". $row['description'] . "</td>
                    <td> <button id=".$row['sno']." class='edit btn btn-sm btn-primary'>Edit</button> <button id=d".$row['sno']." class='delete btn btn-sm btn-primary'>Delete</button> </td>
                </tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    
    <script src="//cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>    
    <script>
        let table = new DataTable('#myTable');
    </script>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                console.log("edit", );
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                description = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;
                $('#editModal').modal('toggle');
            })
        })
        // deletes = document.getElementsByClassName('edit');
        // Array.from(deletes).forEach((element)=>{
        //     element.addEventListener("click", (e)=>{
        //         console.log("edit", );
        //         tr = e.target.parentNode.parentNode;
        //         title = tr.getElementsByTagName("td")[0].innerText;
        //         description = tr.getElementsByTagName("td")[1].innerText;
        //         console.log(title, description);
        //         titleEdit.value = title;
        //         descriptionEdit.value = description;
        //         snoEdit.value = e.target.id;
        //         $('#editModal').modal('toggle');
        //     })
        // })
    </script>
</body>

</html>