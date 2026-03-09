<?php
// Required: $specialtySlug, $specialtyName set before including this file
$pageTitle = $specialtyName . ' Marketing Case Studies | Omulus AI';
$pageDescription = 'See how Omulus AI has helped ' . $specialtyName . ' practices grow with digital marketing, paid ads, SEO, and practice management software.';
$currentPage = 'case-studies';
require_once __DIR__ . '/header.php';
?>

<div class="pt-header bg-white min-h-screen">
  <!-- Hero -->
  <div class="gradient-bg section-py">
    <div class="container-custom text-center animate-on-scroll">
      <p class="section-eyebrow light">Case Studies</p>
      <h1 class="hero-title"><?= htmlspecialchars($specialtyName) ?> Marketing</h1>
      <p class="section-subtitle light" style="max-width:600px;margin:0 auto;">
        How Omulus AI drives growth for <?= htmlspecialchars($specialtyName) ?> practices across the country.
      </p>
    </div>
  </div>

  <!-- Stats -->
  <div class="dark-section py-12">
    <div class="container-custom">
      <div class="results-grid" style="grid-template-columns:repeat(3,1fr);">
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text">340%</div>
          <p class="result-label">Average Lead Increase</p>
        </div>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text">52%</div>
          <p class="result-label">Cost Reduction</p>
        </div>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text">4.8x</div>
          <p class="result-label">Booked Consultations</p>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="section-py bg-white">
    <div class="container-custom">
      <div style="max-width:700px;margin:0 auto;text-align:center;" class="animate-on-scroll">
        <h2 style="font-size:1.875rem;font-weight:800;color:#111827;margin-bottom:1rem;">
          Want results like these for your <?= htmlspecialchars($specialtyName) ?> practice?
        </h2>
        <p style="color:#6b7280;margin-bottom:2rem;">
          Book a free strategy demo and we'll show you exactly how we'd grow your practice.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="/#demo" class="btn-primary px-8 py-4">Book a Free Demo</a>
          <a href="/portfolio.php" class="btn-secondary px-8 py-4">See Our Portfolio</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
