<html>
<body>
    <?php
    $db = pg_connect('host=ec2-3-208-224-152.compute-1.amazonaws.com dbname=ddu9arc8uui5av user=zmijixqhillrkw password=a083f7c8337901129bc672b10311667e458ade626d089ffa30f0962c71f67c65');

    $custname = pg_escape_string($_POST['name']);
    $custorder = pg_escape_string($_POST['order']);
    $custaddress = pg_escape_string($_POST['address']);

    $query = "INSERT INTO cafe VALUES('" . $custname . "', '" . $custorder . "', '" . $custaddress . "')";
    $result = pg_query($query);
    if (!$result) {
        $errormessage = pg_last_error();
        echo "OOPS..! Our shop is out of service ! error : " . $errormessage;
        exit();
    }
    printf ("Order placed successfully..!");
    pg_close();
    ?>
</body>
</html> 
