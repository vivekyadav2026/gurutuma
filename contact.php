<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "Contact & Enquiry | " . COMPANY_NAME;
$pageDesc = "Get in touch with " . COMPANY_NAME . " for loan sourcing, collection and NPA recovery enquiries.";
$activePage = "contact";

$formSubmitted = false;
$formSuccess = false;
$formError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formSubmitted = true;
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    if (!empty($name) && !empty($phone)) {
        $formSuccess = true;
    } else {
        $formError = "Please fill in all required fields (Name and Phone Number).";
    }
}

include 'includes/header.php';
?>

<main>

<!-- PREMIUM EXECUTIVE HERO BANNER -->
<section class="about-hero-banner">
  <div class="wrap about-hero-grid">
    <div class="about-hero-text reveal">
      <div class="crumb"><a href="index.php">Home</a> / Contact &amp; Enquiry</div>
      <div class="file-no" style="margin-bottom:14px;"><span class="file-no-dot"></span> CASE FILE NO. ENQ-06 · ACTIVE CONTACT DESK</div>
      <h1>Open a Case With Our <em>Relationship Management Team</em></h1>
      <p class="about-hero-lead">
        Tell us about your portfolio or service requirement — a dedicated relationship manager reviews every enquiry personally and responds within 1 business day.
      </p>
      
      <div class="about-hero-pills">
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          SLA &lt; 1 Business Day
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          🔒 256-bit Confidential
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Direct WhatsApp Desk
        </span>
      </div>

      <div class="about-hero-actions">
        <a href="#enquiry-form" class="btn btn-brass">Fill Case Enquiry Form ↓</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20connect%20with%20Gurutma%20Desk" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Instant WhatsApp
        </a>
      </div>
    </div>

    <!-- RIGHT HERO MEDIA SHOWCASE -->
    <div class="about-hero-media reveal">
      <div class="hero-image-card">
        <img src="assets/images/relationship-manager.png" alt="Corporate Relationship Manager Desk" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">RELATIONSHIP DESK</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">Institutional Consultation</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● SLA &lt; 1 Day</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="section-deep">
  <div class="wrap two-col" style="align-items:center;">
    <!-- Dark Executive Form Desk -->
    <div class="reveal">
      <div class="form-panel-dark">
        <div class="form-panel-header">
          <h4>Case Filing Desk</h4>
          <span style="font-family:var(--mono); font-size:10px; color:var(--verified); background:var(--verified-light); padding:2px 8px; border-radius:4px; border:1px solid var(--verified); font-weight:700;">🔒 256-bit Encrypted</span>
        </div>

        <?php if ($formSubmitted && $formSuccess): ?>
          <div class="alert-banner-success" style="margin-bottom:14px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <div>
              <strong>Enquiry Filed Successfully!</strong><br>
              Thank you, <?php echo htmlspecialchars($name); ?>. Our relationship management team will reach out within 1 business day.
            </div>
          </div>
        <?php endif; ?>

        <?php if ($formSubmitted && !empty($formError)): ?>
          <div class="alert-banner-error" style="margin-bottom:14px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <div><?php echo htmlspecialchars($formError); ?></div>
          </div>
        <?php endif; ?>

        <form id="enquiry-form" action="contact.php" method="POST">
          <div class="form-row">
            <div class="field">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" required placeholder="Your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
            </div>
            <div class="field">
              <label for="company">Institution Name</label>
              <input type="text" id="company" name="company" placeholder="Bank / NBFC name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" required placeholder="+91 73900 40402" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
            </div>
            <div class="field">
              <label for="email">Work Email</label>
              <input type="email" id="email" name="email" placeholder="you@company.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>
          </div>
          <div class="field">
            <label for="service">Practice Area Required</label>
            <select id="service" name="service">
              <option <?php echo (($_POST['service'] ?? '') === 'Loan Sourcing Services') ? 'selected' : ''; ?>>Loan Sourcing Services</option>
              <option <?php echo (($_POST['service'] ?? '') === 'Collection Services') ? 'selected' : ''; ?>>Collection Services</option>
              <option <?php echo (($_POST['service'] ?? '') === 'NPA Collection & Recovery') ? 'selected' : ''; ?>>NPA Collection &amp; Recovery</option>
              <option <?php echo (($_POST['service'] ?? '') === 'Financial Recovery Solutions') ? 'selected' : ''; ?>>Financial Recovery Solutions</option>
              <option <?php echo (($_POST['service'] ?? '') === 'Field Collection Services') ? 'selected' : ''; ?>>Field Collection Services</option>
              <option <?php echo (($_POST['service'] ?? '') === 'Not sure — advise me') ? 'selected' : ''; ?>>Not sure — advise me</option>
            </select>
          </div>
          <div class="field">
            <label for="message">Requirement Details</label>
            <textarea id="message" name="message" placeholder="Portfolio size, location geography, bucket/DPD range or specific goals"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>
          <button type="submit" class="btn btn-brass" style="width:100%; justify-content:center; margin-top:4px;">Submit Case File Enquiry →</button>
          <p class="form-note" style="color:var(--dark-muted); font-size:11px; margin-top:8px;">By submitting, you agree to be contacted regarding your enquiry under strict NDA terms.</p>
        </form>
      </div>
    </div>

    <!-- Direct Lines Panel & Image -->
    <div class="reveal">
      <div class="service-image-panel">
        <img src="assets/images/relationship-manager.png" alt="Corporate Relationship Manager Desk" loading="lazy">
      </div>
      <div class="eyebrow">Direct Contact Lines</div>
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">Prefer a direct call or email?</h2>
      <p style="margin-top:10px; font-size:15.5px; color:var(--paper-muted); line-height:1.65;">Our office desk operates Monday to Saturday. Direct WhatsApp desk is active for urgent field collection &amp; sourcing updates.</p>
      
      <div style="display:flex; flex-direction:column; gap:12px; margin-top:16px;">
        <div class="panel" style="padding:16px 20px;">
          <div class="lbl" style="font-family:var(--mono); font-size:10.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Direct Phone Line</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:2px; font-weight:600;"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
        </div>
        <div class="panel" style="padding:16px 20px;">
          <div class="lbl" style="font-family:var(--mono); font-size:10.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Official Support Email</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:2px; font-weight:600;"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
        </div>
        <div class="panel" style="padding:16px 20px;">
          <div class="lbl" style="font-family:var(--mono); font-size:10.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Working Desk Hours</div>
          <div style="font-family:var(--serif); font-size:17px; margin-top:2px; font-weight:600;"><?php echo OFFICE_HOURS; ?></div>
        </div>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn btn-wa" style="justify-content:center;">Chat Direct on WhatsApp →</a>
      </div>
    </div>
  </div>
