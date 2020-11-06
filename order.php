<html>
<body>
    <?php
    $db = pg_connect('host=localhost dbname=postgres user=myusername password=mypassword');

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
    printf ("Order placed successfully..!);
    pg_close();
    ?>
</body>
</html> 