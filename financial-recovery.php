<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "Financial Recovery Solutions | " . COMPANY_NAME;
$pageDesc = "Portfolio-level recovery strategy, skip-tracing and settlement structuring for stressed loan books.";
$activePage = "financial-recovery";

include 'includes/header.php';
?>

<main>

<!-- PREMIUM EXECUTIVE HERO BANNER -->
<section class="about-hero-banner">
  <div class="wrap about-hero-grid">
    <div class="about-hero-text reveal">
      <div class="crumb"><a href="index.php">Home</a> / Financial Recovery Solutions</div>
      <div class="file-no" style="margin-bottom:14px;"><span class="file-no-dot"></span> CASE FILE NO. FRS-04 · ACTIVE STRATEGY DESK</div>
      <h1>Portfolio-Level Strategy &amp; <em>Stressed Book Recovery</em></h1>
      <p class="about-hero-lead">
        Data-driven portfolio segmentation, digital skip-tracing, and settlement structuring for bulk stressed loan books and written-off assets.
      </p>
      
      <div class="about-hero-pills">
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Bulk Stressed Portfolios
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Digital Skip-Tracing
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Board-Ready MIS Audit
        </span>
      </div>

      <div class="about-hero-actions">
        <a href="contact.php" class="btn btn-brass">Open Strategy Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20Financial%20Recovery%20Solutions" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Direct WhatsApp
        </a>
      </div>
    </div>

    <!-- RIGHT HERO MEDIA SHOWCASE -->
    <div class="about-hero-media reveal">
      <div class="hero-image-card">
        <img src="assets/images/recovery-solutions.png" alt="Portfolio Financial Recovery Analytics &amp; Strategy" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">STRATEGY DESK</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">Portfolio Recovery Strategy</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● Board Level MIS</span>
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
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">Data-Driven Portfolio Recovery Solutions</h2>
      <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Sometimes the problem isn't one account — it's a portfolio. We take on bulk stressed books and build a recovery strategy around bucket, geography and borrower profile, rather than working every file the same way.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        That includes skip-tracing borrowers who've become unreachable, structuring settlement offers your team can approve quickly, and giving you a clear view of which segments of the book are worth pursuing versus writing off.
      </p>

      <div class="eyebrow" style="margin-top:24px;">Solution Capabilities</div>
      <div class="about-feature-grid">
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Portfolio Segmentation &amp; Priority Scoring</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Skip-Tracing for Untraceable Borrowers</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Pre-Approved Settlement Structuring</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Recovery-Rate Industry Benchmarking</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Board-Ready Write-Off Recommendation MIS</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Project-Basis or Ongoing Retainer Desks</div>
      </div>
    </div>

    <!-- Dark Executive Registration Card -->
    <div class="reveal">
      <div class="about-details-card">
        <div class="eyebrow on-dark" style="margin-bottom:10px;">Desk Specifications</div>
        <div class="about-details-row">
          <div class="about-details-item">
            <div class="about-details-label">Best Suited For</div>
            <div class="about-details-val">Bulk Stressed Portfolios &amp; Written-Off Books</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Engagement Models</div>
            <div class="about-details-val">Project-Basis Drives or Monthly Retainers</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Core Deliverables</div>
            <div class="about-details-val">Segmented Strategy + Real-Time Recovery MIS</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Skip-Tracing Tech</div>
            <div class="about-details-val">Digital &amp; Field Intelligence Network</div>
          </div>
        </div>
        <div style="margin-top:16px;">
          <span class="stamp-note verified" style="font-size:10px;">● Portfolio-Level Reporting</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PIPELINE WORKFLOW -->
<section class="section-dark">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow on-dark">Recovery Strategy Pipeline</div>
      <h2>How bulk stressed portfolios are normalized</h2>
      <p>5-stage analytical and field strategy for high-yield portfolio recovery.</p>
    </div>
    
    <div class="process-pipeline-grid reveal">
      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">01</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 01</span>
        </div>
        <h4 style="color:var(--dark-text);">Book Analysis</h4>
        <p style="color:var(--dark-muted);">Stressed loan book ingested and segmented by DPD, geography &amp; balance.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">02</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 02</span>
        </div>
        <h4 style="color:var(--dark-text);">Skip-Tracing</h4>
        <p style="color:var(--dark-muted);">Address, phone, and employer databases refreshed for non-contactable accounts.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">03</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 03</span>
        </div>
        <h4 style="color:var(--dark-text);">Settlement Matrix</h4>
        <p style="color:var(--dark-muted);">Custom settlement matrices configured matching bank credit approval thresholds.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">04</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 04</span>
        </div>
        <h4 style="color:var(--dark-text);">Targeted Drive</h4>
        <p style="color:var(--dark-muted);">Synchronized tele-calling and doorstep agent drives deployed across regions.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">05</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 05</span>
        </div>
        <h4 style="color:var(--dark-text);">Board MIS Audit</h4>
        <p style="color:var(--dark-muted);">Reconciliation report, recovered capital, and write-off audit delivered.</p>
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
      <h3>Ready to optimize your stressed portfolio recovery?</h3>
      <p>Connect with a senior strategist to review portfolio recovery options.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Open Strategy Enquiry →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
