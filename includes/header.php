<?php
if (!isset($pageTitle)) {
    $pageTitle = "Gurutma Financial Services Pvt. Ltd. | Loan Sourcing, Collection & NPA Recovery";
}
if (!isset($pageDesc)) {
    $pageDesc = "Gurutma Financial Services Pvt. Ltd. — trusted loan sourcing, collection, NPA recovery and field collection services for banks and NBFCs across India.";
}
if (!isset($activePage)) {
    $activePage = "home";
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Zilla+Slab:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Top Utility Header -->
<div class="top-bar">
  <div class="wrap top-bar-content">
    <div class="top-bar-left">
      <span class="top-info"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Nehru Place, New Delhi, India</span>
      <span class="top-divider">|</span>
      <span class="top-info"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> info@gurutmafinancial.com</span>
    </div>
    <div class="top-bar-right">
      <span class="badge-rbi"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> RBI Fair Practices Code Compliant</span>
      <span class="top-divider">|</span>
      <a href="tel:+919810000000" class="top-phone"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +91 98100 00000</a>
    </div>
  </div>
</div>

<!-- Main Site Header -->
<header class="site-header">
  <nav class="nav">
    <a href="index.php" class="brand">
      <span class="brand-mark">G</span>
      <span class="brand-text">
        <span class="brand-name">Gurutma</span>
        <span class="brand-tag">Financial Services Pvt. Ltd.</span>
      </span>
    </a>
    <ul class="nav-links" id="navLinks">
      <li><a href="index.php" class="<?php echo ($activePage === 'home') ? 'active' : ''; ?>">Home</a></li>
      <li><a href="loan-sourcing.php" class="<?php echo ($activePage === 'loan-sourcing') ? 'active' : ''; ?>">Loan Sourcing</a></li>
      <li><a href="collection-services.php" class="<?php echo ($activePage === 'collection-services') ? 'active' : ''; ?>">Collection Services</a></li>
      <li><a href="npa-recovery.php" class="<?php echo ($activePage === 'npa-recovery') ? 'active' : ''; ?>">NPA Recovery</a></li>
      <li><a href="financial-recovery.php" class="<?php echo ($activePage === 'financial-recovery') ? 'active' : ''; ?>">Recovery Solutions</a></li>
      <li><a href="field-collection.php" class="<?php echo ($activePage === 'field-collection') ? 'active' : ''; ?>">Field Collection</a></li>
      <li><a href="contact.php" class="nav-cta <?php echo ($activePage === 'contact') ? 'active-cta' : ''; ?>">Enquire Now</a></li>
    </ul>
    <button class="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
      <span class="hamburger-bar"></span>
      <span class="hamburger-bar"></span>
      <span class="hamburger-bar"></span>
    </button>
  </nav>
</header>
