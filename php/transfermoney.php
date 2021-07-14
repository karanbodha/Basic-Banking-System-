<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Transfer </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include './connection.php';
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);
    ?>
    <nav class="navbar navbar-expand-md navbar-light">
        <a href="../index.php" class="navbar-brand">
        <img src="../images/logo_small.png" style="height:85px;width:80px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">View Customers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./transactionhistory.php">Transactions</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="center mt-0">
        <h2><b>Money Transfer</b> <span><img src="../images/logo_small.png" style="height:70px;width:60px" /></span></h2>
    </div>
    <div class="container">
        <br />
        <div class="row">
            <div class="col">

                <div class="container-fluid table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Client Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Bank Balance</th>
                                <th scope="col" class="text-center py-2">Perform Transactions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="center py-2"><?php echo (isset($rows['c_id']) ? $rows['c_id'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_name']) ? $rows['c_name'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_mail']) ? $rows['c_mail'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_balance']) ? $rows['c_balance'] : ''); ?></td>
                                        <td class="center py-2"><a href="userdetails.php?c_id=<?php echo $rows['c_id']; ?>"> <button type="button" class="btn btn-xs">Transfer Money</button></a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="center footer">
        <h6 class="info"><b>2021 © Made by Karan Bodha</b></h6>
        The Sparks Foundation
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>