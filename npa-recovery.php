<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = "NPA Collection & Recovery | " . COMPANY_NAME;
$pageDesc = "Specialist handling of non-performing accounts, from negotiated settlement to legal-track recovery.";
$activePage = "npa-recovery";

include 'includes/header.php';
?>

<main>
<div class="page-head">
  <div class="wrap">
    <div class="crumb"><a href="index.php">Home</a> / NPA Collection &amp; Recovery</div>
    <h1>NPA Collection &amp; Recovery</h1>
    <p>A dedicated case manager for every non-performing account — negotiated settlement first, legal-track recovery when it's the right call.</p>
    <div class="file-no"><span class="file-no-dot"></span> CASE FILE NO. NPA-03 · ACTIVE DESK</div>
  </div>
</div>

<section class="section-paper ruled">
  <div class="wrap two-col">
    <div class="reveal">
      <span class="stamp-note">OVERDUE — 90+ DPD</span>
      <p style="margin-top:22px; font-size:17px; color:var(--paper-muted); line-height:1.75;">
        Once an account slips into non-performing status, generic follow-up stops working. Our NPA desk takes on stressed accounts with a dedicated case manager, a settlement-first approach, and a coordinated escalation path when a legal-track recovery route becomes necessary.
      </p>
      <p style="margin-top:16px; font-size:17px; color:var(--paper-muted); line-height:1.75;">
        We work alongside your empanelled legal counsel where formal recovery routes — including SARFAESI action or DRT proceedings — are the right path, while pursuing negotiated settlement wherever it serves the account faster.
      </p>
      <div class="eyebrow" style="margin-top:28px;">What's Included</div>
      <ul class="check-list">
        <li>Dedicated case manager per NPA account</li>
        <li>Borrower tracing and contact re-establishment</li>
        <li>Structured settlement negotiation</li>
        <li>Coordination with legal counsel for formal recovery routes</li>
        <li>Documentation trail suitable for provisioning and audit review</li>
        <li>Regular status reporting through to closure</li>
      </ul>
    </div>
    <div class="reveal panel">
      <div class="eyebrow">At a Glance</div>
      <div style="display:flex; flex-direction:column; gap:18px; margin-top:8px;">
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Account Stage</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">90+ DPD, written-off &amp; NPA-tagged</div>
        </div>
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Approach</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">Settlement-first, legal-track when needed</div>
        </div>
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Ownership</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">One case manager, start to close</div>
        </div>
        <span class="stamp-note verified">● Documented Audit Trail</span>
      </div>
    </div>
  </div>
</section>

<section class="section-paper">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Related Services</div>
      <h2 style="font-size:30px;">Other files in our register</h2>
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
        <span class="go">Read the file →</span>
      </a>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="wrap">
    <div>
      <h3>Ready to open a file with us?</h3>
      <p>Talk to a relationship manager about your sourcing or recovery requirement.</p>
    </div>
    <a href="contact.php" class="btn btn-brass">Get in Touch →</a>
  </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
