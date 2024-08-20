<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        navbar {
    background-color: #1e90ff; /* Blue background */
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo a {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: white;
    transition: color 0.3s ease;
}

.logo a:hover {
    color: #ffeb3b; /* Yellow on hover */
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 15px;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    padding: 5px 0;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #ffeb3b; /* Yellow on hover */
}

/* Search Bar */
.search-bar {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search-bar input[type="text"] {
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    outline: none;
}

.search-bar button {
    padding: 5px 15px;
    background-color: #ff6347;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.search-bar button:hover {
    background-color: #ff4500; /* Darker red on hover */
}
    </style>
</head>
<body>
     <!-- Navigation Bar -->
     <nav class="navbar">
        <div class="logo">
            <a href="#">Nepal Khabar</a>
        </div>
        <ul class="nav-links">
            <li><a href="#">होमपेज</a></li>
            <li><a href="#">समाचार</a></li>
            <li><a href="#">जीवनशैली</a></li>
            <li><a href="#">मनोरञ्जन</a></li>
            <li><a href="#">खेलकुद</a></li>
            <li><a href="#">स्वास्थ्य</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search Keywords">
            <button>Search</button>
        </div>
    </nav>
</body>
</html>