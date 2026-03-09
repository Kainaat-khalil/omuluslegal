<?php
$pageTitle = 'Case Studies | Omulus AI — Healthcare Marketing Results';
$pageDescription = 'See Omulus AI case studies across 20+ medical specialties. Real growth results for real practices.';
$currentPage = 'case-studies';
require_once '../includes/header.php';

$specialties = [
  ['slug' => 'ent', 'name' => 'ENT', 'icon' => '👂'],
  ['slug' => 'cardiology', 'name' => 'Cardiology', 'icon' => '❤️'],
  ['slug' => 'dentistry', 'name' => 'Dentistry', 'icon' => '🦷'],
  ['slug' => 'dermatology', 'name' => 'Dermatology', 'icon' => '🧬'],
  ['slug' => 'primary-care', 'name' => 'Primary Care', 'icon' => '🏥'],
  ['slug' => 'podiatry', 'name' => 'Podiatry', 'icon' => '🦶'],
  ['slug' => 'chiropractors', 'name' => 'Chiropractors', 'icon' => '🦴'],
  ['slug' => 'mental-health', 'name' => 'Mental Health', 'icon' => '🧠'],
  ['slug' => 'plastic-surgery', 'name' => 'Plastic Surgery', 'icon' => '✨'],
  ['slug' => 'aesthetics', 'name' => 'Aesthetics', 'icon' => '💎'],
  ['slug' => 'weight-loss-glp-1', 'name' => 'Weight Loss / GLP-1', 'icon' => '⚡'],
];
?>

<div class="pt-header bg-white min-h-screen">
  <div class="gradient-bg section-py">
    <div class="container-custom text-center animate-on-scroll">
      <p class="section-eyebrow light">Case Studies</p>
      <h1 class="hero-title">Results Across Every Specialty</h1>
      <p class="section-subtitle light" style="max-width:600px;margin:0 auto;">
        We've helped practices in 20+ specialties grow faster with AI-powered marketing.
      </p>
    </div>
  </div>

  <div class="section-py bg-white">
    <div class="container-custom">
      <div class="services-grid">
        <?php foreach ($specialties as $s): ?>
        <a href="/case-studies/<?= $s['slug'] ?>.php" class="service-card animate-on-scroll" style="text-decoration:none;">
          <div style="font-size:2.5rem;margin-bottom:1rem;"><?= $s['icon'] ?></div>
          <h3><?= htmlspecialchars($s['name']) ?></h3>
          <p>See how we grow <?= htmlspecialchars($s['name']) ?> practices with targeted digital marketing.</p>
          <span class="service-link">View case study →</span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php require_once '../includes/footer.php'; ?>
