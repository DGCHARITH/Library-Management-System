<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE LIBRARY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- ############################################################################################################### -->
    <!-- //navbar-opening -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">MCH NoteApp</a> -->
            <a class="navbar-brand" href="#">Library Management System</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input class="form-control me-2"name="searchtext" id="searchText" type="search" placeholder="Search"
                        aria-label="Search" >
                    <button class="btn btn-outline-success" type="submit" >Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- //navbar-closed -->

    <!-- alert-open -->
    <div id="message">
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->
    </div>
    <!-- alert-close -->
    <!-- ############################################################################################################### -->


    <!-- ############################################################################################################### -->
    <!-- [ class = Container] - inside this we will write everything (*html) that are needed for this project -->
    <!-- class = Container- [opening] -->
   
        <!-- ############################################################################################### -->
        <div id="table">
            <h1 style="text-align: center;">YOUR BOOKS </h1>
            <hr>
            <?php
                if(isset($_POST["searchtext"]))
                {
                    echo "Showing results for '".$_POST["searchtext"]."'";
                }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">BOOK NAME</th>
                        <th scope="col">AUTHOR NAME</th>
                        <th scope="col">SUBJECT</th>
                        <th scope="col">DATE</th>
                    </tr>
                </thead>

                <!-- // TBODY-TEMPLATE  -->
                <tbody id="tableBody">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "library";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                            if(isset($_POST["searchtext"])){
                                $lk='%'.$_POST["searchtext"].'%';
                            }
                            else{
                                $lk="%";
                            }
                            $sql = "SELECT * FROM books WHERE Title LIKE '$lk' ";
                            $count=0;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                    $count=$count+1;  
                                ?>
                                <tr>
                                <td><img src="Books/<?=$row["Title"]?>.jpg" alt="<?php $row["Title"]?>" width="40" height="60"> <?php echo $row["Title"];?></td>
                                <td><?php echo $row["Author"];?></td>
                                <td><?php echo $row["Subject"];?></td>
                                <td><?php echo $row["Date"];?></td>
                                </tr>
                            <?php
                                
                            }
                            } else {
                            echo "<br> No Match Found";
                            }
                            $conn->close();
                        ?>
                </tbody>
            </table>
        </div>
        <?php echo "Total results ".$count?>
        <!-- ############################################################################################### -->
    </div>

    <!-- class = Container-closed -->
    <!-- ############################################################################################################### -->





    

    <!-- ############################################################################################### -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- <script src="./js/index.js"></script> -->
    <script src="./js/indexes6.js"></script>
    <!-- <script src="./js/indexes7.js"></script> -->
    
<table>
    
</table>
    <!-- ############################################################################################### -->
</body>

</html>