<?php // Stated Variables

$milesDriven = number_format($_POST['miles_driven']); // 'miles_driven' Variable
$gallonsUsed = number_format($_POST['gallons_used'], 1); // 'gallons_used' Variable
$pricePerGallon = number_format(($_POST['price_gallon']), 2); // 'price_gallon' Variable

$milesPerGallon = $_POST['miles_driven'] / $_POST['gallons_used']; // Formula for Miles per Gallon
$milesPerGallon = number_format($milesPerGallon, 2);

$costOfTheTrip = number_format(($gallonsUsed * $pricePerGallon), 2); // Formula for Cost of Trip

// var_dump($milesDriven);
// var_dump($gallonsUsed);
// var_dump($pricePerGallon);
// var_dump($milesPerGallon);
// var_dump($costOfTheTrip);

?>
<!DOCTYPE html> <!-- Ryan King -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        div {
            width: 250px;
            margin: 100px auto 0;
            border: 3px solid black;

        }

        header, h2 {
            text-align: center;
        }

        h2 { 
            background-color: lightgray;
        }

        p {
            padding-left: 15px;
        }

    </style>
</head>
<body>
    <div>
        <header>
            <h1>Trip Calculations</h1>
        </header>
        
        <section>
            <h2>Values Entered</h2>
            <p><?php print "Miles Driven: $milesDriven" ?></p> <!-- display 'miles driven'-->
            <p><?php print "Gallons Used: $gallonsUsed" ?></p> <!-- display 'gallons used' -->
            <p><?php print "Price per Gallon: \$$pricePerGallon" ?></p> <!-- display 'price per gallon' -->
        
            <h2>Your Results</h2>
            <p><?php print "Miles Per Gallon: $milesPerGallon" ?></p> <!-- display 'miles per gallon' -->
            <p><?php print "Cost of the Trip: \$$costOfTheTrip" ?></p> <!-- display 'cost of the trip' -->
        </section>
    </div>
</body>
</html>