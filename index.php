<html>
    <body>
        <?php
            $cars=["volvo","toyota"];
            $food=["mango","jackfruit"];

            for($i=0;$i<2;$i++) print "$cars[$i] ";
            print "<br>";

            sort($cars);
            for($i=0;$i<2;$i++) print "$cars[$i] ";
            print "<br>";

            print_r(array_reverse($cars));
            print "<br>";

            print_r(array_merge($cars,$food));
            print "<br>";

            $cars=["VOLVO"=>"XC90","BMW"=>"X5","TOYOTA"=>"HIGHLANDER"];
            print_r(array_keys($cars)); 
            print "<br>";
            
            print_r(array_values($cars));
        ?>
    </body>
</html>