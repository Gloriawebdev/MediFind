<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediFind - Medical Treatment Information Retrieval System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

 
<body>
    <nav class="navbar">
    <div class="logo">MediFind</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
    </div>
</nav>

    <div class="container">

        <h1>MediFind</h1>

        <p class="subtitle">
            Medical Treatment Information Retrieval System
        </p>

        <p class="description">
            Search over 40 specialized medical treatments, hospitals, and healthcare services
            available in Nigeria and internationally.
        </p>

        <form action="search.php" method="GET" >

            <input class="dd"
                type="text"
                name="search"
                placeholder="Search treatment, disease, hospital, country..."
                required
            >

            <button type="submit">Search</button>

        </form>

    </div>
<footer>
    <p>&copy; 2026 MediFind | Medical Treatment Information Retrieval System</p>
</footer>
</body>

</html>