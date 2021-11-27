<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <style>
        h1 {
            font-size: large;
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => assignment
        $conn = mysqli_connect("localhost", "root", "", "assignment");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $f_name = $_REQUEST['f_name'];
        $_name = $_REQUEST['l_name'];

        $email = $_REQUEST['email'];
        $arrival_date = $_REQUEST['arrival_date'];
        $dep_date = $_REQUEST['dep_date'];
        $country = $_REQUEST['country'];
        $payment = $_REQUEST['payment'];

        // Performing insert query execution
        // here our table name is rental
        $sql = "INSERT INTO rental VALUES ('$f_name',
			'$_name','$email','$arrival_date','$dep_date','$country','$payment')";



        if (mysqli_query($conn, $sql)) {
            echo "<h3 class=text-5xl>Booking successfully !!!."
                . "</h3>";


            echo nl2br(
                "\n$f_name\n $_name\n "
                    . "$email\n" . "$arrival_date\n" . "$dep_date\n" . "$country\n" . "$payment\n"
            );
            echo "<a href=/assignment class=bg-red-500 text-white font-bold py-1 px-2 rounded>Back</a>";
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>