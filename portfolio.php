<?php
$pageTitle = 'Portfolio | Omulus AI — Healthcare Marketing Results';
$pageDescription = 'See real results from Omulus AI healthcare marketing campaigns — websites, ads, SEO, and practice growth.';
$currentPage = 'portfolio';
require_once 'includes/header.php';

$portfolio_items = [
  ['specialty' => 'Dermatology', 'practice' => 'ClearSkin Dermatology', 'location' => 'Austin, TX', 'result' => '+312% leads in 90 days', 'services' => ['Website', 'Paid Ads', 'SEO'], 'color' => '#146EF5'],
  ['specialty' => 'Dentistry', 'practice' => 'Bright Smile Dental Group', 'location' => 'Chicago, IL', 'result' => '4.6x consultation increase', 'services' => ['Website', 'Social Media', 'Email'], 'color' => '#766AA1'],
  ['specialty' => 'Plastic Surgery', 'practice' => 'Premier Aesthetics Center', 'location' => 'Miami, FL', 'result' => '-58% cost per lead', 'services' => ['Paid Ads', 'SEO', 'Automation'], 'color' => '#10B981'],
  ['specialty' => 'Weight Loss / GLP-1', 'practice' => 'Revive Medical Weight Loss', 'location' => 'Dallas, TX', 'result' => '+520% new patients', 'services' => ['Website', 'Paid Ads', 'Automation'], 'color' => '#F59E0B'],
  ['specialty' => 'Mental Health', 'practice' => 'Mindful Health Network', 'location' => 'Seattle, WA', 'result' => '3.9x booked sessions', 'services' => ['SEO', 'Social Media', 'Email'], 'color' => '#EC4899'],
  ['specialty' => 'Cardiology', 'practice' => 'HeartFirst Cardiology', 'location' => 'New York, NY', 'result' => '+275% qualified leads', 'services' => ['Website', 'Paid Ads'], 'color' => '#EF4444'],
];
?>

<div class="pt-header bg-white min-h-screen">
  <!-- Page Header -->
  <div class="gradient-bg section-py">
    <div class="container-custom text-center animate-on-scroll">
      <p class="section-eyebrow light">Our Work</p>
      <h1 class="hero-title">Results That Speak for Themselves</h1>
      <p class="section-subtitle light" style="max-width:600px;margin:0 auto;">
        Real practices. Real campaigns. Real growth. See what we've done for healthcare providers like you.
      </p>
    </div>
  </div>

  <!-- Stats Bar -->
  <div class="dark-section py-12">
    <div class="container-custom">
      <div class="results-grid" style="grid-template-columns: repeat(4,1fr);">
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text"><span data-target="500" data-suffix="+">500+</span></div>
          <p class="result-label">Practices Served</p>
        </div>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text"><span data-target="340" data-suffix="%">340%</span></div>
          <p class="result-label">Avg Lead Increase</p>
        </div>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text"><span data-target="52" data-suffix="%">52%</span></div>
          <p class="result-label">Lower Cost/Lead</p>
        </div>
        <div class="text-center animate-on-scroll">
          <div class="result-value gradient-text"><span data-target="20" data-suffix="+">20+</span></div>
          <p class="result-label">Specialties</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Grid -->
  <div class="section-py bg-gray-50">
    <div class="container-custom">
      <div class="services-grid">
        <?php foreach ($portfolio_items as $item): ?>
        <div class="card portfolio-card animate-on-scroll">
          <div class="portfolio-header" style="background:<?= $item['color'] ?>15;border-bottom:3px solid <?= $item['color'] ?>">
            <div class="portfolio-icon" style="background:<?= $item['color'] ?>;color:#fff;font-size:1.25rem;font-weight:800">
              <?= strtoupper(substr($item['specialty'], 0, 2)) ?>
            </div>
            <div>
              <h3 style="margin:0;font-size:1.1rem"><?= htmlspecialchars($item['practice']) ?></h3>
              <p style="margin:0;color:#6b7280;font-size:0.875rem"><?= htmlspecialchars($item['location']) ?></p>
            </div>
          </div>
          <div style="padding:1.5rem">
            <p class="portfolio-specialty"><?= htmlspecialchars($item['specialty']) ?></p>
            <p class="portfolio-result" style="color:<?= $item['color'] ?>"><?= htmlspecialchars($item['result']) ?></p>
            <div class="portfolio-tags">
              <?php foreach ($item['services'] as $service): ?>
                <span class="portfolio-tag"><?= htmlspecialchars($service) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center" style="margin-top:3rem;">
        <p style="color:#6b7280;margin-bottom:1.5rem">Ready to be our next success story?</p>
        <a href="/#demo" class="btn-primary px-10 py-4">Book a Free Demo</a>
      </div>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
