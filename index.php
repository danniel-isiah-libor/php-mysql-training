<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP</title>
</head>
<body>
    <?php
        //echo "My First PHP website!";
        // echo "<h1 style='color:red'>Hello PHP World!</h1>";
        // echo 20;
        // echo true;
        // echo "a" . "b";

use FFI\Exception;

        $name="Resty Yap";
        for ($i=0;$i<5;$i++)
        {
            echo $name . "<br>";
        }
        echo "<br>";
        var_dump(["Honda","Toyota"]);  // for debugging

        echo "<hr>";

        $compname="BJMP";
        $position="Chief, EDP Section - FSO";
        $tenure=6;

        echo "<ul>";
        echo "<li> Company Name: <b>" . $compname . "</b></li>";
        echo "<li> Position: <b>" . $position . "</b></li>";
        echo "<li> Tenure (in years): <b>" . $tenure . "</b></li>";
        echo "</ul>";

        echo "<hr>";
        echo "Array for loop <br>";
        $workExps=[
            ["compName"=> "BJMP",
             "position"=>"Chief",
             "tenure"=> 6
            ],
            ["compName"=> "BJMP MPC",
             "position"=>"IT Staff",
             "tenure"=> 2],
            ["compName"=> "Microsoft",
             "position"=>"Tech Support",
             "tenure"=> 1]
        ];

        echo "<ul>";
        for ($i=0;$i<count($workExps);$i++)
        {
            echo "<li>" . $workExps[$i]["compName"] . "</li>";
            echo "<li>" . $workExps[$i]["position"] . "</li>";
            echo "<li>" . $workExps[$i]["tenure"] . "</li>";
            echo "<br>";
        }
        echo "</ul>";

        echo "<hr>";
        echo "Array foreach loop <br>";
        echo "<ul>";
        foreach($workExps as $exp)
        {
            echo "<li>" . $exp["compName"] . "</li>";
            echo "<li>" . $exp["position"] . "</li>";
            echo "<li>" .$exp["tenure"] . "</li>";
            echo "<br>";
        }
        echo "</ul>";
        
        throw new Exception("error");
    ?>    
</body>
</html>
