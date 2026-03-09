<?php
// Variables required: $serviceName, $serviceTagline, $serviceDescription, $serviceFeatures[], $serviceStats[]
// $serviceName, $serviceTagline, $serviceDescription, $serviceFeatures, $serviceStats
require_once __DIR__ . '/header.php';
?>

<div class="pt-header bg-white min-h-screen">
  <!-- Hero -->
  <div class="gradient-bg section-py">
    <div class="container-custom">
      <div style="max-width:700px;margin:0 auto;text-align:center;" class="animate-on-scroll">
        <p class="section-eyebrow light">Our Services</p>
        <h1 class="hero-title"><?= htmlspecialchars($serviceName) ?></h1>
        <p class="section-subtitle light"><?= htmlspecialchars($serviceTagline) ?></p>
        <div style="margin-top:2rem;display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="/#demo" class="btn-white">Book a Free Demo</a>
          <a href="/portfolio.php" class="btn-outline-white">See Our Work</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Stats -->
  <?php if (!empty($serviceStats)): ?>
  <div class="dark-section py-12">
    <div class="container-custom">
      <div class="results-grid" style="grid-template-columns:repeat(<?= count($serviceStats) ?>,1fr);">
        <?php foreach ($serviceStats as $stat): ?>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text"><?= htmlspecialchars($stat['value']) ?></div>
          <p class="result-label"><?= htmlspecialchars($stat['label']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Description -->
  <div class="section-py bg-white">
    <div class="container-custom">
      <div style="max-width:800px;margin:0 auto;" class="animate-on-scroll">
        <h2 style="font-size:2rem;font-weight:800;color:#111827;margin-bottom:1.5rem;text-align:center;">
          Why <?= htmlspecialchars($serviceName) ?> Matters for Your Practice
        </h2>
        <p style="color:#4b5563;font-size:1.125rem;line-height:1.8;text-align:center;">
          <?= htmlspecialchars($serviceDescription) ?>
        </p>
      </div>

      <!-- Features -->
      <?php if (!empty($serviceFeatures)): ?>
      <div class="services-grid" style="margin-top:3rem;">
        <?php foreach ($serviceFeatures as $feature): ?>
        <div class="card animate-on-scroll" style="padding:2rem;">
          <div class="service-icon"><?= $feature['icon'] ?></div>
          <h3><?= htmlspecialchars($feature['title']) ?></h3>
          <p><?= htmlspecialchars($feature['desc']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- CTA -->
  <div class="gradient-bg section-py">
    <div class="container-custom text-center animate-on-scroll">
      <h2 class="section-title light">Ready to Grow with <?= htmlspecialchars($serviceName) ?>?</h2>
      <p class="section-subtitle light">Book a free strategy session and we'll build a custom plan for your practice.</p>
      <div style="margin-top:2rem;">
        <a href="/#demo" class="btn-white">Book a Free Demo</a>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
