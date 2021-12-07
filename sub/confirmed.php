<?php 
session_start(); 

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "";
$dbname = "tabletime";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection failed!";
}

$test = $_SESSION['username'];


$sql = "SELECT * FROM `reservation` WHERE `username` = '$test'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if (mysqli_query($conn, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="microsite.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Confirmed Extension</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <p id="boxHead">Check-In Confirmed</p>
                <?php echo '<p id="SubInfo"> Table '.$row['Seat'].' || '. $row['Floor'].'</p>'?>
                <p id="BoxInfo"
                    style="display: inline; border: 2px solid black; border-radius: 5px; background-color:gainsboro;">
                    Reservation For: </p>
                <br>
                <br>
                 <div class="multiline"
                    style="text-align:center; margin: 0 auto; width: 50%; border: 2px solid black; border-radius: 5px; background-color:gainsboro; white-space:pre-wrap">
                    <?php echo '<p>'. $row['Start'] . ' PM' .'</p>';?>
                    <p>to</p>
                    <?php echo '<p>'. $row['End'] . ' PM' .'</p>';?>
                </div>
                <br>
            </div>
            <!-- Buttons -->
            <br>
            <br>
            <form>
                <a href="microsite.php" target="_parent"><button button type="button" class="fadeIn fourth" style="white-space:nowrap; display: flex; justify-content: center;
                ">Home</button></a>
                <a href="earlyout.php" target="_parent"><button button type="button"
                        class="fadeIn fourth" style="white-space:nowrap; display: flex; justify-content: center;
">Early Check Out</button></a>
            </form>
            



        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        document.body.style.zoom = "95%";
        document.body.style.overflow = 'hidden';
    </script>
</body>

</html>