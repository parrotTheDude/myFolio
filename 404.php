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
    <canvas id="particles"></canvas>

    <main class="container fade-in">
      <div class="hero">
        <div class="picture fade-up"></div>
        <div class="terminal fade-up" style="animation-delay: .15s;">
          <span>> 404 — page not found</span>
        </div>
      </div>

      <nav class="socials fade-up" style="animation-delay: .3s;">
        <a href="/">go home</a>
      </nav>

      <p class="tag fade-up" style="animation-delay: .45s;">@parrotTheDude</p>
    </main>

    <footer class="fade-up" style="animation-delay: .6s;">
      <p class="footer-text">&copy; <?= date('Y'); ?> Jacob Bowerman</p>
    </footer>

    <script>
    (() => {
      const c = document.getElementById('particles');
      const ctx = c.getContext('2d');
      let w, h, particles = [], mouse = { x: -1000, y: -1000 };
      function resize() { w = c.width = window.innerWidth; h = c.height = window.innerHeight; }
      resize();
      window.addEventListener('resize', resize);
      document.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });
      const count = Math.min(80, Math.floor(window.innerWidth / 15));
      for (let i = 0; i < count; i++) {
        particles.push({ x: Math.random() * w, y: Math.random() * h, vx: (Math.random() - 0.5) * 0.3, vy: (Math.random() - 0.5) * 0.3, r: Math.random() * 1.5 + 0.5 });
      }
      function draw() {
        ctx.clearRect(0, 0, w, h);
        for (const p of particles) {
          const dx = p.x - mouse.x, dy = p.y - mouse.y, dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 120) { const force = (120 - dist) / 120 * 0.4; p.vx += (dx / dist) * force; p.vy += (dy / dist) * force; }
          p.x += p.vx; p.y += p.vy; p.vx *= 0.99; p.vy *= 0.99;
          if (p.x < 0) p.x = w; if (p.x > w) p.x = 0; if (p.y < 0) p.y = h; if (p.y > h) p.y = 0;
          ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2); ctx.fillStyle = 'rgba(125, 218, 93, 0.25)'; ctx.fill();
        }
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x, dy = particles[i].y - particles[j].y, dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 100) { ctx.beginPath(); ctx.moveTo(particles[i].x, particles[i].y); ctx.lineTo(particles[j].x, particles[j].y); ctx.strokeStyle = `rgba(125, 218, 93, ${0.08 * (1 - dist / 100)})`; ctx.stroke(); }
          }
        }
        requestAnimationFrame(draw);
      }
      draw();
    })();
    </script>
  </body>
</html>
