<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<base href="https://jbowerman.com/">

<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex" />
<?php else: ?>
<link rel="canonical" href="https://jbowerman.com<?= htmlspecialchars($page_name) ?>" />
<?php endif; ?>

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
<meta property="og:site_name" content="jbowerman" />

<!-- Twitter / X -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
<meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
<meta name="twitter:image" content="https://jbowerman.com/octo.webp" />

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
#particles{position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;pointer-events:none}
.container{position:relative;z-index:1;flex:1;display:flex;flex-direction:column;justify-content:center;align-items:center;padding:4rem 1.5rem}
.hero{display:flex;flex-direction:column;align-items:center;gap:1.5rem;margin-bottom:2rem}
.picture{height:12rem;width:12rem;border-radius:50%;border:2px solid var(--accent);background:url("/octo.webp") center/cover no-repeat;box-shadow:0 0 25px var(--accent-glow);animation:pulseGlow 5s ease-in-out infinite;transition:transform .4s ease,box-shadow .4s ease}
.picture:hover{transform:scale(1.08);box-shadow:0 0 45px var(--accent)}
@keyframes pulseGlow{0%{transform:scale(1);box-shadow:0 0 25px var(--accent-glow)}25%{transform:scale(1.03);box-shadow:0 0 35px rgba(125,218,93,0.4)}50%{transform:scale(1.06);box-shadow:0 0 45px rgba(125,218,93,0.6)}75%{transform:scale(1.03);box-shadow:0 0 35px rgba(125,218,93,0.4)}100%{transform:scale(1);box-shadow:0 0 25px var(--accent-glow)}}
.name{font-family:var(--font-mono);font-size:1.6rem;font-weight:500;color:var(--text);letter-spacing:.03em;text-transform:lowercase;margin:0}
.terminal{font-family:var(--font-mono);font-size:1rem;color:var(--accent);text-align:center;line-height:1.8;white-space:nowrap}
.cursor{animation:blink .8s step-end infinite;color:var(--accent)}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
.projects{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;max-width:720px;width:100%;margin-bottom:1.5rem}
.card{display:block;padding:1.2rem;border:1px solid rgba(125,218,93,0.15);border-radius:8px;background:rgba(125,218,93,0.03);text-decoration:none;transition:all .3s ease;-webkit-tap-highlight-color:transparent}
.card:hover{border-color:var(--accent);box-shadow:0 0 20px var(--accent-glow);transform:translateY(-2px)}
.card h2{font-family:var(--font-mono);font-size:.85rem;color:var(--accent);font-weight:500;margin-bottom:.3rem}
.card p{font-family:var(--font-mono);font-size:.7rem;color:#8a8a8a}
.card:hover p{color:var(--text)}
.socials{display:flex;gap:1.5rem;margin-bottom:.5rem;align-items:center}
.socials a{color:var(--accent);display:flex;align-items:center;transition:all .3s ease;-webkit-tap-highlight-color:transparent}
.socials a:hover{color:#fff;filter:drop-shadow(0 0 6px var(--accent))}
.tag{margin-top:1rem;font-family:var(--font-mono);font-size:.9rem;color:var(--accent);opacity:.85}
footer{position:relative;z-index:1;padding:1rem;font-size:.8rem;color:#8a8a8a;font-family:var(--font-mono);border-top:1px solid rgba(255,255,255,0.05)}
.fade-in{animation:fadeIn 1s ease forwards}
.fade-up{opacity:0;transform:translateY(10px);animation:fadeUp .8s ease forwards}
.fade-up:nth-child(n){animation-delay:calc(.1s * var(--i))}
@keyframes fadeUp{0%{opacity:0;transform:translateY(10px)}100%{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{0%{opacity:0}100%{opacity:1}}
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{animation:none!important;transition:none!important}.fade-up,.fade-in{opacity:1;transform:none}html{scroll-behavior:auto}}
@media(max-width:640px){.container{padding:2.5rem 1rem}.hero{gap:.8rem;margin-bottom:1.5rem}.picture{height:7rem;width:7rem}.name{font-size:1.2rem}.terminal{font-size:.7rem;white-space:nowrap}.projects{grid-template-columns:repeat(2,1fr);gap:.6rem;max-width:100%}.card{padding:.8rem}.card h2{font-size:.8rem}.card p{font-size:.65rem}.socials{gap:1.2rem}.socials svg{width:18px;height:18px}.tag{font-size:.75rem;margin-top:.6rem}footer{padding:.8rem;font-size:.7rem}}
</style>

<!-- Mobile App Friendly -->
<meta name="mobile-web-app-capable" content="yes" />