<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="brand">
          <img src="assets/images/logo.png" alt="Gurutma Financial Services Logo" style="height:42px; width:auto; border-radius:4px; background:#ffffff; padding:2px;">
          <span class="brand-text">
            <span class="brand-name" style="font-size:17px;"><?php echo COMPANY_SHORT; ?></span>
            <span class="brand-tag"><?php echo COMPANY_TAGLINE; ?></span>
          </span>
        </div>
        <p>
          Dedicated financial services partner providing reliable, transparent, and customer-centric financial solutions for individuals, entrepreneurs, and institutions across India.
        </p>
        <div style="margin-top:10px; font-family:var(--mono); font-size:11px; color:var(--brass);">
          GST Reg: <?php echo GST_NUMBER; ?>
        </div>
        <div class="social-row">
          <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg></a>
          <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
          <a href="<?php echo TWITTER_URL; ?>" target="_blank" rel="noopener" aria-label="Twitter"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
          <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener" aria-label="Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
        </div>
      </div>

      <div class="footer-col">
        <h5>Practice Areas</h5>
        <a href="loan-sourcing.php">Loan Sourcing</a>
        <a href="collection-services.php">Collection Services</a>
        <a href="npa-recovery.php">NPA Recovery</a>
        <a href="financial-recovery.php">Recovery Solutions</a>
        <a href="field-collection.php">Field Collection</a>
      </div>

      <div class="footer-col">
        <h5>Quick Links</h5>
        <a href="about.php">About the Firm</a>
        <a href="index.php#services">Service Register</a>
        <a href="index.php#process">Process Workflow</a>
        <a href="contact.php">File an Enquiry</a>
      </div>

      <div class="footer-col">
        <h5>Reach Us</h5>
        <a href="tel:<?php echo PHONE_RAW; ?>" class="footer-contact-link"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> <?php echo PHONE_NUMBER; ?></a>
        <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" class="footer-contact-link"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> <?php echo EMAIL_ADDRESS; ?></a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="footer-wa-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Chat on WhatsApp
        </a>
        <div style="font-size:12px; color:var(--dark-muted); margin-top:10px; line-height:1.4;">
          <?php echo OFFICE_ADDRESS; ?>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-copy">
        © <span id="year"><?php echo date('Y'); ?></span> <?php echo COMPANY_NAME; ?> All rights reserved.
      </div>
      <div class="footer-by">
        GST Reg: <?php echo GST_NUMBER; ?> · Reg Date: <?php echo REGISTRATION_DATE; ?>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Action Button -->
<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="wa-float" title="Chat with Gurutma Desk on WhatsApp" aria-label="Chat on WhatsApp">
  <span class="wa-pulse"></span>
  <svg width="32" height="32" viewBox="0 0 24 24" fill="#FFFFFF"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg>
</a>

<?php
$jsVersion = file_exists(__DIR__ . '/../script.js') ? filemtime(__DIR__ . '/../script.js') : time();
?>
<script src="script.js?v=<?php echo $jsVersion; ?>"></script>
</body>
</html>
