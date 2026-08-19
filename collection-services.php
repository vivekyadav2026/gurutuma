<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "Collection Services | " . COMPANY_NAME;
$pageDesc = "Structured tele-calling and multi-channel follow-up on early and mid-bucket accounts to keep portfolios current.";
$activePage = "collection-services";

include 'includes/header.php';
?>

<main>

<!-- PREMIUM EXECUTIVE HERO BANNER -->
<section class="about-hero-banner">
  <div class="wrap about-hero-grid">
    <div class="about-hero-text reveal">
      <div class="crumb"><a href="index.php">Home</a> / Collection Services</div>
      <div class="file-no" style="margin-bottom:14px;"><span class="file-no-dot"></span> CASE FILE NO. CS-02 · ACTIVE TELE-COLLECTION DESK</div>
      <h1>Early &amp; Mid-Bucket Collection <em>With Multi-Channel Outreach</em></h1>
      <p class="about-hero-lead">
        Structured tele-calling and automated reminders across voice, SMS, email, and IVR — engineered to normalize accounts before they slip into stressed buckets.
      </p>
      
      <div class="about-hero-pills">
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          0–90 DPD Buckets
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Predictive Voice &amp; IVR
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          RBI Code Compliant
        </span>
      </div>

      <div class="about-hero-actions">
        <a href="contact.php" class="btn btn-brass">Open Collection Desk Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20Collection%20Services" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Direct WhatsApp
        </a>
      </div>
    </div>

    <!-- RIGHT HERO MEDIA SHOWCASE -->
    <div class="about-hero-media reveal">
      <div class="hero-image-card">
        <img src="assets/images/collection-operations.png" alt="Corporate Tele-calling &amp; Collection Desk Operations" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">COLLECTION OPERATIONS</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">0–90 DPD Tele-Calling Desk</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● RBI Compliant</span>
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
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">Reliable Follow-Up to Keep Loan Portfolios Current</h2>
      <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Most accounts don't need a recovery drive — they need a reliable, well-timed nudge. Our collection desk manages early and mid-bucket follow-up across calls, SMS, email and IVR, keeping accounts current before they ever reach a stressed bucket.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Every call is logged against the account, every promise-to-pay is tracked to its due date, and your team gets a bucket-wise report without having to ask for one.
      </p>

      <div class="eyebrow" style="margin-top:24px;">Collection Desk Features</div>
      <div class="about-feature-grid">
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> 0–30 DPD Early Bucket Follow-Up</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> 31–60 &amp; 61–90 DPD Tele-Calling</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Multi-Channel Outreach (Call, SMS, Email, IVR)</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Promise-To-Pay (PTP) Automated Tracking</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> 100% Call Recording &amp; Quality Audit</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Daily Bucket-Movement MIS Reports</div>
      </div>
    </div>

    <!-- Dark Executive Registration Card -->
    <div class="reveal">
      <div class="about-details-card">
        <div class="eyebrow on-dark" style="margin-bottom:10px;">Desk Specifications</div>
        <div class="about-details-row">
          <div class="about-details-item">
            <div class="about-details-label">Buckets Handled</div>
            <div class="about-details-val">0–30 / 31–60 / 61–90 DPD</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Channels &amp; Tech</div>
            <div class="about-details-val">Predictive Voice, SMS, Email &amp; IVR</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Reporting Cadence</div>
            <div class="about-details-val">Daily Call Logs &amp; Monthly Bucket MIS</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Compliance Code</div>
            <div class="about-details-val">RBI Fair Practices &amp; Conduct Guidelines</div>
          </div>
        </div>
        <div style="margin-top:16px;">
          <span class="stamp-note verified" style="font-size:10px;">● RBI Fair Practices Code</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PIPELINE WORKFLOW -->
<section class="section-dark">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow on-dark">Collection Process</div>
      <h2>Structured 5-stage tele-collection workflow</h2>
      <p>How early and mid-bucket delinquent accounts are tracked to payment resolution.</p>
    </div>
    
    <div class="process-pipeline-grid reveal">
      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">01</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 01</span>
        </div>
        <h4 style="color:var(--dark-text);">File Allocation</h4>
        <p style="color:var(--dark-muted);">DPD data ingested, segmented by bucket, and allocated to agents.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">02</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 02</span>
        </div>
        <h4 style="color:var(--dark-text);">First Contact</h4>
        <p style="color:var(--dark-muted);">Trained agent initiates polite, compliant tele-call or multi-channel reminder.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">03</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 03</span>
        </div>
        <h4 style="color:var(--dark-text);">PTP Agreement</h4>
        <p style="color:var(--dark-muted);">Promise-To-Pay (PTP) date negotiated and registered in tracking software.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">04</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 04</span>
        </div>
        <h4 style="color:var(--dark-text);">Follow-Through</h4>
        <p style="color:var(--dark-muted);">Automated SMS/Voice reminders sent 24h prior to promised payment date.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">05</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 05</span>
        </div>
        <h4 style="color:var(--dark-text);">Reconciliation</h4>
        <p style="color:var(--dark-muted);">Payment verified, account normalized, or escalated to field drive.</p>
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

      <a href="financial-recovery.php" class="service-card">
        <div class="service-card-header">
          <span class="idx">FILE 04</span>
          <div class="service-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
          </div>
        </div>
        <h3>Financial Recovery Solutions</h3>
        <p>Portfolio-level recovery strategy, skip-tracing and settlement structuring for stressed books.</p>
        <div><span class="card-badge">Skip-Tracing &amp; Strategy</span></div>
        <span class="go">Read the file →</span>
      </a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<div class="cta-band">
  <div class="wrap">
    <div>
      <h3>Ready to discuss your collection requirements?</h3>
      <p>Talk to a relationship manager about early and mid-bucket tele-calling desking.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Open Collection Desk Enquiry →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
