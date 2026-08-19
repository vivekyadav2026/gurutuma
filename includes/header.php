<?php
require_once __DIR__ . '/config.php';
$cssVersion = file_exists(__DIR__ . '/../styles.css') ? filemtime(__DIR__ . '/../styles.css') : time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle ?? COMPANY_NAME); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc ?? 'Gurutma Financial Services — Trusted Loan Sourcing, Collection & NPA Recovery.'); ?>">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Zilla+Slab:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=<?php echo $cssVersion; ?>">
</head>
<body>

<!-- Sticky Container (Top Bar + Main Nav Menu ONLY) -->
<div class="sticky-nav-wrapper">
  <!-- Top Utility Header -->
  <div class="top-bar">
    <div class="wrap top-bar-content">
      <div class="top-bar-left">
        <span class="top-info"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Azamgarh, Uttar Pradesh, India</span>
        <span class="top-divider">|</span>
        <span class="top-info"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> <?php echo EMAIL_ADDRESS; ?></span>
      </div>
      <div class="top-bar-right">
        <span class="badge-rbi"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> <?php echo RBI_COMPLIANT_TEXT; ?></span>
        <span class="top-divider">|</span>
        <a href="tel:<?php echo PHONE_RAW; ?>" class="top-phone"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> <?php echo PHONE_NUMBER; ?></a>
        <span class="top-divider">|</span>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="top-phone" style="color:var(--whatsapp);" title="Chat on WhatsApp">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> WhatsApp
        </a>
      </div>
    </div>
  </div>

  <!-- Main Site Header -->
  <header class="site-header">
    <nav class="nav">
      <a href="index.php" class="brand">
        <img src="assets/images/logo.png" alt="Gurutma Financial Services Logo" style="height:44px; width:auto; border-radius:4px; background:#ffffff; padding:2px; box-shadow:0 2px 8px rgba(0,0,0,0.15);">
        <span class="brand-text">
          <span class="brand-name"><?php echo COMPANY_SHORT; ?></span>
          <span class="brand-tag"><?php echo COMPANY_TAGLINE; ?></span>
        </span>
      </a>

      <div class="nav-links" id="nav-menu">
        <a href="index.php" class="<?php echo ($activePage === 'home') ? 'active' : ''; ?>">Home</a>
        <a href="about.php" class="<?php echo ($activePage === 'about') ? 'active' : ''; ?>">About Us</a>
        <a href="loan-sourcing.php" class="<?php echo ($activePage === 'loan-sourcing') ? 'active' : ''; ?>">Loan Sourcing</a>
        <a href="collection-services.php" class="<?php echo ($activePage === 'collection-services') ? 'active' : ''; ?>">Collections</a>
        <a href="npa-recovery.php" class="<?php echo ($activePage === 'npa-recovery') ? 'active' : ''; ?>">NPA Recovery</a>
        <a href="financial-recovery.php" class="<?php echo ($activePage === 'financial-recovery') ? 'active' : ''; ?>">Financial Solutions</a>
        <a href="field-collection.php" class="<?php echo ($activePage === 'field-collection') ? 'active' : ''; ?>">Field Collection</a>
        <a href="contact.php" class="nav-cta <?php echo ($activePage === 'contact') ? 'active' : ''; ?>">Contact Desk</a>
      </div>

      <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation menu">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
      </button>
    </nav>
  </header>
</div>

<!-- Non-Sticky Announcement Notice Banner Slider (Scrolls Away Naturally) -->
<div class="banner-slider" id="banner-slider">
  <div class="banner-track">
    <div class="banner-slide is-active">
      <span class="dot-lead">REGISTRATION</span>
      <span>Registered Entity · Registration Date: <?php echo REGISTRATION_DATE; ?> · Reg No. Azamgarh UP</span>
    </div>
    <div class="banner-slide">
      <span class="dot-lead">NOTICE 01</span>
      <span>Case-Numbered Audit Trail Enabled — Real-Time MIS Reporting Active for Partner Banks &amp; NBFCs.</span>
    </div>
    <div class="banner-slide">
      <span class="dot-lead">NOTICE 02</span>
      <span>RBI Fair Practices Code Compliant Operations across Sourcing &amp; Recovery Desks.</span>
    </div>
    <div class="banner-slide">
      <span class="dot-lead">NOTICE 03</span>
      <span>DRA Certified Field Collection Agents Available for Doorstep Visits across India.</span>
    </div>
  </div>
  <div class="banner-dots">
    <button class="active" aria-label="Slide 1"></button>
    <button aria-label="Slide 2"></button>
    <button aria-label="Slide 3"></button>
    <button aria-label="Slide 4"></button>
  </div>
</div>
