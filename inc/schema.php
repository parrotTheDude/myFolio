<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Jacob Bowerman",
  "alternateName": "Bowerman Digital",
  "url": "https://jbowerman.com<?= htmlspecialchars($page_name) ?>",
  "image": "https://jbowerman.com/octo.webp",
  "logo": "https://jbowerman.com/octo.webp",
  "description": <?= json_encode($page_description) ?>,
  "founder": {
    "@type": "Person",
    "name": "Jacob Bowerman",
    "jobTitle": "Full Stack Developer",
    "url": "https://jbowerman.com"
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Sydney",
    "addressRegion": "NSW",
    "addressCountry": "AU"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Australia"
  },
  "sameAs": [
    "https://github.com/parrotTheDude",
    "https://www.linkedin.com/in/jacob-bowerman-47180a337/",
    "https://bowermandigital.com/",
    "https://vizzbud.com/"
  ]
}
</script>