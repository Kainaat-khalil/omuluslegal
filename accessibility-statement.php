<?php
$pageTitle = 'Accessibility Statement | Omulus AI';
$pageDescription = 'Omulus AI is committed to digital accessibility for all users.';
$currentPage = 'accessibility';
require_once 'includes/header.php';
?>

<div class="legal-page-wrap">
  <div class="legal-hero gradient-bg">
    <div class="container-custom text-center">
      <h1>Accessibility Statement</h1>
      <p>Last Updated: <?= date('F j, Y') ?></p>
    </div>
  </div>

  <div class="container-custom legal-content">

    <p>
      Omulus AI, LLC is committed to ensuring digital accessibility for people with disabilities.
      We continually improve the user experience for everyone and apply relevant accessibility
      standards to our website.
    </p>

    <h2>Our Commitment</h2>
    <p>
      We strive to meet the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.
      These guidelines explain how to make web content more accessible to people with disabilities,
      including users who rely on screen readers, keyboard navigation, or other assistive technologies.
    </p>

    <h2>Measures Taken</h2>
    <p>We take the following measures to ensure accessibility:</p>
    <ul>
      <li>Use of semantic HTML to support screen readers</li>
      <li>Sufficient color contrast ratios for all text</li>
      <li>Keyboard navigation support throughout the Site</li>
      <li>Alt text provided for all meaningful images</li>
      <li>Form fields labeled and accessible</li>
      <li>Focus indicators visible for keyboard users</li>
      <li>Resizable text without loss of content or functionality</li>
    </ul>

    <h2>Known Limitations</h2>
    <p>
      While we strive for full accessibility, some third-party content or embedded tools may not
      meet all accessibility standards. We are working with our vendors to address these limitations.
    </p>

    <h2>Feedback &amp; Contact</h2>
    <p>
      We welcome feedback on the accessibility of our website. If you experience any barriers to
      access or have suggestions for improvement, please contact us:
    </p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:support@omulus.ai">support@omulus.ai</a></li>
      <li><strong>Phone:</strong> <a href="tel:+18001234567">(800) 123-4567</a></li>
    </ul>
    <p>We aim to respond to accessibility feedback within 2 business days.</p>

    <h2>Formal Complaints</h2>
    <p>
      If you are not satisfied with our response, you may contact the relevant national authority
      responsible for accessibility compliance in your jurisdiction.
    </p>

  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
