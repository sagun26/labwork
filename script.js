// Example script to enhance functionality
document.querySelector('.search-bar button').addEventListener('click', function() {
    alert('Search button clicked!');
});
document.addEventListener('DOMContentLoaded', function () {
    const trendingNews = document.querySelector('.trending-news');
    let scrollAmount = 0;

    function scrollNews() {
        if (scrollAmount <= trendingNews.scrollWidth - trendingNews.clientWidth) {
            trendingNews.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
            scrollAmount += 2;
        } else {
            scrollAmount = 0;
        }
    }

    setInterval(scrollNews, 50); // Adjust the speed by changing the interval time
});
document.getElementById('load-more').addEventListener('click', function() {
    let newsContainer = document.getElementById('news-container');
    let offset = newsContainer.childElementCount;

    fetch(`load-news.php?offset=${offset}`)
        .then(response => response.json())
        .then(data => {
            data.forEach(newsItem => {
                let newsElement = document.createElement('div');
                newsElement.className = 'news-item';
                newsElement.innerHTML = `
                    <img src="${newsItem.image}" alt="${newsItem.title}">
                    <h3>${newsItem.title}</h3>
                    <p>${newsItem.description}</p>
                `;
                newsContainer.appendChild(newsElement);
            });
        })
        .catch(error => console.error('Error:', error));
});
