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

<div class="page-head">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / Contact &amp; Enquiry</div>
    <h1>Open a Case With Our Team</h1>
    <p>Tell us about your portfolio or requirement — a relationship manager reviews every enquiry personally and replies within one business day.</p>
    <div class="file-no"><span class="file-no-dot"></span> CASE FILE NO. ENQ-06 · ACTIVE DESK</div>
  </div>
</div>

<section class="section-deep">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="form-panel">
        <div class="eyebrow">Client Enquiry Form</div>
        
        <?php if ($formSubmitted && $formSuccess): ?>
          <div class="alert-banner-success">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <div>
              <strong>Enquiry Filed Successfully!</strong><br>
              Thank you, <?php echo htmlspecialchars($name); ?>. Our relationship management team will reach out within one business day.
            </div>
          </div>
        <?php endif; ?>

        <?php if ($formSubmitted && !empty($formError)): ?>
          <div class="alert-banner-error">
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
              <label for="company">Company / Institution</label>
              <input type="text" id="company" name="company" placeholder="Bank / NBFC name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" required placeholder="+91 98xxxxxxxx" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
            </div>
            <div class="field">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="you@company.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>
          </div>
          <div class="field">
            <label for="service">Service Required</label>
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
            <label for="message">Brief Requirement</label>
            <textarea id="message" name="message" placeholder="Portfolio size, geography, bucket / DPD range, or any other context"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>
          <button type="submit" class="btn btn-brass" style="width:100%; justify-content:center;">Submit Case Enquiry</button>
          <p class="form-note">By submitting, you agree to be contacted regarding your enquiry. We do not share your data with third parties.</p>
          <div class="form-success"><span>✓</span> Enquiry filed — our team will reach out within one business day.</div>
        </form>
      </div>
    </div>
    <div class="reveal">
      <div class="eyebrow">Direct Lines</div>
      <h2 style="font-size:clamp(26px,3vw,34px); color:var(--ink);">Prefer to call or write in?</h2>
      <p style="margin-top:14px; font-size:16px; color:var(--paper-muted); line-height:1.7;">Our office is open Monday to Saturday. WhatsApp is monitored through the evening for urgent field-collection coordination.</p>
      <div style="display:flex; flex-direction:column; gap:20px; margin-top:28px;">
        <div class="panel" style="padding:24px;">
          <div class="lbl" style="font-family:var(--mono); font-size:11.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Phone &amp; WhatsApp</div>
          <div style="font-family:var(--serif); font-size:20px; margin-top:6px; font-weight:600;"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
        </div>
        <div class="panel" style="padding:24px;">
          <div class="lbl" style="font-family:var(--mono); font-size:11.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Email Address</div>
          <div style="font-family:var(--serif); font-size:20px; margin-top:6px; font-weight:600;"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
        </div>
        <div class="panel" style="padding:24px;">
          <div class="lbl" style="font-family:var(--mono); font-size:11.5px; color:var(--brass-deep); text-transform:uppercase; letter-spacing:.08em; font-weight:600;">Office Hours</div>
          <div style="font-family:var(--serif); font-size:20px; margin-top:6px; font-weight:600;"><?php echo OFFICE_HOURS; ?></div>
        </div>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn btn-outline" style="justify-content:center; border-color:var(--whatsapp); color:var(--verified);">Chat on WhatsApp →</a>
      </div>
    </div>
  </div>
</section>

<section class="section-paper">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Registered Office</div>
      <h2>Find us in Nehru Place</h2>
    </div>
    <div class="info-grid reveal">
      <div class="info-block">
        <div class="lbl">Office Address</div>
        <div class="val"><?php echo COMPANY_NAME; ?><br><?php echo OFFICE_ADDRESS; ?></div>
      </div>
      <div class="info-block">
        <div class="lbl">Phone &amp; WhatsApp</div>
        <div class="val"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
      </div>
      <div class="info-block">
        <div class="lbl">Email</div>
        <div class="val"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
      </div>
    </div>
    <div class="map-frame reveal">
      <iframe src="https://www.google.com/maps?q=Nehru%20Place%2C%20New%20Delhi&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Gurutma Financial Services office location"></iframe>
    </div>
  </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
