<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Labas!</h1>
    <?php
    session_start();
    if(!isset($_SESSION['participants'])){
        $_SESSION['participants'] = [];
    }
    // print_r(array_keys($_SERVER));
    // print_r($_GET);
    // print_r($_POST);
    // if(isset($_GET["name"])  && isset($_GET["surname"]) ){
    //     echo "<h1>" . $_GET['name'] . " " . $_GET["surname"] . "</h1>";
    // }
    if(isset($_GET["name"])  && isset($_GET["surname"]) && $_GET["name"] !=="" && $_GET["surname"] != ""){
       $_SESSION['participants'][] = ['name' => $_GET['name'], 'surname' => $_GET['surname'] ];
    }

    // for ($i=0; $i < count($_SESSION['participants']); $i++) { 
    //     $ptc = $_SESSION['participants'][$i];
    //     echo "<h1>Hello " . $ptc['name'] . " " . $ptc['surname'] . "</h1>";
    // }
    ?>

    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="surname">
        <button type="submit">registruotis</button>
    </form>



<div class="container">
        <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['participants'] as $ptc) {// php foreach paleidžiame ir uždarome php tagą. žemiau esantis html įvyks tiek kartų kiek kartų ciklas prasisuks
            ?>
                <tr>
                    <td> <?=$ptc['name']?> </td>  <!-- taip atvaizduojame kintamuosius -->
                    <td> <?php echo $ptc['name'];?> </td> <!-- galima ir šitaip, bet pilnas tago atidarymas dažniausiai naudojamas kai rašome daugiau kodo -->
                </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
    

    <?php
        // $names = ["Jokūbas", "Gabrielius", "Monika", "Šarlotė"];
        // print_r($names);
        // echo "<br>";
        // var_dump($names);
        // for ($i=0; $i < count($names); $i++) { 
        //     echo "<h1>Hello " . $names[$i] . "</h1>";
        // }
    ?>

    <?php

    ?>

    <script>
        console.log("as js php namelyje");
    </script>
</body>
</html>