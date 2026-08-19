<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "About Us | " . COMPANY_NAME;
$pageDesc = "Learn about Gurutma Financial Services Pvt. Ltd. — registered financial services firm specializing in loan sourcing, collections, and NPA recovery for banks and NBFCs.";
$activePage = "about";

include 'includes/header.php';
?>

<main>

<!-- PAGE HEAD BANNER -->
<div class="page-head">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / About Us</div>
    <h1>About Gurutma Financial Services</h1>
    <p>A registered financial services partner providing end-to-end loan sourcing, portfolio collection, and NPA recovery for banks and NBFCs across India.</p>
    <div class="file-no"><span class="file-no-dot"></span> CASE FILE NO. AB-00 · REGISTERED FIRM PROFILE</div>
  </div>
</div>

<!-- SECTION 1: FIRM OVERVIEW & HERITAGE -->
<section class="section-paper ruled">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="eyebrow">Company Profile</div>
      <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">Built for accountability at scale</h2>
      <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        <strong>Gurutma Financial Services Pvt. Ltd.</strong> was established to solve a critical operational challenge for India’s lending ecosystem: bridging the gap between aggressive portfolio growth and disciplined, compliant credit &amp; recovery management.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        We function as an institutional extension of your back office. Every loan sourcing file, tele-calling bucket, and doorstep recovery case assigned to us is logged with a unique case file number, tracked under strict SLA guidelines, and reported with complete transparency.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Our teams operate with strict adherence to the <strong>RBI Fair Practices Code</strong>, ensuring that your brand reputation and borrower relationships remain protected at every customer touchpoint.
      </p>

      <div class="eyebrow" style="margin-top:24px;">Core Operational Principles</div>
      <ul class="check-list">
        <li>RBI Fair Practices Code followed on every outreach and field visit</li>
        <li>100% case-numbered audit trail for complete regulatory peace of mind</li>
        <li>Background-verified, DRA-trained field agents and tele-calling representatives</li>
        <li>Dedicated Relationship Manager assigned to every lending partner desk</li>
        <li>Daily MIS and bucket-movement reporting delivered to your credit team</li>
      </ul>
    </div>

    <div class="reveal">
      <div class="hero-image-card" style="margin-bottom:20px;">
        <img src="assets/images/hero-office.png" alt="Gurutma Financial Services Executive Office" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">REGISTERED HEADQUARTERS</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">Azamgarh, Uttar Pradesh</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● Registered Entity</span>
        </div>
      </div>

      <div class="panel">
        <div class="eyebrow">Corporate Registration Details</div>
        <div style="display:flex; flex-direction:column; gap:14px; margin-top:6px;">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Entity Name</div>
            <div style="font-family:var(--serif); font-size:16.5px; margin-top:2px; font-weight:600; color:var(--ink);"><?php echo COMPANY_NAME; ?></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Registration Date</div>
            <div style="font-family:var(--serif); font-size:16.5px; margin-top:2px; font-weight:600; color:var(--ink);"><?php echo REGISTRATION_DATE; ?></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Registered Office Address</div>
            <div style="font-family:var(--serif); font-size:15px; margin-top:2px; font-weight:600; color:var(--ink); line-height:1.45;"><?php echo OFFICE_ADDRESS; ?></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Direct Phone &amp; WhatsApp</div>
            <div style="font-family:var(--serif); font-size:16px; margin-top:2px; font-weight:600;"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Official Support Email</div>
            <div style="font-family:var(--serif); font-size:16px; margin-top:2px; font-weight:600;"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
          </div>
          <span class="stamp-note verified" style="margin-top:4px;">● Fully Registered &amp; Verified</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: WHY PARTNER WITH US (DARK SECTION) -->
<section class="section-dark">
  <div class="wrap">
    <div class="two-col" style="margin-bottom:24px; align-items:center;">
      <div class="section-head reveal" style="margin-bottom:0;">
        <div class="eyebrow on-dark">Institutional Standards</div>
        <h2>Why top financial institutions choose Gurutma</h2>
        <p>We treat sourcing and collections as an auditable discipline. Every step is backed by strict compliance, trained staff, and daily MIS transparency.</p>
      </div>
      <div class="reveal">
        <div class="service-image-panel" style="margin-bottom:0; border-color:var(--ink-line); border-radius:12px;">
          <img src="assets/images/compliance-trust.png" alt="Official Compliance &amp; Regulatory Audit Ledger" loading="lazy">
        </div>
      </div>
    </div>

    <div class="feature-grid reveal">
      <div class="feature-card">
        <div class="feature-card-num">1</div>
        <h4>End-to-End Case Tracking</h4>
        <p>Each assigned file gets a case number, owner, and live status logged in our operational system.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">2</div>
        <h4>RBI Fair Conduct Guidelines</h4>
        <p>Field and tele-calling conduct follows statutory guidelines, protecting partner bank reputation.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">3</div>
        <h4>PAN-India Field Network</h4>
        <p>Background-verified field agents enable prompt doorstep verification and notice serving on schedule.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">4</div>
        <h4>Real-Time MIS &amp; Analytics</h4>
        <p>Daily call logs, collection percentages, and ageing MIS land directly in your credit inbox.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">5</div>
        <h4>DRA-Trained Workforce</h4>
        <p>Staff undergo rigorous background verification and ethical conduct training before handling client files.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">6</div>
        <h4>Flexible Portfolio Desk</h4>
        <p>Engage us for early bucket tele-calling, mid-bucket field visits, or specialized NPA recovery drives.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: RELATIONSHIP DESK & CONSULTATION -->
<section class="section-paper">
  <div class="wrap two-col" style="align-items:center;">
    <div class="reveal">
      <div class="service-image-panel" style="margin-bottom:0;">
        <img src="assets/images/relationship-manager.png" alt="Dedicated Bank Relationship Management Consultation Desk" loading="lazy">
      </div>
    </div>
    <div class="reveal">
      <div class="eyebrow">Partner Desk</div>
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">A dedicated relationship manager for your institution</h2>
      <p style="margin-top:12px; font-size:15.5px; color:var(--paper-muted); line-height:1.65;">
        We don't route partner banks through anonymous support tickets. When you partner with Gurutma Financial Services, a senior Relationship Manager is assigned to your account to coordinate daily file handovers, custom MIS formats, and urgent field escalations.
      </p>
      <div style="margin-top:20px; display:flex; gap:12px; flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-primary">Open Partner Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20partnering%20with%20Gurutma" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Direct WhatsApp Desk
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<div class="cta-band">
  <div class="wrap">
    <div>
      <h3>Ready to discuss your portfolio requirement?</h3>
      <p>Connect with our senior desk to review sourcing capabilities or recovery strategies.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">File an Enquiry →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
