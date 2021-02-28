<html>
    <head>
        <title>visitors count</title>
    </head>
    <body>
        <h1> welcome to my web page</h1>
        <?php
        print"<h3>refresh PAGE</h3>";
        $file="count.txt";
        $handle=fopen($file,'r') or die("error 1:cannot open file:$file");
        $count=fread($handle,10);
        fclose($handle);
        $count=$count+1;
        echo"<h2>no of visitors who visited this page:$count</h2>";
        $handle=fopen($file,'w') or die("error 2:cannot open file:$file")
        fwrite($handle,$count)
        fclose($handle)
        
        ?>
    </body>
</html>
