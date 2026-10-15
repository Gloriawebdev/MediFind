<!DOCTYPE html>
<html lang="en">
     <head>
            <meta charset="UTF-8">
            <title>Search Results - MediFind</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style1.css">
    </head>
<body>
   
    <div id="search">
            <a href="index.php">Back to Search</a>
    </div>
    
 <h1>Search Results</h1>

<?php
include 'db.php';

$search = "";

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM treatments
            WHERE treatment_name LIKE '%$search%'
            OR medical_specialty LIKE '%$search%'
            OR related_condition LIKE '%$search%'
            OR nigeria_hospitals LIKE '%$search%'
            OR international_hospitals LIKE '%$search%'
            OR countries_available LIKE '%$search%'
            OR keywords LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
}
?>



<?php
if (isset($result)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='result-card'>";            echo "<h2><a href='treatment.php?id=" . $row['treatment_id'] . "'>" . $row['treatment_name'] . "</a></h2>";
            echo "<p><strong>Medical Specialty:</strong> " . $row['medical_specialty'] . "</p>";
            echo "<p><strong>Condition:</strong> " . $row['related_condition'] . "</p>";
            echo "<p><strong>Countries:</strong> " . $row['countries_available'] . "</p>";
            echo "<p><strong>Nigeria Hospitals:</strong> " . $row['nigeria_hospitals'] . "</p>";
            echo "<p><strong>International Hospitals:</strong> " . $row['international_hospitals'] . "</p>";
            echo "</div>";
        }

    } else {

        echo "<p>No records found.</p>";

    }

}
?>

<br>


</body>
</html>