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
    <canvas id="particles"></canvas>

    <main class="container fade-in">
      <div class="hero">
        <div class="picture fade-up"></div>
        <div class="terminal fade-up" style="animation-delay: .15s;">
          <span id="typed"></span><span class="cursor">_</span>
        </div>
      </div>

      <section class="projects fade-up" style="animation-delay: .3s;">
        <a href="https://bowermandigital.com/" target="_blank" rel="noopener noreferrer" class="card">
          <h2>bowerman digital</h2>
          <p>web studio &amp; dev agency</p>
        </a>
        <a href="https://vizzbud.com" target="_blank" rel="noopener noreferrer" class="card">
          <h2>vizzbud</h2>
          <p>ai-powered platform</p>
        </a>
        <a href="https://eviebowerman.com" target="_blank" rel="noopener noreferrer" class="card">
          <h2>evie</h2>
          <p>personal site build</p>
        </a>
        <a href="https://thatdisabilityadventurecompany.com.au/" target="_blank" rel="noopener noreferrer" class="card">
          <h2>tdac</h2>
          <p>disability adventure co.</p>
        </a>
      </section>

      <nav class="socials fade-up" style="animation-delay: .45s;">
        <a href="https://github.com/parrotTheDude" target="_blank" rel="noopener noreferrer">git</a>
        <a href="https://www.linkedin.com/in/jacob-bowerman-47180a337/" target="_blank" rel="noopener noreferrer">linkedin</a>
        <a href="mailto:hello@bowermandigital.com?subject=Website Enquiry">email</a>
      </nav>

      <p class="tag fade-up" style="animation-delay: .6s;">@parrotTheDude</p>
    </main>

    <footer class="fade-up" style="animation-delay: .75s;">
      <p class="footer-text">&copy; <?= date('Y'); ?> Jacob Bowerman</p>
    </footer>

    <script>
    /* ====== Terminal Typing ====== */
    (() => {
      const lines = [
        '> jacob bowerman',
        '> full stack developer',
        '> sydney, australia',
        '> building things for the web'
      ];
      const el = document.getElementById('typed');
      let lineIdx = 0, charIdx = 0;

      function type() {
        if (lineIdx >= lines.length) return;
        const line = lines[lineIdx];
        if (charIdx <= line.length) {
          el.innerHTML = lines.slice(0, lineIdx).join('<br>') +
            (lineIdx > 0 ? '<br>' : '') + line.slice(0, charIdx);
          charIdx++;
          setTimeout(type, 35 + Math.random() * 25);
        } else {
          lineIdx++;
          charIdx = 0;
          setTimeout(type, 400);
        }
      }
      setTimeout(type, 600);
    })();

    /* ====== Particle Background ====== */
    (() => {
      const c = document.getElementById('particles');
      const ctx = c.getContext('2d');
      let w, h, particles = [], mouse = { x: -1000, y: -1000 };

      function resize() {
        w = c.width = window.innerWidth;
        h = c.height = window.innerHeight;
      }
      resize();
      window.addEventListener('resize', resize);
      document.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });

      const count = Math.min(80, Math.floor(window.innerWidth / 15));
      for (let i = 0; i < count; i++) {
        particles.push({
          x: Math.random() * w,
          y: Math.random() * h,
          vx: (Math.random() - 0.5) * 0.3,
          vy: (Math.random() - 0.5) * 0.3,
          r: Math.random() * 1.5 + 0.5
        });
      }

      function draw() {
        ctx.clearRect(0, 0, w, h);
        for (const p of particles) {
          // gentle mouse repulsion
          const dx = p.x - mouse.x, dy = p.y - mouse.y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 120) {
            const force = (120 - dist) / 120 * 0.4;
            p.vx += (dx / dist) * force;
            p.vy += (dy / dist) * force;
          }

          p.x += p.vx;
          p.y += p.vy;
          p.vx *= 0.99;
          p.vy *= 0.99;

          if (p.x < 0) p.x = w;
          if (p.x > w) p.x = 0;
          if (p.y < 0) p.y = h;
          if (p.y > h) p.y = 0;

          ctx.beginPath();
          ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
          ctx.fillStyle = 'rgba(125, 218, 93, 0.25)';
          ctx.fill();
        }

        // faint connecting lines
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 100) {
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.strokeStyle = `rgba(125, 218, 93, ${0.08 * (1 - dist / 100)})`;
              ctx.stroke();
            }
          }
        }
        requestAnimationFrame(draw);
      }
      draw();
    })();
    </script>
  </body>
</html>
