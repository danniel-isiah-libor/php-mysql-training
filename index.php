<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // echo "Hello World";
    // echo "<h1 style='color: red'>Hello World</h1>";
    // echo 20;
    // echo false;
    // echo ["honda", "Toyota"];
    // var_dump(["honda", "Toyota"]);

    # this is a comment
    // this is also a comment
    // $color = "red";
    // echo "My car is " . $color . "<br>";
    // echo "My house is " . $COLOR . "<br>";
    // echo "My boat is " . $coLOR . "<br>";

    $name = "Danniel";
    $email = "danniel@example.com";
    $age = 20;

    echo "<ul>";
    echo "<li>Name: " . $name . "</li>";
    echo "<li>Email: " . $email . "</li>";
    echo "<li>Age: " . $age . "</li>";
    echo "</ul>";

    // company name
    // position
    // tenure
    // $companyName = "Tech Solutions";
    // $position = "Software Engineer";
    // $tenure = 2;

    // $companyName1 = "Tech Solutions";
    // $position1 = "Software Engineer";
    // $tenure1 = 2;

    // echo "<ul>";
    // echo "<li>Company: " . $companyName . "</li>";
    // echo "<li>Position: " . $position . "</li>";
    // echo "<li>Tenure: " . $tenure . " years</li>";
    // echo "<br>";
    // echo "<li>Company: " . $companyName1 . "</li>";
    // echo "<li>Position: " . $position1 . "</li>";
    // echo "<li>Tenure: " . $tenure1 . " years</li>";
    // echo "</ul>";

    $workExperiences = [
        [
            "companyName" => "Tech Solutions",
            "position" => "Software Engineer",
            "tenure" => 2
        ],
        [
            "companyName" => "Web Innovations",
            "position" => "Frontend Developer",
            "tenure" => 1
        ],
        [
            "companyName" => "Data Analytics Inc.",
            "position" => "Data Analyst",
            "tenure" => 3
        ]
    ];

    // for ($i = 0; $i < count($workExperiences); $i++) {
    //     echo $workExperiences[$i]["companyName"] . "<br>";
    //     echo $workExperiences[$i]["position"] . "<br>";
    //     echo $workExperiences[$i]["tenure"] . " years<br>";
    // }

    // foreach ($workExperiences as $experience) {
    //     echo "<ul>";
    //     echo "<li>Company: " . $experience["companyName"] . "</li>";
    //     echo "<li>Position: " . $experience["position"] . "</li>";
    //     echo "<li>Tenure: " . $experience["tenure"] . " years</li>";
    //     echo "</ul>";
    // }

    // $i = 0;
    // while ($i < count($workExperiences)) {
    //     echo "<ul>";
    //     echo "<li>Company: " . $workExperiences[$i]["companyName"] . "</li>";
    //     echo "<li>Position: " . $workExperiences[$i]["position"] . "</li>";
    //     echo "<li>Tenure: " . $workExperiences[$i]["tenure"] . " years</li>";
    //     echo "</ul>";
    //     $i++;
    // }

    // $i = 0;
    // do {
    //     echo "<ul>";
    //     echo "<li>Company: " . $workExperiences[$i]["companyName"] . "</li>";
    //     echo "<li>Position: " . $workExperiences[$i]["position"] . "</li>";
    //     echo "<li>Tenure: " . $workExperiences[$i]["tenure"] . " years</li>";
    //     echo "</ul>";
    //     $i++;
    // } while ($i < count($workExperiences));

    // echo min([
    //     [1],
    //     [2],
    //     [3],
    //     [4],
    //     [5]
    // ]);
    // echo '<br>';
    // echo max([1, 2, 3, 4, 5]);

    $array = [
        [1],
        [2],
        [3],
        [4],
        [5]
    ];
    // $values = [];
    // foreach ($array as $value) {
    //     $values[] = $value[0];
    // }
    // echo min($values);
    // echo '<br>';
    // echo max($values);

    // this is a constant variable
    // define("USERNAME", "danniel02");
    // $USERNAME = "changedValue";
    // echo $USERNAME;
    // echo "<br>";
    // echo USERNAME;

    // const EMAIL = "john@mail.test";
    // echo "<br>";
    // echo EMAIL;

    // echo "<br>";
    // echo __DIR__ . "/payroll.pdf";

    // $status = null;

    // switch ($status) {
    //     case "active":
    //         echo "User is active!";
    //         break;

    //     case "deactivated":
    //         echo "User is deactivated";
    //         break;

    //     default:
    //         echo "No user found!";
    //         break;
    // }

    // if ($status === "active") {
    //     echo "User is active!";
    // } else if ($status === "deactivated") {
    //     echo "User is deactivated";
    // } else {
    //     echo "No user found!";
    // }

    function getStatusMessage($status)
    {
        switch ($status) {
            case "active":
                echo "User is active!";
                break;

            case "deactivated":
                echo "User is deactivated";
                break;

            default:
                echo "No user found!";
                break;
        }
    }

    /**
     *  Compute total grade for 1st and 2nd semester.
     * @param float $sem1
     * @param float $sem2
     * @return float $totalGrade
     */
    function getTotalGrade(?float $sem1 = 0, ?float $sem2 = 0, ?float $sem3 = 0): float
    {
        $total = $sem1 + $sem2 + $sem3;

        return $total;
    }

    $status = "active";

    getStatusMessage($status);

    echo "<br>";

    $totalGrade = getTotalGrade(sem1: 95.50, sem3: 80.68);
    echo $totalGrade;

    echo "<br>";

    $age = 50;

    function getUserAge()
    {
        static $age = 20;
        echo $age . "<br>";
        $age++;
    }

    echo $age;
    echo "<br>";
    getUserAge(); // 20
    getUserAge(); // 21
    getUserAge(); // 22

    throw new Exception("this is error");
    ?>

</body>

</html>