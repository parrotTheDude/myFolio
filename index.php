<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $page_title = 'Jacob Bowerman | Full Stack Developer';
      $page_description = "Full stack developer, creative, and ocean wanderer.";
      $page_name = '/';
      include('inc/head.php');
      include('inc/schema.php');
    ?>
  </head>

  <body>
    <main class="container fade-in">
      <div class="hero">
        <div class="picture fade-up"></div>
        <h1 class="fade-up" style="animation-delay: .15s;">welcome to my portfolio website</h1>
      </div>

      <nav class="nav fade-up" style="animation-delay: .3s;">
        <ul>
          <li><a href="https://github.com/parrotTheDude" target="_blank" rel="noopener noreferrer">git</a></li>
          <li><a href="https://www.linkedin.com/in/jacob-bowerman-47180a337/" target="_blank" rel="noopener noreferrer">linkedin</a></li>
          <li><a href="mailto:hello@bowermandigital.com?subject=Website Enquiry">email</a></li>
          <li><a href="https://vizzbud.com" target="_blank" rel="noopener noreferrer">vizzbud</a></li>
          <li><a href="https://eviebowerman.com" target="_blank" rel="noopener noreferrer">evie</a></li>
          <li><a href="https://thatdisabilityadventurecompany.com.au/" target="_blank" rel="noopener noreferrer">tdac</a></li>
          <li><a href="https://bowermandigital.com/" target="_blank" rel="noopener noreferrer">bowerman digital</a></li>
        </ul>
      </nav>

      <p class="tag fade-up" style="animation-delay: .45s;">@parrotTheDude</p>
    </main>

    <footer class="fade-up" style="animation-delay: .6s;">
      <p class="footer-text">© <?= date('Y'); ?> Jacob Bowerman</p>
    </footer>
  </body>
</html>
