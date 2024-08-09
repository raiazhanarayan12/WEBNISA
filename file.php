<?php
if (isset($_POST['view'])){
    header(("content-type: application/pdf"));
    readfile('file/surat sidang.pdf');
}

?>
<!DOCTYPE hrml>
<html>
<head>
    <title>View File PDF eith PHP</title>
    <style type="text/css">
        button:hover{
            background: lightskyblue;
            color:white;
        }

    </style>
</head>
<body>
    <center>
        <form action="" method="post">
            <button name="view">View Surat Sidang</button>
        </form>
    </center>
</body>
</html>