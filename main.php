<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .news-section {
    padding: 20px 0;
}

.news-section h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.news-item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.news-item img {
    width: 100%;
    height: auto;
    border-bottom: 3px solid #1e90ff;
    border-radius: 10px 10px 0 0;
}

.news-item h3 {
    font-size: 24px;
    color: #1e90ff;
    margin: 15px 20px;
}

.news-item p {
    font-size: 16px;
    color: #666;
    margin: 0 20px 20px;
    line-height: 1.6;
}

.news-item .btn {
    display: inline-block;
    margin: 10px 20px 20px;
    padding: 10px 20px;
    background-color: #1e90ff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.news-item .btn:hover {
    background-color: #ff6347; /* Tomato on hover */
}

    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <!-- Main News Section -->
            <div class="col-md-8 news-section">
                <h2>Latest News</h2>
                <div class="news-item">
                    <img src="news.jpeg" alt="News Image">
                    <h3>PM is back from world tour </h3>
                    <p>our respected pm who was recently on his world tour has returned home after 15 days ....</p>
                    <a href="https://thehimalayantimes.com/kathmandu/prime-minister-dahal-returns-home-from-delhi" class="btn btn-primary">Read More</a>
                </div>
                <div class="news-item">
                    <img src="news1.jpeg" alt="News Image">
                    <h3> what will happen next  </h3>
                    <p>after the covid recently the pm of both country arranged a meeting and made some deals ...</p>
                    <a href="https://kathmandupost.com/national/2024/01/05/nepal-and-india-review-relations-sign-10-000mw-power-export-deal" class="btn btn-primary">Read More</a>
                </div>
                <!-- Add more news items as needed -->
            
</body>
</html>