<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Summary</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #fdfbfb, #ebedee);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }
    .container {
      max-width: 800px;
      padding: 30px;
      margin: 20px;
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
      line-height: 1.8;
    }
    .title {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      color: #4a4a4a;
      text-shadow: 1px 1px 2px #ccc;
    }
    .highlight {
      font-style: italic;
      color: #d35400;
    }
    p {
      font-size: 18px;
      text-align: justify;
    }
    .return-btn {
      display: block;
      width: 200px;
      margin: 20px auto 0;
      padding: 10px;
      text-align: center;
      background-color: #4a4a4a;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    .return-btn:hover {
      background-color: #d35400;
    }
    .rating-section {
        margin: 20px 0;
        text-align: center;
    }
    .stars {
        font-size: 24px;
        cursor: pointer;
        color: #ccc;
        display: inline-block;
    }
    .stars .filled {
        color: #d35400;
    }
    .review-form {
        margin-top: 20px;
    }
    .review-form textarea {
        width: 100%;
        min-height: 100px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
        font-family: inherit;
        font-size: 16px;
    }
    .review-form button {
        margin-top: 10px;
        padding: 8px 20px;
        background-color: #4a4a4a;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .review-form button:hover {
        background-color: #d35400;
    }
    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }
      .title {
        font-size: 28px;
      }
      p {
        font-size: 16px;
      }
      .return-btn {
        width: 150px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

<?php
$book = isset($_GET['book']) ? $_GET['book'] : '';

// Display success message if redirected back with success
if (isset($_GET['success'])) {
    echo "<script>alert('" . htmlspecialchars($_GET['success']) . "');</script>";
}

switch ($book) {
  case 'adulthood':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">Adulthood Is a Myth</span> by Sarah Andersen</div>
      <p><span class="highlight">Adulthood Is a Myth</span> is a witty, insightful, and deeply relatable comic collection that captures the essence of modern young adulthood with humor and heart. Created by Sarah Andersen, this debut book compiles her popular webcomics under the moniker "Sarah\'s Scribbles." The book follows the awkward, anxious, and often hilarious realities of navigating life as a young adult in the digital age, blending self-deprecating humor with universal experiences.</p>
      <p>Andersen uses her trademark minimalist yet expressive illustrations to portray the trials of transitioning into adulthood, touching on themes like social anxiety, procrastination, the pressures of growing up, and the struggle to balance personal ambitions with societal expectations. Each comic strip offers a candid glimpse into the mind of a young woman grappling with everyday challenges, from awkward social encounters to the overwhelming task of adult responsibilities like paying bills or maintaining relationships.</p>
      <p>The book celebrates the unglamorous, funny, and real moments of life, making readers feel seen and understood. It resonates with anyone who has ever felt overwhelmed by the transition from youth to maturity, offering a lighthearted perspective on the chaos of growing up. With its relatable content and charming artwork, <span class="highlight">Adulthood Is a Myth</span> is perfect for readers of all ages who enjoy humor rooted in the human experience, especially those feeling lost in the adulting world.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-adulthood">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-adulthood">
            <input type="hidden" name="book_id" value="adulthood">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsAdulthood = document.querySelectorAll("#stars-adulthood .star");
      let selectedRatingAdulthood = 0;
      starsAdulthood.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingAdulthood = this.dataset.value;
          document.getElementById("rating-adulthood").value = selectedRatingAdulthood;
          updateStars(starsAdulthood, selectedRatingAdulthood);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'floating_world':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">An Artist of the Floating World</span> by Kazuo Ishiguro</div>
      <p><span class="highlight">An Artist of the Floating World</span> is a reflective and nuanced novel by Kazuo Ishiguro, set in post-World War II Japan. Published in 1986, it follows Masuji Ono, an aging artist who looks back on his life and career as he navigates the changing social and cultural landscape of his country. The narrative unfolds through Ono’s introspective first-person account, blending memory with present-day interactions, and explores themes of personal responsibility, guilt, and the fluidity of truth.</p>
      <p>Ono was once a respected painter who contributed to Japan’s militarist propaganda before and during the war, creating art that glorified nationalistic ideals. As Japan rebuilds and redefines itself after its defeat, Ono faces a society that now questions the values he once upheld. His reflections reveal a man grappling with his past decisions, particularly his role in shaping a cultural narrative that supported aggression, and the personal cost of his artistic compromises.</p>
      <p>Through his introspection, Ono examines his transition from creating art that celebrated the "floating world"—a term for the transient pleasures of pre-war Japanese life—to confronting the moral ambiguities of his legacy. His interactions with family, former students, and neighbors highlight the generational divide and the shifting perceptions of honor and shame. Ishiguro masterfully explores themes of memory, guilt, and the subjective nature of truth, leaving readers to ponder the reliability of Ono’s recollections.</p>
      <p>Ultimately, <span class="highlight">An Artist of the Floating World</span> is a quiet yet powerful meditation on the impact of personal and collective history, earning Ishiguro critical acclaim and a place among the literary greats. The novel’s subtle prose and deep psychological insight make it a compelling study of human resilience and redemption.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-floating_world">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-floating_world">
            <input type="hidden" name="book_id" value="floating_world">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsFloatingWorld = document.querySelectorAll("#stars-floating_world .star");
      let selectedRatingFloatingWorld = 0;
      starsFloatingWorld.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingFloatingWorld = this.dataset.value;
          document.getElementById("rating-floating_world").value = selectedRatingFloatingWorld;
          updateStars(starsFloatingWorld, selectedRatingFloatingWorld);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'cat_sensei':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">The Cat Who Taught Zen</span> by James Norbury</div>
      <p><span class="highlight">The Cat Who Taught Zen</span> by James Norbury is a beautifully illustrated and thought-provoking tale that blends whimsical storytelling with timeless Zen philosophy. Published in recent years, this book follows the journey of a curious cat who embarks on a quest for self-discovery, guided by the wisdom of various animal mentors. With its gentle narrative and stunning artwork, it offers readers a meditative escape into the principles of mindfulness and simplicity.</p>
      <p>The story begins with the cat living a seemingly content life, yet feeling a quiet sense of dissatisfaction. Driven by an inner longing, the cat sets out into the world, encountering a series of wise animals—a fox, a deer, and an owl—each imparting lessons on presence, acceptance, and letting go. These encounters are depicted through Norbury’s minimalist yet evocative illustrations, which enhance the book’s serene tone and invite contemplation.</p>
      <p>Through conversations, shared experiences, and moments of solitude, the cat learns to let go of distractions and embrace the present moment, embodying core Zen teachings. The narrative weaves together humor, warmth, and profound insights, making complex ideas accessible to readers of all ages. James Norbury’s elegant illustrations and minimalistic style enhance the meditative quality of the book, creating a visual harmony that complements the text.</p>
      <p>Ultimately, <span class="highlight">The Cat Who Taught Zen</span> is a gentle reminder that wisdom often comes from observation, patience, and an open heart, offering a soothing and inspiring read for those seeking peace in a busy world.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-cat_sensei">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-cat_sensei">
            <input type="hidden" name="book_id" value="cat_sensei">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsCatSensei = document.querySelectorAll("#stars-cat_sensei .star");
      let selectedRatingCatSensei = 0;
      starsCatSensei.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingCatSensei = this.dataset.value;
          document.getElementById("rating-cat_sensei").value = selectedRatingCatSensei;
          updateStars(starsCatSensei, selectedRatingCatSensei);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'wimpy_kid':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">Diary of a Wimpy Kid</span> by Jeff Kinney</div>
      <p><span class="highlight">Diary of a Wimpy Kid</span> by Jeff Kinney is a humorous and relatable illustrated novel that chronicles the misadventures of Greg Heffley, a middle-schooler navigating the challenges of adolescence. First published in 2007, this book launched a beloved series that combines diary-style text with cartoon illustrations, appealing to young readers and adults alike with its lighthearted take on growing up.</p>
      <p>Greg is an ordinary kid who dreams of fame and popularity but often finds himself in embarrassing situations due to his naive optimism and poor decision-making. The story follows his daily life, including his strained relationship with his older brother Rodrick, his rivalry with best friend Rowley, and his attempts to survive the social hierarchy of middle school. Each entry is filled with comedic mishaps, from school projects gone wrong to family vacations turned chaotic.</p>
      <p>One of the book’s central themes is the struggle to fit in and be accepted, a universal experience that resonates with readers. Kinney’s witty narration, written from Greg’s self-aware yet self-centered perspective, adds depth and humor, while the simple black-and-white drawings amplify the story’s charm. The blend of text and cartoons creates a fast-paced, engaging read that captures the awkwardness and humor of youth.</p>
      <p>Overall, <span class="highlight">Diary of a Wimpy Kid</span> is a fun, witty, and insightful look at the trials of middle school, making it a timeless classic for readers seeking laughter and a touch of nostalgia.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-wimpy_kid">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-wimpy_kid">
            <input type="hidden" name="book_id" value="wimpy_kid">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsWimpyKid = document.querySelectorAll("#stars-wimpy_kid .star");
      let selectedRatingWimpyKid = 0;
      starsWimpyKid.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingWimpyKid = this.dataset.value;
          document.getElementById("rating-wimpy_kid").value = selectedRatingWimpyKid;
          updateStars(starsWimpyKid, selectedRatingWimpyKid);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'dogman':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">Dog Man</span> by Dav Pilkey</div>
      <p><span class="highlight">Dog Man</span> by Dav Pilkey is a hilarious and action-packed graphic novel that introduces a unique superhero created from the fusion of a police officer and his loyal dog. Launched in 2016 as a spin-off of the popular Captain Underpants series, this book combines slapstick humor, vibrant illustrations, and heartwarming lessons, making it a hit with young readers and fans of comic-style storytelling.</p>
      <p>The story begins with a dramatic origin: a police officer and his dog are badly injured during a confrontation with a bomb-wielding criminal. In a desperate surgical procedure, their heads are grafted together, resulting in Dog Man—a half-human, half-canine hero with a strong sense of justice and a playful demeanor. His main enemy is Petey the Cat, a mischievous, genius villain who’s always coming up with schemes to wreak havoc.</p>
      <p>Beyond the goofy humor and cartoon violence, the story also highlights values like kindness, loyalty, and the power of friendship, often through Dog Man’s interactions with his human partner and other characters. The fast-paced plot includes subplots involving a robot army and a living hot dog, adding to the absurdity and entertainment value. Dav Pilkey’s illustrations are lively and exaggerated, designed to feel like they were drawn by a child, which adds to the book’s charm and accessibility.</p>
      <p>In short, <span class="highlight">Dog Man</span> is a wildly entertaining story of an unlikely hero, blending humor, action, and positive messages into a delightful read for all ages.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-dogman">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-dogman">
            <input type="hidden" name="book_id" value="dogman">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsDogman = document.querySelectorAll("#stars-dogman .star");
      let selectedRatingDogman = 0;
      starsDogman.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingDogman = this.dataset.value;
          document.getElementById("rating-dogman").value = selectedRatingDogman;
          updateStars(starsDogman, selectedRatingDogman);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'styles':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">The Mysterious Affair at Styles</span> by Agatha Christie</div>
      <p><span class="highlight">The Mysterious Affair at Styles</span> is Agatha Christie’s debut novel, published in 1920, introducing the iconic Belgian detective Hercule Poirot. Set in the fictional Styles Court, an English country estate, this classic whodunit follows the investigation of a wealthy woman’s poisoning, unraveling a web of family secrets, jealousy, and deception in the aftermath of World War I.</p>
      <p>The novel is narrated by Arthur Hastings, a friend of Poirot, who is recovering from war injuries and staying at Styles Court. When Emily Inglethorp, the matriarch, is found dead from strychnine poisoning, suspicion falls on her much younger husband, Alfred, and her stepsons. Hastings calls upon the brilliant Belgian detective Hercule Poirot, who happens to be living nearby as a refugee, to solve the case.</p>
      <p>Poirot’s logical reasoning and unique perspective—relying on his “little grey cells”—eventually reveal a surprising truth, showcasing Christie’s mastery of misdirection and clue placement. The plot is enriched with a cast of memorable characters, including a volatile second husband and a secretive nurse, each with potential motives. The novel’s setting and period details add depth, reflecting the social tensions of post-war England.</p>
      <p><span class="highlight">The Mysterious Affair at Styles</span> not only introduces readers to Poirot’s brilliant mind but also establishes Christie as the “Queen of Crime,” setting the stage for her legendary career. Its enduring appeal lies in its clever plotting and the charm of its detective, making it a must-read for mystery enthusiasts.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-styles">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-styles">
            <input type="hidden" name="book_id" value="styles">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsStyles = document.querySelectorAll("#stars-styles .star");
      let selectedRatingStyles = 0;
      starsStyles.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingStyles = this.dataset.value;
          document.getElementById("rating-styles").value = selectedRatingStyles;
          updateStars(starsStyles, selectedRatingStyles);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'art_and_fear':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">Art & Fear</span> by David Bayles and Ted Orland</div>
      <p><span class="highlight">Art & Fear</span> by David Bayles and Ted Orland is a thoughtful and encouraging guide for artists, addressing the psychological and practical challenges of creating art. First published in 1993, this slim yet profound book draws on the authors’ extensive experience as artists and educators to offer wisdom that resonates with creators at all levels, from beginners to seasoned professionals.</p>
      <p>The authors, both artists themselves, argue that the most difficult part of making art is not talent or technique but the emotional hurdles—fear of failure, self-doubt, and the pressure to produce. They explore how these fears can paralyze creativity and offer practical strategies to overcome them, emphasizing that art is a process rather than a product. The book challenges the myth of the solitary genius, asserting that art is made through persistence and practice.</p>
      <p>A key theme in <span class="highlight">Art & Fear</span> is the idea that art is made by ordinary people who show up and work, even in the face of uncertainty. The text is filled with anecdotes and insights, such as the notion that quantity of work often leads to quality, and that mistakes are an integral part of the creative journey. The book’s conversational tone makes its lessons accessible and relatable.</p>
      <p>Ultimately, <span class="highlight">Art & Fear</span> is both a comforting companion and a motivational tool, inspiring artists to embrace their imperfections and continue creating despite the odds. It’s an essential read for anyone seeking to understand the emotional landscape of artistic endeavor.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-art_and_fear">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-art_and_fear">
            <input type="hidden" name="book_id" value="art_and_fear">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsArtAndFear = document.querySelectorAll("#stars-art_and_fear .star");
      let selectedRatingArtAndFear = 0;
      starsArtAndFear.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingArtAndFear = this.dataset.value;
          document.getElementById("rating-art_and_fear").value = selectedRatingArtAndFear;
          updateStars(starsArtAndFear, selectedRatingArtAndFear);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'alchemist':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">The Alchemist</span> by Paulo Coelho</div>
      <p><span class="highlight">The Alchemist</span> by Paulo Coelho is a philosophical and inspirational novel that follows the journey of Santiago, a young Andalusian shepherd, as he pursues his "Personal Legend"—a concept representing one’s true purpose in life. First published in Portuguese in 1988 and later translated globally, this allegorical tale has become a worldwide bestseller, celebrated for its universal themes of destiny, courage, and self-discovery.</p>
      <p>Along the way, Santiago meets a series of characters who each teach him valuable lessons: a king who encourages him to follow his dreams, an Englishman seeking the secrets of alchemy, and an alchemist who guides him toward his goal. These encounters are rich with symbolism, drawing from mysticism, spirituality, and the natural world, particularly the deserts of Egypt where much of the story unfolds.</p>
      <p>Santiago’s journey through the desert becomes symbolic of his internal transformation, as he learns to listen to his heart, overcome fear, and trust in the omens that guide him. The novel’s central message—that the pursuit of one’s dreams is as important as the achievement—resonates deeply, encouraging readers to reflect on their own aspirations.</p>
      <p>Coelho’s writing is simple yet poetic, and the novel is rich with allegorical meaning, blending elements of magic realism with life lessons. Ultimately, <span class="highlight">The Alchemist</span> is a timeless tale that inspires readers to embark on their own journeys of self-fulfillment, making it a cherished classic across cultures.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-alchemist">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-alchemist">
            <input type="hidden" name="book_id" value="alchemist">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsAlchemist = document.querySelectorAll("#stars-alchemist .star");
      let selectedRatingAlchemist = 0;
      starsAlchemist.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingAlchemist = this.dataset.value;
          document.getElementById("rating-alchemist").value = selectedRatingAlchemist;
          updateStars(starsAlchemist, selectedRatingAlchemist);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'vincent_letters':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">The Letters of Vincent van Gogh</span> by Vincent van Gogh</div>
      <p><span class="highlight">The Letters of Vincent van Gogh</span> is a deeply moving and revealing collection of correspondence written by the legendary artist to his brother Theo, friends, and fellow artists. Compiled and published posthumously, this collection spans Van Gogh’s life from his early struggles to his final years, offering an intimate glimpse into his artistic evolution, emotional turmoil, and unrelenting passion.</p>
      <p>Through his letters, Van Gogh emerges not only as a brilliant and passionate artist but also as a sensitive and introspective individual. Written primarily to Theo, who supported him financially and emotionally, the letters detail his artistic techniques, color theories, and the inspiration he drew from nature and everyday life. They also reveal his battles with mental illness, poverty, and rejection, painting a portrait of a man driven by an inner fire.</p>
      <p>A central theme of the correspondence is Van Gogh’s devotion to art as a form of personal salvation, a means to find meaning amidst suffering. His vivid descriptions of the landscapes he painted—such as the fields of Arles or the starry nights—bring his works to life, while his reflections on spirituality and human connection add depth. The letters are poetic and vivid, filled with observations on life, spirituality, and the creative process.</p>
      <p><span class="highlight">The Letters of Vincent van Gogh</span> is not just a historical document but a testament to the resilience of the human spirit, offering readers a profound connection to one of history’s greatest artists. It’s an essential read for art lovers and anyone interested in the mind behind the masterpieces.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-vincent_letters">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-vincent_letters">
            <input type="hidden" name="book_id" value="vincent_letters">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsVincentLetters = document.querySelectorAll("#stars-vincent_letters .star");
      let selectedRatingVincentLetters = 0;
      starsVincentLetters.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingVincentLetters = this.dataset.value;
          document.getElementById("rating-vincent_letters").value = selectedRatingVincentLetters;
          updateStars(starsVincentLetters, selectedRatingVincentLetters);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'story_of_art':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">The Story of Art</span> by E.H. Gombrich</div>
      <p><span class="highlight">The Story of Art</span> by E.H. Gombrich is a classic and accessible introduction to the history of Western art, first published in 1950 and revised over decades. Written by the renowned art historian Ernst Gombrich, this book traces the evolution of art from prehistoric times to the mid-20th century, offering a comprehensive yet engaging overview that has made it a staple for students, educators, and art enthusiasts alike.</p>
      <p>Gombrich’s approach is both scholarly and readable, aimed at general readers as well as students, avoiding dense jargon while providing insightful analysis. He explores how art reflects the cultural, social, and technological contexts of its time, from the cave paintings of Lascaux to the masterpieces of the Renaissance, Impressionism, and modern movements like Cubism.</p>
      <p>The book is organized chronologically, exploring the major styles, periods, and figures—such as Michelangelo, Rembrandt, and Picasso—while emphasizing the continuity and innovation in artistic expression. What sets <span class="highlight">The Story of Art</span> apart is Gombrich’s ability to explain complex ideas with clarity, using a narrative style that makes art history feel like a story of human creativity.</p>
      <p>Though the book has been critiqued for its Western-centric perspective and limited coverage of non-European art, its enduring value lies in its ability to inspire curiosity and appreciation. Updated editions reflect some of these critiques, but it remains a foundational text for understanding the development of visual art.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-story_of_art">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-story_of_art">
            <input type="hidden" name="book_id" value="story_of_art">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsStoryOfArt = document.querySelectorAll("#stars-story_of_art .star");
      let selectedRatingStoryOfArt = 0;
      starsStoryOfArt.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingStoryOfArt = this.dataset.value;
          document.getElementById("rating-story_of_art").value = selectedRatingStoryOfArt;
          updateStars(starsStoryOfArt, selectedRatingStoryOfArt);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'shoedog':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">Shoe Dog</span> by Phil Knight</div>
      <p><span class="highlight">Shoe Dog</span> is a candid and compelling memoir by Phil Knight, the co-founder of Nike, chronicling the highs and lows of building one of the world’s most iconic brands. Published in 2016, this book offers an intimate look at Knight’s journey from a young entrepreneur with a bold idea to the leader of a global corporation, blending personal anecdotes with business insights.</p>
      <p>The story begins in the early 1960s, when Knight, a shy and restless young man with a degree in journalism, takes a trip around the world that inspires him to import low-cost running shoes from Japan. With a $50 loan from his father and a handshake deal with a Japanese manufacturer, he launches Blue Ribbon Sports, the precursor to Nike. Throughout the book, Knight shares the many obstacles he and his team faced—cash flow crises, legal battles, and fierce competition from Adidas and Puma.</p>
      <p>More than a story about building a business empire, <span class="highlight">Shoe Dog</span> is a tale of resilience, risk-taking, and the power of a shared vision. Knight’s narrative reveals the human side of entrepreneurship, including his doubts, the strain on his family, and the unconventional team—runners, coaches, and misfits—who helped turn his dream into reality. The book culminates with the creation of the Nike brand and the revolutionary Air Max technology.</p>
      <p>Ultimately, <span class="highlight">Shoe Dog</span> is an inspiring and authentic story of perseverance, offering valuable lessons for entrepreneurs and readers interested in the behind-the-scenes story of a cultural icon.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-shoedog">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-shoedog">
            <input type="hidden" name="book_id" value="shoedog">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsShoedog = document.querySelectorAll("#stars-shoedog .star");
      let selectedRatingShoedog = 0;
      starsShoedog.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingShoedog = this.dataset.value;
          document.getElementById("rating-shoedog").value = selectedRatingShoedog;
          updateStars(starsShoedog, selectedRatingShoedog);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  case 'malala':
    echo '
    <div class="container">
      <div class="title"><span class="highlight">I Am Malala</span> by Malala Yousafzai</div>
      <p><span class="highlight">I Am Malala</span> is the powerful memoir of Malala Yousafzai, the Pakistani activist who became the youngest-ever Nobel Peace Prize laureate at age 17. Co-written with Christina Lamb and published in 2013, this book recounts Malala’s life, her fight for girls’ education, and her miraculous survival after being targeted by the Taliban. It’s a testament to courage, resilience, and the transformative power of education.</p>
      <p>Born into a supportive and educated family, Malala was encouraged by her father, a school principal, to pursue learning despite the growing influence of the Taliban in the Swat Valley. As a young girl, she began speaking out publicly for girls’ right to education, gaining attention through blogs and interviews. Despite the danger, Malala continued her advocacy, even as the Taliban imposed harsh restrictions and banned girls from attending school.</p>
      <p>In October 2012, at age 15, Malala was shot in the head by a Taliban gunman on her school bus, an attack that shocked the world. Malala miraculously survived and was flown to the UK for treatment, where she continued her recovery and activism. The book details her physical and emotional journey, as well as her determination to return to Pakistan and keep fighting for education.</p>
      <p>More than a story of survival, <span class="highlight">I Am Malala</span> is a call to action, urging readers to support global education initiatives. Her voice, filled with hope and defiance, inspires millions, making this memoir a moving and impactful read.</p>
      <div class="rating-section">
        <h3>Rate this book:</h3>
        <div class="stars" id="stars-malala">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
        </div>
        <div class="review-form">
          <form action="booking2.php" method="post">
            <textarea name="review" placeholder="Write your review here..." required></textarea>
            <input type="hidden" name="rating" id="rating-malala">
            <input type="hidden" name="book_id" value="malala">
            <button type="submit">Submit Review</button>
          </form>
        </div>
      </div>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>
    <script>
      const starsMalala = document.querySelectorAll("#stars-malala .star");
      let selectedRatingMalala = 0;
      starsMalala.forEach(star => {
        star.addEventListener("click", function() {
          selectedRatingMalala = this.dataset.value;
          document.getElementById("rating-malala").value = selectedRatingMalala;
          updateStars(starsMalala, selectedRatingMalala);
        });
      });
      function updateStars(stars, rating) {
        stars.forEach(star => {
          star.classList.toggle("filled", star.dataset.value <= rating);
        });
      }
    </script>';
    break;

  default:
    echo '
    <div class="container">
      <div class="title">Book not found</div>
      <p>Please select a valid book from the homepage.</p>
      <a href="new.php" class="return-btn">Return to Book List</a>
    </div>';
    break;
}
?>

</body>
</html>