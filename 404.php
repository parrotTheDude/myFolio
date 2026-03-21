<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $page_title = '404 | Jacob Bowerman';
      $page_description = 'Page not found.';
      $page_name = '/404';
      include('inc/head.php');
    ?>
  </head>

  <body>
    <main class="container fade-in">
      <div class="hero">
        <div class="picture fade-up"></div>
        <h1 class="fade-up" style="animation-delay: .15s;">404 — page not found</h1>
      </div>

      <nav class="nav fade-up" style="animation-delay: .3s;">
        <ul>
          <li><a href="/">go home</a></li>
        </ul>
      </nav>

      <p class="tag fade-up" style="animation-delay: .45s;">@parrotTheDude</p>
    </main>

    <footer class="fade-up" style="animation-delay: .6s;">
      <p class="footer-text">&copy; <?= date('Y'); ?> Jacob Bowerman</p>
    </footer>
  </body>
</html>
