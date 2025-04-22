<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Reviews | Reader's Choice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #D7EAE2;
      color: #2B2722;
    }
    .header {
      background-color: #2B2722;
      padding: 10px 20px;
      border-bottom: 1px solid #D7EAE2;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header .logo {
      font-size: 24px;
      font-weight: bold;
      color: #D7EAE2;
    }
    .header .nav {
      display: flex;
      gap: 20px;
    }
    .header .nav a {
      text-decoration: none;
      color: #D7EAE2;
      font-size: 14px;
    }
    .header .nav a:hover {
      color: #ffffff;
    }
    .content {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
    }
    .content h1 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
    }
    .book-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .book-container {
      background-color: #2B2722;
      padding: 15px;
      border-radius: 10px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      cursor: pointer;
    }
    .book-image {
      width: 100%;
      height: auto;
      border: 2px solid #D7EAE2;
      border-radius: 5px;
      margin-bottom: 15px;
    }
    .book-name {
      font-size: 20px;
      color: #D7EAE2;
      margin-bottom: 10px;
    }
    .rating {
      font-size: 16px;
      color: #D7EAE2;
      margin-bottom: 10px;
    }
    .rating .star {
      color: #FFD700;
      margin: 0 2px;
      cursor: pointer;
      font-size: 18px;
    }
    .footer {
      background-color: #2B2722;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: center;
    }
    .footer .decorative-box {
      width: 200px;
      height: 30px;
      border: 1px solid #D7EAE2;
      border-radius: 5px;
      background-color: #D7EAE2;
      color: #2B2722;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="logo">Reader's Choice</div>
    <div class="nav">
      <a href="login.php">Logout</a>
    </div>
  </div>

  <div class="content">
    <h1>Featured Book Reviews</h1>
    <div class="book-grid">
      <div class="book-container" data-url="bookdetails.php?book=adulthood">
        <img style="height:390px;" src="Adulthood is a myth.jpg" class="book-image" alt="Adulthood is a Myth">
        <div class="book-name">Adulthood is a Myth</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=floating_world">
        <img style="height:390px;" src="An artist of the floating world.jpg" class="book-image" alt="An Artist of the Floating World">
        <div class="book-name">An Artist of the Floating World</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span> (<span class="rating-value">5</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=cat_sensei">
        <img style="height:390px;" src="The cat who taught sen.jpg" class="book-image" alt="The cat who taught sen">
        <div class="book-name">The cat who taught sen</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=wimpy_kid">
        <img style="height:390px;" src="Diary of a wimpy kid.jpg" class="book-image" alt="Diary of a Wimpy Kid">
        <div class="book-name">Diary of a Wimpy Kid</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span><span class="star">☆</span> (<span class="rating-value">3</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=dogman">
        <img style="height:390px;" src="Dog man.jpg" class="book-image" alt="Dog Man">
        <div class="book-name">Dog Man</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span> (<span class="rating-value">5</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=styles">
        <img style="height:390px;" src="the mysterious affair at styles.jpg" class="book-image" alt="The Mysterious Affair at Styles">
        <div class="book-name">The Mysterious Affair at Styles</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=art_and_fear">
        <img style="height:390px;" src="The art and fear.jpg" class="book-image" alt="The Art and Fear">
        <div class="book-name">The Art and Fear</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span><span class="star">☆</span> (<span class="rating-value">3</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=alchemist">
        <img style="height:390px;" src="The Alchemist.jpg" class="book-image" alt="The Alchemist">
        <div class="book-name">The Alchemist</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span> (<span class="rating-value">5</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=vincent_letters">
        <img style="height:390px;" src="The letters of vincent van Gogh.jpg" class="book-image" alt="The Letters of Vincent van Gogh">
        <div class="book-name">The Letters of Vincent van Gogh</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=story_of_art">
        <img style="height:390px;" src="The story of art.jpg" class="book-image" alt="The Story of Art">
        <div class="book-name">The Story of Art</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=shoedog">
        <img style="height:390px;" src="shoe dog.jpg" class="book-image" alt="Shoe Dog">
        <div class="book-name">Shoe Dog</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span> (<span class="rating-value">4</span>/5)</div>
      </div>

      <div class="book-container" data-url="bookdetails.php?book=malala">
        <img style="height:390px;" src="i am malala.jpg" class="book-image" alt="I Am Malala">
        <div class="book-name">I Am Malala</div>
        <div class="rating">Rating: <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span> (<span class="rating-value">5</span>/5)</div>
      </div>
    </div>

    <div class="more-genres">
      <a href="#">Go to Top</a>
    </div>
  </div>


  <script>
    document.querySelectorAll('.book-container').forEach(container => {
      // Redirect to the book details page on click
      container.addEventListener('click', () => {
        const targetUrl = container.getAttribute('data-url');
        if (targetUrl) {
          window.location.href = targetUrl;
        }
      });

      // Handle rating stars
      const stars = container.querySelectorAll('.star');
      const ratingValue = container.querySelector('.rating-value');

      stars.forEach((star, index) => {
        star.addEventListener('click', (event) => {
          event.stopPropagation(); // Don't trigger redirect on star click
          stars.forEach((s, i) => {
            s.textContent = i <= index ? '★' : '☆';
          });
          ratingValue.textContent = index + 1;
        });
      });
    });
  </script>
</body>
</html>
