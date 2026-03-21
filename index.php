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
        <a href="https://github.com/parrotTheDude" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
        </a>
        <a href="https://www.linkedin.com/in/jacob-bowerman-47180a337/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="mailto:hello@bowermandigital.com?subject=Website Enquiry" aria-label="Email">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/><path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/></svg>
        </a>
      </nav>

      <p class="tag fade-up" style="animation-delay: .6s;">@parrotTheDude</p>
    </main>

    <footer class="fade-up" style="animation-delay: .75s;">
      <p class="footer-text">&copy; <?= date('Y'); ?> Jacob Bowerman</p>
    </footer>

    <script>
    /* ====== Terminal Typing ====== */
    (() => {
      const text = 'jacob bowerman | full stack engineer | sydney, australia';
      const el = document.getElementById('typed');
      let i = 0;

      function type() {
        if (i <= text.length) {
          el.textContent = text.slice(0, i);
          i++;
          setTimeout(type, 35 + Math.random() * 25);
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

      const isMobile = window.innerWidth < 640;
      const count = isMobile ? 30 : Math.min(80, Math.floor(window.innerWidth / 15));
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
