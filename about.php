<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "About Us | " . COMPANY_NAME;
$pageDesc = "Learn about Gurutma Financial Services Pvt. Ltd. — Vision, Mission, Commitment, and GST Registered Financial Services Partner.";
$activePage = "about";

include 'includes/header.php';
?>

<main>

<!-- PAGE HEAD BANNER -->
<div class="page-head">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / About Us</div>
    <h1>About Gurutma Financial Services</h1>
    <p><?php echo COMPANY_ABOUT_TEXT; ?></p>
    <div class="file-no"><span class="file-no-dot"></span> GST REGISTRATION: <?php echo GST_NUMBER; ?> · REGISTERED CORPORATE PROFILE</div>
  </div>
</div>

<!-- SECTION 1: FIRM OVERVIEW & HERITAGE -->
<section class="section-paper ruled">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="eyebrow">Company Overview</div>
      <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">Empowering Goals Through Transparent Financial Solutions</h2>
      <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        <strong>Gurutma Financial Services Pvt. Ltd.</strong> is a dedicated financial services company focused on providing reliable, transparent, and customer-centric financial solutions to individuals, entrepreneurs, and businesses.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        We aim to bridge the gap between customers and financial institutions by offering a comprehensive range of financial products, sourcing capabilities, collection management, and professional advisory services.
      </p>

      <div class="eyebrow" style="margin-top:24px;">Our Core Commitment</div>
      <div style="background:linear-gradient(135deg, var(--brass-tint), #FFFFFF); border:1.5px solid var(--brass); padding:18px 20px; border-radius:var(--radius-md); margin-top:8px;">
        <p style="font-size:15.5px; color:var(--ink); line-height:1.6; font-weight:600; font-family:var(--serif);">
          "<?php echo COMPANY_COMMITMENT; ?>"
        </p>
      </div>

      <div class="about-feature-grid" style="margin-top:20px;">
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Transparent &amp; Customer-Centric Desk</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> RBI Fair Practices Code Compliance</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> GST Registered Entity (09AANCG1128P1Z3)</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Reliable Financial Advisory &amp; Sourcing</div>
      </div>
    </div>

    <!-- Corporate Particulars Card -->
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

      <div class="about-details-card">
        <div class="eyebrow on-dark" style="margin-bottom:10px;">Corporate Registration Details</div>
        <div class="about-details-row">
          <div class="about-details-item">
            <div class="about-details-label">Full Legal Entity</div>
            <div class="about-details-val"><?php echo COMPANY_NAME; ?></div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">GST Registration Number</div>
            <div class="about-details-val" style="color:var(--brass); font-family:var(--mono);"><?php echo GST_NUMBER; ?></div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Registration Date</div>
            <div class="about-details-val"><?php echo REGISTRATION_DATE; ?></div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Registered Office</div>
            <div class="about-details-val" style="font-size:14px; line-height:1.4;"><?php echo OFFICE_ADDRESS; ?></div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Support Email &amp; Phone</div>
            <div class="about-details-val" style="font-size:14px;"><?php echo EMAIL_ADDRESS; ?> · <?php echo PHONE_NUMBER; ?></div>
          </div>
        </div>
        <div style="margin-top:16px;">
          <span class="stamp-note verified" style="font-size:10px;">● GST Registered &amp; Verified</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: VISION & MISSION SHOWCASE -->
