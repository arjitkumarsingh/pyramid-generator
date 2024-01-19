<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="text-center">
        <h3>How many rows do you want?</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rows</span>
                <input type="number" id="rows" name="rows" class="form-control" placeholder="enter the number of rows" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
        <br>
        <?php
        $rows = $_REQUEST['rows'];
        $count = 0;
        for ($i=1; $i <=$rows ; $i++) {
            for ($j=1; $j <= $i ; $j++) { 
                echo "* ";
                $count++;
            }
            echo "<br>";
        }
        ?>
        <h2>Total Stars: <?php echo $count; ?></h2>
    </div>
</body>

</html>

<?php

?>