<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "Field Collection Services | " . COMPANY_NAME;
$pageDesc = "Trained, verified field agents for doorstep visits, notice serving and on-ground recovery across India.";
$activePage = "field-collection";

include 'includes/header.php';
?>

<main>

<!-- PREMIUM EXECUTIVE HERO BANNER -->
<section class="about-hero-banner">
  <div class="wrap about-hero-grid">
    <div class="about-hero-text reveal">
      <div class="crumb"><a href="index.php">Home</a> / Field Collection Services</div>
      <div class="file-no" style="margin-bottom:14px;"><span class="file-no-dot"></span> CASE FILE NO. FC-05 · ACTIVE FIELD FORCE</div>
      <h1>Doorstep Field Collection <em>&amp; Legal Notice Serving</em></h1>
      <p class="about-hero-lead">
        Doorstep visits, in-person negotiation, and notice serving from a background-verified, DRA-trained field network operating strictly within RBI conduct guidelines.
      </p>
      
      <div class="about-hero-pills">
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          DRA-Certified Field Agents
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Timestamped Geo-Logs
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Legal Notice Delivery Proof
        </span>
      </div>

      <div class="about-hero-actions">
        <a href="contact.php" class="btn btn-brass">Open Field Force Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20Field%20Collection%20Services" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Direct WhatsApp
        </a>
      </div>
    </div>

    <!-- RIGHT HERO MEDIA SHOWCASE -->
    <div class="about-hero-media reveal">
      <div class="hero-image-card">
        <img src="assets/images/field-collection.png" alt="Trained field collection agent with digital case MIS" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">FIELD DESK</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">PAN-India Field Force</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● Geo-Logged Visits</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="section-paper ruled">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="eyebrow">Desk Overview</div>
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">On-Ground Feet-On-Street Recovery &amp; Audit Trail</h2>
      <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Some accounts only move when someone shows up at the door. Our field collection network covers key urban and regional territories with trained, background-verified agents who handle doorstep visits, notice serving and on-ground negotiation — professionally, and within the conduct guidelines your compliance team expects.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Every visit is logged with time, outcome and photographic proof of notice delivery where applicable, so there's a clear record of every doorstep interaction.
      </p>

      <div class="eyebrow" style="margin-top:24px;">Field Operations Capabilities</div>
      <div class="about-feature-grid">
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Background-Verified &amp; DRA-Trained Agents</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Doorstep Physical Verification &amp; Visits</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Legal Notice Serving &amp; Delivery Proof</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Address &amp; Asset Field Re-Verification</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Geo-Tagged Visit Logs &amp; Outcome MIS</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Strict Adherence to RBI Fair Practices Code</div>
      </div>
    </div>

    <!-- Dark Executive Registration Card -->
    <div class="reveal">
      <div class="about-details-card">
        <div class="eyebrow on-dark" style="margin-bottom:10px;">Desk Specifications</div>
        <div class="about-details-row">
          <div class="about-details-item">
            <div class="about-details-label">Network Reach</div>
            <div class="about-details-val">PAN-India Urban &amp; Rural Field Force</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Agent Screening</div>
            <div class="about-details-val">Background-Verified &amp; Conduct-Trained</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Proof of Visit</div>
            <div class="about-details-val">Geo-Tagged Timestamp, Log &amp; Photo Proof</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Regulatory Audit</div>
            <div class="about-details-val">100% Conduct Guideline Compliant</div>
          </div>
        </div>
        <div style="margin-top:16px;">
          <span class="stamp-note verified" style="font-size:10px;">● Conduct-Guideline Compliant</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PIPELINE WORKFLOW -->
<section class="section-dark">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow on-dark">Field Visit Pipeline</div>
      <h2>How doorstep visits are executed &amp; audited</h2>
      <p>5-stage field operation process from dispatch to proof-of-visit logging.</p>
    </div>
    
    <div class="process-pipeline-grid reveal">
      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">01</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 01</span>
        </div>
        <h4 style="color:var(--dark-text);">Territory Route</h4>
        <p style="color:var(--dark-muted);">Case allocated to field agent based on geographic pin-code cluster.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">02</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 02</span>
        </div>
        <h4 style="color:var(--dark-text);">Pre-Visit Check</h4>
        <p style="color:var(--dark-muted);">Borrower file history and compliance rules reviewed prior to visit.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">03</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 03</span>
        </div>
        <h4 style="color:var(--dark-text);">Doorstep Visit</h4>
        <p style="color:var(--dark-muted);">Agent conducts polite, compliant in-person negotiation or notice serving.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">04</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 04</span>
        </div>
        <h4 style="color:var(--dark-text);">Digital Logging</h4>
        <p style="color:var(--dark-muted);">Outcome, geo-location, and notice delivery proof logged digitally.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">05</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 05</span>
        </div>
        <h4 style="color:var(--dark-text);">Credit MIS Update</h4>
        <p style="color:var(--dark-muted);">Visit report and payment status updated in bank's daily dashboard.</p>
      </div>
    </div>
  </div>
</section>

<!-- RELATED SERVICES -->
<section class="section-paper">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Related Services</div>
      <h2>Other files in our register</h2>
    </div>
    <div class="services-grid reveal">
      <a href="loan-sourcing.php" class="service-card">
        <div class="service-card-header">
          <span class="idx">FILE 01</span>
          <div class="service-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
          </div>
        </div>
        <h3>Loan Sourcing Services</h3>
        <p>Feet-on-street and digital sourcing of pre-qualified borrowers, verified end-to-end before the file reaches you.</p>
        <div><span class="card-badge">Feet-On-Street &amp; Digital</span></div>
        <span class="go">Read the file →</span>
      </a>

      <a href="collection-services.php" class="service-card">
        <div class="service-card-header">
          <span class="idx">FILE 02</span>
          <div class="service-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </div>
        </div>
        <h3>Collection Services</h3>
        <p>Structured tele-calling and follow-up on early and mid-bucket accounts to keep portfolios current.</p>
        <div><span class="card-badge">0–90 DPD Tele-Calling</span></div>
        <span class="go">Read the file →</span>
      </a>

      <a href="npa-recovery.php" class="service-card">
        <div class="service-card-header">
          <span class="idx">FILE 03</span>
          <div class="service-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
        </div>
        <h3>NPA Collection &amp; Recovery</h3>
        <p>Specialist handling of non-performing accounts, from negotiated settlement to legal-track recovery.</p>
        <div><span class="card-badge">90+ DPD &amp; Legal Handoff</span></div>
        <span class="go">Read the file →</span>
      </a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<div class="cta-band">
  <div class="wrap">
    <div>
      <h3>Need verified field collection force in your territory?</h3>
      <p>Talk to a relationship manager about field agent dispatching.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Open Field Force Enquiry →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
