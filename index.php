<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "<h1 style='color: blue'>ZA, WARUDO!</h1>";
        // echo 3;
        // echo True;
        // var_dump(["hmm","skfjs"]);
        // echo "Yellow";
        // echo "test"; 
        // $color = "red";
        // echo "My car is " . $color . "<br>";
        // echo "My house is " . $COLOR . "<br>";
        // echo "My boat is " . $coLOR . "<br>";
        // $name = "Aaron";
        // $email = "aaoaaaaia@gmail.com";
        // $age = 18;
        // echo "<ul>
        //     <li>Name: ".$name."</li>
        //     <li>Email: ".$email."</li>
        //     <li>Age: ".$age."</li>
        //     </ul>";
        // $companyName = "Aaron Incorperorations";
        // $position = "Central Executive Official";
        // $tenure = 7;
        // echo "<ul>
        //     <li>Company Name: ".$companyName."</li>
        //     <li>Position: ".$positio n."</li>
        //     <li>Tenure: ".$tenure."</li>
        //     </ul>";
        $workExperiences = [
            [
                "companyName" => "Dargon Qeust",
                "position" => "Lead Player",
                "tenure" => 3
            ],
            [
                "companyName" => "World of Majik",
                "position" => "Co-Developer",
                "tenure" => 1
            ],
            [
                "companyName" => "Dungeons and Determination",
                "position" => "CEO",
                "tenure" => 2
            ]
        ];
        // echo $workExperiences[0]["position"];
        // for($x=0;$x<count($workExperiences);$x++){
        //     echo "<ul>
        //     <li>Company Name: ".$workExperiences[$x]["companyName"]."</li>
        //     <li>Position: ".$workExperiences[$x]["position"]."</li>
        //     <li>Tenure: ".$workExperiences[$x]["tenure"]."</li>
        //     </ul>";
        // }; 
        foreach($workExperiences as $x){
            echo "<ul>
            <li>Company Name: ".$x["companyName"]."</li>
            <li>Position: ".$x["position"]."</li>
            <li>Tenure: ".$x["tenure"]."</li>
            </ul>";
        };

        echo min([1,2]);
    ?>
</body>
</html>
