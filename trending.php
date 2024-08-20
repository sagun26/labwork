<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .trending {
    margin-top: 20px;
    padding: 10px 0;
    background-color: #f4f4f4;
}

.trending h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.trending-news {
    display: flex;
    overflow-x: hidden;
    white-space: nowrap;
    gap: 20px;
    align-items: center;
    animation: scrollLeft 20s linear infinite;
}

.news-item {
    display: inline-block;
    padding: 10px 20px;
    background-color: #1e90ff;
    color: white;
    border-radius: 5px;
    min-width: 200px;
    text-align: center;
    flex-shrink: 0;
}

@keyframes scrollLeft {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>
</head>
<body>
        <!-- Trending Section -->
        <section class="trending">
        <h2>Trending...</h2>
        <div class="trending-news">
            <div class="news-item">News Item 1</div>
            <div class="news-item">News Item 2</div>
            <div class="news-item">News Item 3</div>
            <!-- Add more news items as needed -->
        </div>

    </section>
</body>
</html>