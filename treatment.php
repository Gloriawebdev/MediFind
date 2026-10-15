<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("No treatment selected.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM treatments WHERE treatment_id = $id";
 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Treatment not found.");
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['treatment_name']; ?></title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="search">
            <a href="index.php">Back to Search</a>
    </div>

<div class="details-card">

<h1><?php echo $row['treatment_name']; ?></h1>

<p><strong>Medical Specialty:</strong> <?php echo $row['medical_specialty']; ?></p>

<p><strong>Related Condition:</strong> <?php echo $row['related_condition']; ?></p>

<p><strong>Description:</strong> <?php echo $row['description']; ?></p>

<p><strong>Symptoms / Indications:</strong> <?php echo $row['symptoms_indications']; ?></p>

<p><strong>Nigeria Hospitals:</strong> <?php echo $row['nigeria_hospitals']; ?></p>

<p><strong>International Hospitals:</strong> <?php echo $row['international_hospitals']; ?></p>

<p><strong>Countries Available:</strong> <?php echo $row['countries_available']; ?></p>

<p><strong>Estimated Cost (Nigeria):</strong> <?php echo $row['estimated_cost_nigeria']; ?></p>

<p><strong>Estimated Cost (International):</strong> <?php echo $row['estimated_cost_international']; ?></p>

<p><strong>Treatment Duration:</strong> <?php echo $row['treatment_duration']; ?></p>

<p><strong>Recovery Time:</strong> <?php echo $row['recovery_time']; ?></p>

<p><strong>Success Rate:</strong> <?php echo $row['success_rate']; ?></p>

<p><strong>Referral Required:</strong> <?php echo $row['referral_required']; ?></p>

<p><strong>Risks:</strong> <?php echo $row['risks']; ?></p>

<p><strong>Hospital Websites:</strong> <?php echo $row['hospital_websites']; ?></p>

<p><strong>Keywords:</strong> <?php echo $row['keywords']; ?></p>

<br>


</div>

</body>
</html>