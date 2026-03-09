<?php
if (!defined('SITE_BASE')) {
    $docRoot = rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/');
    $appDir  = rtrim(str_replace('\\', '/', realpath(dirname(__DIR__))), '/');
    define('SITE_BASE', str_replace($docRoot, '', $appDir));
}
$b = SITE_BASE;
?>
<footer class="site-footer">
  <!-- CTA Banner -->
  <div class="footer-cta gradient-bg">
    <div class="container-custom footer-cta-inner animate-on-scroll">
      <div class="footer-cta-text">
        <h2>Ready to grow your practice?</h2>
        <p>Join hundreds of practices already scaling with Omulus AI.</p>
      </div>
      <a href="<?= $b ?>/#demo" class="btn-white">Book a Free Demo</a>
    </div>
  </div>

  <div class="footer-body">
    <div class="container-custom footer-grid">
      <div class="footer-brand">
        <a href="<?= $b ?>/" class="logo" style="margin-bottom:16px;display:inline-flex;">
          <span class="logo-icon">O</span>
          <span class="logo-text" style="color:#fff;">Omulus<span class="logo-dot">.AI</span></span>
        </a>
        <p class="footer-tagline">Healthcare marketing powered by AI. We help practices grow with smarter marketing and intelligent automation.</p>
        <p class="footer-copy">&copy; <?= date('Y') ?> Omulus AI. All rights reserved.</p>
      </div>

      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?= $b ?>/website-design.php">Website Design</a></li>
          <li><a href="<?= $b ?>/paid-ads.php">Paid Advertising</a></li>
          <li><a href="<?= $b ?>/seo.php">SEO</a></li>
          <li><a href="<?= $b ?>/social-media.php">Social Media</a></li>
          <li><a href="<?= $b ?>/email-marketing.php">Email Marketing</a></li>
          <li><a href="<?= $b ?>/automation.php">Automation</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Specialties</h4>
        <ul>
          <li><a href="<?= $b ?>/case-studies/dentistry.php">Dentistry</a></li>
          <li><a href="<?= $b ?>/case-studies/dermatology.php">Dermatology</a></li>
          <li><a href="<?= $b ?>/case-studies/cardiology.php">Cardiology</a></li>
          <li><a href="<?= $b ?>/case-studies/mental-health.php">Mental Health</a></li>
          <li><a href="<?= $b ?>/case-studies/plastic-surgery.php">Plastic Surgery</a></li>
          <li><a href="<?= $b ?>/case-studies/weight-loss-glp-1.php">Weight Loss / GLP-1</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="<?= $b ?>/terms-and-conditions.php">Terms &amp; Conditions</a></li>
          <li><a href="<?= $b ?>/privacy-policy.php">Privacy Policy</a></li>
          <li><a href="<?= $b ?>/accessibility-statement.php">Accessibility</a></li>
          <li><a href="<?= $b ?>/portfolio.php">Portfolio</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script src="<?= $b ?>/assets/js/main.js"></script>
</body>
</html>
