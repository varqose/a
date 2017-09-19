<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Połączenie z bazą danych</title>
        
    </head>
    <body>
        <?php
        
        $linkDB = @mysql_connect("localhost", "root", "");
        
        if(!empty($linkDB))
        {    
            echo "<p>Połączono</p>";
            $baza=mysql_select_db("world", $linkDB);
            
            if($baza)
            {
                echo "<p>Wybrano bazę</p>";
                $myquery = "SELECT * FROM city";
                $myresult = mysql_query($myquery, $linkDB);
                
                if("myresult")
                {
                    echo "<p>Wykonuję zapytanie</p>";
                    while($myrow = mysql_fetch_array($myresult))
                    {
                        echo $myrow["ID"]." ";
                        echo $myrow["Name"]." ";
                        echo $myrow["CountryCode"]." ";
                        echo $myrow["District"]." ";
                        echo $myrow["Population"]." ";
                        echo "<br>";
                    }
                    mysql_free_result($myresult);
                    mysql_close($linkDB);
                } 
                else 
                {
                    echo "<p>Błąd zapytania</p>";
                }
            } 
            else 
            {
                echo "<p>Błąd wyboru bazy</p>";
            }
        } 
        else 
        {
            echo "<p>Błąd połączenia</p>";
        }
        
        ?>
    </body>
</html>