<section class="section-deep">
  <div class="wrap">
    <div class="section-head reveal" style="max-width:760px; margin-bottom:32px;">
      <div class="eyebrow">Strategic Intent</div>
      <h2 style="font-size:clamp(26px,3.5vw,40px);">Driven by vision, guided by mission</h2>
      <p>Our foundational principles shape every client relationship, financial product advisory, and operational workflow.</p>
    </div>

    <div class="two-col reveal" style="gap:24px;">
      <!-- OUR VISION CARD -->
      <div style="background:#FFFFFF; border:2px solid var(--brass); border-radius:var(--radius-md); padding:28px 24px; box-shadow:var(--shadow-md); position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; width:4px; height:100%; background:linear-gradient(to bottom, var(--brass), var(--brass-deep));"></div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
          <div style="width:36px; height:36px; border-radius:50%; background:var(--brass-tint); border:1px solid var(--brass); color:var(--brass-deep); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <div>
            <span style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass-deep); font-weight:700;">STRATEGIC DIRECTION</span>
            <h3 style="font-size:22px; color:var(--ink); font-weight:700;">Our Vision</h3>
          </div>
        </div>
        <p style="font-family:var(--serif); font-size:17.5px; color:var(--paper-text); line-height:1.65; font-style:italic;">
          "<?php echo COMPANY_VISION; ?>"
        </p>
      </div>

      <!-- OUR MISSION CARD -->
      <div style="background:#FFFFFF; border:2px solid var(--verified); border-radius:var(--radius-md); padding:28px 24px; box-shadow:var(--shadow-md); position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; width:4px; height:100%; background:var(--verified);"></div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
          <div style="width:36px; height:36px; border-radius:50%; background:var(--verified-light); border:1px solid var(--verified); color:var(--verified); display:flex; align-items:center; justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          </div>
          <div>
            <span style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--verified); font-weight:700;">PURPOSE &amp; GOALS</span>
            <h3 style="font-size:22px; color:var(--ink); font-weight:700;">Our Mission</h3>
          </div>
        </div>
        <p style="font-family:var(--serif); font-size:17.5px; color:var(--paper-text); line-height:1.65; font-style:italic;">
          "<?php echo COMPANY_MISSION; ?>"
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: WHY PARTNER WITH US (DARK SECTION) -->
<section class="section-dark">
  <div class="wrap">
    <div class="two-col" style="margin-bottom:24px; align-items:center;">
      <div class="section-head reveal" style="margin-bottom:0;">
        <div class="eyebrow on-dark">Institutional Standards</div>
        <h2>Why clients &amp; partners trust Gurutma</h2>
        <p>We treat every financial requirement with auditable discipline, compliance integrity, and dedicated relationship management.</p>
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
        <h4>Transparent Solutions</h4>
        <p>Clear process workflows and transparent terms for individuals, families, and growing businesses.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">2</div>
        <h4>RBI Fair Conduct Code</h4>
        <p>Operations follow statutory conduct guidelines, protecting partner reputation and customer trust.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">3</div>
        <h4>GST Registered Entity</h4>
        <p>Full regulatory compliance with official GST registration (09AANCG1128P1Z3) and documented audit trails.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">4</div>
        <h4>Customer-Centric Advisory</h4>
        <p>Tailored financial products and advisory desking designed to help clients achieve self-reliance.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">5</div>
        <h4>PAN-India Operational Network</h4>
        <p>Coverage across key regions with trained personnel for sourcing and financial recovery management.</p>
      </div>
      <div class="feature-card">
        <div class="feature-card-num">6</div>
        <h4>Dedicated Relationship Management</h4>
        <p>Assigned Relationship Managers coordinate daily desking, partner queries, and operational reports.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: RELATIONSHIP DESK & CONSULTATION -->
<section class="section-paper">
  <div class="wrap two-col" style="align-items:center;">
    <div class="reveal">
      <div class="service-image-panel" style="margin-bottom:0;">
        <img src="assets/images/relationship-manager.png" alt="Dedicated Relationship Management Consultation Desk" loading="lazy">
      </div>
    </div>
    <div class="reveal">
      <div class="eyebrow">Direct Consultation Desk</div>
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">Connect with a relationship manager today</h2>
      <p style="margin-top:12px; font-size:15.5px; color:var(--paper-muted); line-height:1.65;">
        Whether you are an individual seeking financial solutions or an institution looking for reliable sourcing and recovery desking, our team is ready to assist you.
      </p>
      <div style="margin-top:20px; display:flex; gap:12px; flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-primary">File a Case Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20Gurutma%20Financial%20Services" target="_blank" rel="noopener" class="btn btn-wa">
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
      <h3>Ready to partner with Gurutma Financial Services?</h3>
      <p>Talk to a Relationship Manager about financial products, sourcing, or recovery requirements.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Get in Touch →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
