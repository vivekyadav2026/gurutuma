<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "Collection Services | " . COMPANY_NAME;
$pageDesc = "Structured tele-calling and multi-channel follow-up on early and mid-bucket accounts to keep portfolios current.";
$activePage = "collection-services";

include 'includes/header.php';
?>

<main>
<div class="page-head">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / Collection Services</div>
    <h1>Collection Services</h1>
    <p>Early and mid-bucket follow-up across voice, SMS, email and IVR — built to keep accounts current, not just contacted.</p>
    <div class="file-no"><span class="file-no-dot"></span> CASE FILE NO. CS-02 · ACTIVE DESK</div>
  </div>
</div>

<section class="section-paper ruled">
  <div class="wrap two-col">
    <div class="reveal">
      <div class="service-image-panel">
        <img src="assets/images/collection-operations.png" alt="Corporate Tele-calling & Collection Desk Operations" loading="lazy">
      </div>
      <p style="font-size:16.5px; color:var(--paper-muted); line-height:1.7;">
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
