<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online News Portal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .footer {
    background-color: #343a40;
    color: white;
    text-align: center;
    padding: 20px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
    left: 0;
    z-index: 1000;
}

/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
/* Footer */
.footer {
    background-color: #343a40;
    color: white;
    padding: 20px 0;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
        width: 100%;
    }

    .search-bar {
        width: 100%;
        margin-top: 10px;
    }

    .search-bar input[type="text"] {
        width: 100%;
    }

    .search-bar button {
        width: 100%;
    }

    .news-item img {
        height: auto;
    }
}

    </style>
</head>
<body>

<?php include "navbar.php"?>
<?php include "trending.php"?>
    <?php include "slider.php"?>
<?php include "main.php"?>
<?php include "adv.php"?>
            
     <!-- Footer -->
     <footer class="footer">
        <p>&copy; 2024 Online Khabar. All Rights Reserved.</p>
    </footer>
</body>
</html>
