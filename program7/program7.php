<html>
<head>
<title>program 7</title>
<meta http-equiv="refresh" content="1"/> <!--refresh page contain every 1 second-->
<style>
    p{
        color:white;
        font-size:90px;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
          background-color:black;
    }
    body{
        background-color:red;

    }
</style>
   


     <p><?php
			date_default_timezone_set('Asia/Calcutta');

            echo date("H:i:s A");
        ?>
    </p>
</head>

</html>

