<?php
// $pageTitle and $pageDescription should be set before including this file
$pageTitle = $pageTitle ?? 'Omulus AI — Healthcare Marketing & Practice Growth';
$pageDescription = $pageDescription ?? 'Omulus AI helps medical practices grow with digital marketing, paid ads, SEO, and practice management software.';
$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <!-- Styles -->
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>

<!-- ─── HEADER ─── -->
<header id="site-header" class="site-header">
  <div class="container-custom header-inner">

    <!-- Logo -->
    <a href="/" class="logo">
      <span class="logo-icon">O</span>
      <span class="logo-text">Omulus<span class="logo-dot">.AI</span></span>
    </a>

    <!-- Desktop Nav -->
    <nav class="desktop-nav">
      <div class="nav-item" data-dropdown="dropdown-marketing">
        <button class="nav-link dropdown-trigger">
          Marketing
          <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"/>
          </svg>
        </button>
        <div class="dropdown-menu" id="dropdown-marketing">
          <a href="/website-design.php" class="dropdown-item">Website Design</a>
          <a href="/paid-ads.php" class="dropdown-item">Paid Advertising</a>
          <a href="/seo.php" class="dropdown-item">SEO</a>
          <a href="/social-media.php" class="dropdown-item">Social Media</a>
          <a href="/email-marketing.php" class="dropdown-item">Email Marketing</a>
          <a href="/automation.php" class="dropdown-item">Automation</a>
        </div>
      </div>

      <div class="nav-item" data-dropdown="dropdown-cases">
        <button class="nav-link dropdown-trigger">
          Case Studies
          <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"/>
          </svg>
        </button>
        <div class="dropdown-menu" id="dropdown-cases">
          <a href="/case-studies/ent.php" class="dropdown-item">ENT</a>
          <a href="/case-studies/cardiology.php" class="dropdown-item">Cardiology</a>
          <a href="/case-studies/dentistry.php" class="dropdown-item">Dentistry</a>
          <a href="/case-studies/dermatology.php" class="dropdown-item">Dermatology</a>
          <a href="/case-studies/primary-care.php" class="dropdown-item">Primary Care</a>
          <a href="/case-studies/podiatry.php" class="dropdown-item">Podiatry</a>
          <a href="/case-studies/chiropractors.php" class="dropdown-item">Chiropractors</a>
          <a href="/case-studies/mental-health.php" class="dropdown-item">Mental Health</a>
          <a href="/case-studies/plastic-surgery.php" class="dropdown-item">Plastic Surgery</a>
          <a href="/case-studies/aesthetics.php" class="dropdown-item">Aesthetics</a>
          <a href="/case-studies/weight-loss-glp-1.php" class="dropdown-item">Weight Loss / GLP-1</a>
        </div>
      </div>

      <a href="/portfolio.php" class="nav-link <?= $currentPage === 'portfolio' ? 'active' : '' ?>">Portfolio</a>
    </nav>

    <!-- CTA -->
    <a href="/#demo" class="btn-primary btn-sm">Book a Demo</a>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="mobile-menu-btn" aria-label="Toggle menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" width="24" height="24">
        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Nav -->
  <div id="mobile-nav" class="mobile-nav">
    <div class="mobile-nav-inner">
      <div class="mobile-nav-group">
        <button class="mobile-nav-toggle" data-mobile-toggle="mobile-marketing">
          Marketing
          <svg class="mobile-arrow" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"/>
          </svg>
        </button>
        <div class="mobile-submenu" id="mobile-marketing">
          <a href="/website-design.php">Website Design</a>
          <a href="/paid-ads.php">Paid Advertising</a>
          <a href="/seo.php">SEO</a>
          <a href="/social-media.php">Social Media</a>
          <a href="/email-marketing.php">Email Marketing</a>
          <a href="/automation.php">Automation</a>
        </div>
      </div>

      <div class="mobile-nav-group">
        <button class="mobile-nav-toggle" data-mobile-toggle="mobile-cases">
          Case Studies
          <svg class="mobile-arrow" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"/>
          </svg>
        </button>
        <div class="mobile-submenu" id="mobile-cases">
          <a href="/case-studies/ent.php">ENT</a>
          <a href="/case-studies/cardiology.php">Cardiology</a>
          <a href="/case-studies/dentistry.php">Dentistry</a>
          <a href="/case-studies/dermatology.php">Dermatology</a>
          <a href="/case-studies/primary-care.php">Primary Care</a>
          <a href="/case-studies/podiatry.php">Podiatry</a>
          <a href="/case-studies/chiropractors.php">Chiropractors</a>
          <a href="/case-studies/mental-health.php">Mental Health</a>
          <a href="/case-studies/plastic-surgery.php">Plastic Surgery</a>
          <a href="/case-studies/aesthetics.php">Aesthetics</a>
          <a href="/case-studies/weight-loss-glp-1.php">Weight Loss / GLP-1</a>
        </div>
      </div>

      <a href="/portfolio.php" class="mobile-nav-link">Portfolio</a>
      <a href="/#demo" class="btn-primary" style="display:block;text-align:center;margin-top:1rem;">Book a Demo</a>
    </div>
  </div>
</header>
