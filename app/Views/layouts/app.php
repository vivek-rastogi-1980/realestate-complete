<?php /** @var string $view */ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ultra-modern luxury real estate platform with immersive 3D property discovery.">
  <meta property="og:title" content="<?= htmlspecialchars($title ?? 'LuxEstate', ENT_QUOTES) ?>">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="canonical" href="/">
  <title><?= htmlspecialchars($title ?? 'LuxEstate', ENT_QUOTES) ?></title>
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/css/app.css">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"RealEstateAgent","name":"LuxEstate","url":"/"}</script>
</head>
<body>
<div class="cursor-dot" aria-hidden="true"></div>
<?php require dirname(__DIR__).'/partials/nav.php'; ?>
<main id="smooth-wrapper"><?php require dirname(__DIR__).'/'.$view.'.php'; ?></main>
<?php require dirname(__DIR__).'/partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/three@0.166.1/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.13/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/assets/js/app.js" type="module"></script>
</body>
</html>
