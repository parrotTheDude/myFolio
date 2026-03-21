<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<base href="https://jbowerman.com/">

<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
<link rel="canonical" href="https://jbowerman.com<?= htmlspecialchars($page_name) ?>" />

<!-- Icons -->
<link rel="icon" type="image/webp" href="/octo.webp" />
<link rel="apple-touch-icon" href="/octo.webp" />
<meta name="theme-color" content="#000" />

<!-- Open Graph / Social -->
<meta property="og:type" content="website" />
<meta property="og:locale" content="en_AU" />
<meta property="og:url" content="https://jbowerman.com<?= htmlspecialchars($page_name) ?>" />
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
<meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
<meta property="og:image" content="https://jbowerman.com/octo.webp" />
<meta property="og:site_name" content="Jacob Bowerman" />

<!-- Performance -->
<link rel="preload" href="/octo.webp" as="image" type="image/webp" fetchpriority="high">
<link rel="preload" href="/fonts/SpaceGrotesk-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/fonts/ShareTechMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
<style>
@font-face{font-family:"SpaceGrotesk";src:url("/fonts/SpaceGrotesk-VariableFont_wght.woff2") format("woff2");font-display:swap}
@font-face{font-family:"ShareTechMono";src:url("/fonts/ShareTechMono-Regular.woff2") format("woff2");font-display:swap}
:root{--bg:#0a0a0a;--text:#f8f8f8;--accent:#7dda5d;--accent-glow:rgba(125,218,93,0.25);--font-main:"SpaceGrotesk",sans-serif;--font-mono:"ShareTechMono",monospace}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:var(--font-main);text-align:center;display:flex;flex-direction:column;min-height:100vh;overflow-x:hidden}
.container{flex:1;display:flex;flex-direction:column;justify-content:center;align-items:center;padding:4rem 1.5rem}
.hero{display:flex;flex-direction:column;align-items:center;gap:1.5rem;margin-bottom:2rem}
.picture{height:12rem;width:12rem;border-radius:50%;border:2px solid var(--accent);background:url("/octo.webp") center/cover no-repeat;box-shadow:0 0 25px var(--accent-glow);animation:pulseGlow 5s ease-in-out infinite;transition:transform .4s ease,box-shadow .4s ease}
.picture:hover{transform:scale(1.08);box-shadow:0 0 45px var(--accent)}
@keyframes pulseGlow{0%{transform:scale(1);box-shadow:0 0 25px var(--accent-glow)}25%{transform:scale(1.03);box-shadow:0 0 35px rgba(125,218,93,0.4)}50%{transform:scale(1.06);box-shadow:0 0 45px rgba(125,218,93,0.6)}75%{transform:scale(1.03);box-shadow:0 0 35px rgba(125,218,93,0.4)}100%{transform:scale(1);box-shadow:0 0 25px var(--accent-glow)}}
h1{font-family:var(--font-mono);font-size:1.4rem;font-weight:500;letter-spacing:.03em;color:var(--text);text-transform:lowercase}
.nav ul{display:flex;flex-wrap:wrap;justify-content:center;gap:1rem 2rem;list-style:none;padding:1rem 0}
.nav a{color:var(--accent);text-decoration:none;font-family:var(--font-mono);font-size:1rem;letter-spacing:.03em;position:relative;transition:all .3s ease}
.nav a::after{content:'';position:absolute;bottom:-2px;left:0;width:100%;height:1px;background:var(--accent);transform:scaleX(0);transform-origin:left;transition:transform .25s ease}
.nav a:hover{color:#fff;text-shadow:0 0 8px var(--accent)}
.nav a:hover::after{transform:scaleX(1)}
.tag{margin-top:1rem;font-family:var(--font-mono);font-size:.9rem;color:var(--accent);opacity:.85}
footer{padding:1rem;font-size:.8rem;color:#8a8a8a;font-family:var(--font-mono);border-top:1px solid rgba(255,255,255,0.05)}
.fade-in{animation:fadeIn 1s ease forwards}
.fade-up{opacity:0;transform:translateY(10px);animation:fadeUp .8s ease forwards}
.fade-up:nth-child(n){animation-delay:calc(.1s * var(--i))}
@keyframes fadeUp{0%{opacity:0;transform:translateY(10px)}100%{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{0%{opacity:0}100%{opacity:1}}
@media(max-width:640px){.picture{height:8rem;width:8rem}h1{font-size:1.1rem}.nav ul{gap:.75rem 1.5rem}.nav a{font-size:.9rem}}
</style>

<!-- Mobile App Friendly -->
<meta name="mobile-web-app-capable" content="yes" />