</section>

<!-- REGISTERED HEADQUARTERS LOCATION -->
<section class="section-paper">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Registered Headquarters</div>
      <h2>Registered office in Azamgarh, Uttar Pradesh</h2>
      <p>Visit or send correspondence to our registered corporate address.</p>
    </div>
    
    <div class="info-grid reveal">
      <div class="info-block">
        <div class="lbl">Registered Address</div>
        <div class="val" style="margin-top:6px; font-size:15px; line-height:1.45;"><?php echo COMPANY_NAME; ?><br><?php echo OFFICE_ADDRESS; ?></div>
        <div style="margin-top:12px;"><span class="stamp-note verified" style="font-size:9.5px;">● Reg Date: <?php echo REGISTRATION_DATE; ?></span></div>
      </div>
      <div class="info-block">
        <div class="lbl">Phone &amp; WhatsApp</div>
        <div class="val" style="margin-top:6px;"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
        <div style="margin-top:12px;">
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20connect%20with%20Gurutma%20Desk" target="_blank" rel="noopener" class="footer-wa-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Instant WhatsApp Connect
          </a>
        </div>
      </div>
      <div class="info-block">
        <div class="lbl">Email Support</div>
        <div class="val" style="margin-top:6px;"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
        <div style="margin-top:12px; font-family:var(--mono); font-size:11px; color:var(--paper-muted);">SLA: &lt; 1 Business Day</div>
      </div>
    </div>

    <div class="map-frame reveal">
      <iframe src="https://www.google.com/maps?q=Bhairav+Baba+Road,+Pasipur,+Maharajganj,+Azamgarh,+Uttar+Pradesh+276137&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Gurutma Financial Services office location"></iframe>
    </div>
  </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
