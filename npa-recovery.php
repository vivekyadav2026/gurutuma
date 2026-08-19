<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "NPA Collection & Recovery | " . COMPANY_NAME;
$pageDesc = "Specialist handling of non-performing accounts, from negotiated settlement to legal-track recovery.";
$activePage = "npa-recovery";

include 'includes/header.php';
?>

<main>

<!-- PREMIUM EXECUTIVE HERO BANNER -->
<section class="about-hero-banner">
  <div class="wrap about-hero-grid">
    <div class="about-hero-text reveal">
      <div class="crumb"><a href="index.php">Home</a> / NPA Collection &amp; Recovery</div>
      <div class="file-no" style="margin-bottom:14px;"><span class="file-no-dot"></span> CASE FILE NO. NPA-03 · ACTIVE RECOVERY DESK</div>
      <h1>Specialist NPA Collection &amp; <em>Legal-Track Recovery</em></h1>
      <p class="about-hero-lead">
        Single case manager ownership for non-performing accounts — structured settlement negotiation first, SARFAESI and DRT legal escalation when required.
      </p>
      
      <div class="about-hero-pills">
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          90+ DPD Stressed Books
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Single Case Manager
        </span>
        <span class="hero-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          SARFAESI &amp; DRT Ready
        </span>
      </div>

      <div class="about-hero-actions">
        <a href="contact.php" class="btn btn-brass">Open NPA Desk Enquiry →</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20NPA%20Recovery%20Services" target="_blank" rel="noopener" class="btn btn-wa">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Direct WhatsApp
        </a>
      </div>
    </div>

    <!-- RIGHT HERO MEDIA SHOWCASE -->
    <div class="about-hero-media reveal">
      <div class="hero-image-card">
        <img src="assets/images/npa-recovery.png" alt="NPA Financial Recovery Advisory Session" loading="eager">
        <div class="hero-image-overlay">
          <div>
            <div style="font-family:var(--mono); font-size:10.5px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">NPA DESK</div>
            <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">Specialist Stressed Recovery</div>
          </div>
          <span class="stamp-note verified" style="padding:3px 8px; font-size:10px;">● Audit Documented</span>
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
      <h2 style="font-size:clamp(24px,3vw,34px); color:var(--ink);">Dedicated Case Management for Stressed Accounts</h2>
      <div style="margin-bottom:12px; margin-top:8px;"><span class="stamp-note">OVERDUE — 90+ DPD &amp; STRESSED ACCOUNTS</span></div>
      <p style="font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        Once an account slips into non-performing status, generic follow-up stops working. Our NPA desk takes on stressed accounts with a dedicated case manager, a settlement-first approach, and a coordinated escalation path when a legal-track recovery route becomes necessary.
      </p>
      <p style="margin-top:12px; font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
        We work alongside your empanelled legal counsel where formal recovery routes — including SARFAESI action or DRT proceedings — are the right path, while pursuing negotiated settlement wherever it serves the account faster.
      </p>

      <div class="eyebrow" style="margin-top:24px;">NPA Recovery Features</div>
      <div class="about-feature-grid">
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Dedicated Single Case Manager Ownership</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Skip-Tracing &amp; Borrower Contact Recovery</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> One-Time Settlement (OTS) Structuring</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Legal Counsel Handoff (SARFAESI &amp; DRT)</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Provisioning &amp; Audit Trail Documentation</div>
        <div class="about-feature-item"><span class="about-feature-icon">✓</span> Real-Time Case Progression Reporting</div>
      </div>
    </div>

    <!-- Dark Executive Card -->
    <div class="reveal">
      <div class="about-details-card">
        <div class="eyebrow on-dark" style="margin-bottom:10px;">Desk Specifications</div>
        <div class="about-details-row">
          <div class="about-details-item">
            <div class="about-details-label">Account Bucket</div>
            <div class="about-details-val">90+ DPD, Written-Off &amp; NPA-Tagged</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Recovery Strategy</div>
            <div class="about-details-val">Settlement-First, Legal Escalation Second</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Accountability</div>
            <div class="about-details-val">Single Case Manager Ownership</div>
          </div>
          <div class="about-details-item">
            <div class="about-details-label">Legal Readiness</div>
            <div class="about-details-val">SARFAESI, DRT &amp; Notice Trail Documentation</div>
          </div>
        </div>
        <div style="margin-top:16px;">
          <span class="stamp-note verified" style="font-size:10px;">● Documented Audit Trail</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PIPELINE WORKFLOW -->
<section class="section-dark">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow on-dark">NPA Recovery Pipeline</div>
      <h2>How stressed accounts move to closure</h2>
      <p>A disciplined 5-stage recovery pipeline for non-performing assets.</p>
    </div>
    
    <div class="process-pipeline-grid reveal">
      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">01</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 01</span>
        </div>
        <h4 style="color:var(--dark-text);">NPA File Audit</h4>
        <p style="color:var(--dark-muted);">Security documents, payment history, and legal notices are audited.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">02</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 02</span>
        </div>
        <h4 style="color:var(--dark-text);">Skip Tracing</h4>
        <p style="color:var(--dark-muted);">Updated addresses, guarantor data, and asset trails are identified.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">03</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 03</span>
        </div>
        <h4 style="color:var(--dark-text);">OTS Negotiation</h4>
        <p style="color:var(--dark-muted);">Negotiated One-Time Settlement terms are presented under credit limits.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">04</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 04</span>
        </div>
        <h4 style="color:var(--dark-text);">Legal Escalation</h4>
        <p style="color:var(--dark-muted);">Coordinated SARFAESI notice or legal proceeding initiated if non-responsive.</p>
        <span class="pipeline-arrow">→</span>
      </div>

      <div class="pipeline-card" style="background:var(--ink-card); border-color:var(--ink-line);">
        <div class="pipeline-header">
          <span class="pipeline-num">05</span>
          <span class="pipeline-tag" style="color:var(--brass);">Stage 05</span>
        </div>
        <h4 style="color:var(--dark-text);">Recovery Closure</h4>
        <p style="color:var(--dark-muted);">Recovery amount realized and formal audit closure documentation delivered.</p>
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
      <h3>Ready to discuss your NPA recovery strategy?</h3>
      <p>Talk to a senior case manager about stressed portfolio recovery.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Open NPA Desk Enquiry →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
