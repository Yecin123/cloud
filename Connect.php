    <?php


    $host  ="mydbinstance.ceemh9jts1bi.eu-west-1.rds.amazonaws.com";
    $name = "myDbInstance";
    try{
    $con = new PDO ("mysql:host="  +  $host  + ";dbname=" + $name + ",yecin0123","pes2010pes2010"); 
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
    }
    catch(PDOException $e)
    {
    echo "error:".$e->getMessage(); 
    }

    ?>