      <div class="footer-bottom">
      <div class="footer-copy">
        © <span id="year"><?php echo date('Y'); ?></span> <?php echo COMPANY_NAME; ?> All rights reserved.
      </div>
      <div class="footer-by">
        Registered Entity · Est. <?php echo COMPANY_ESTABLISHED; ?>
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
