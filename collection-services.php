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
      <p style="font-size:17px; color:var(--paper-muted); line-height:1.75;">
        Most accounts don't need a recovery drive — they need a reliable, well-timed nudge. Our collection desk manages early and mid-bucket follow-up across calls, SMS, email and IVR, keeping accounts current before they ever reach a stressed bucket.
      </p>
      <p style="margin-top:16px; font-size:17px; color:var(--paper-muted); line-height:1.75;">
        Every call is logged against the account, every promise-to-pay is tracked to its due date, and your team gets a bucket-wise report without having to ask for one.
      </p>
      <div class="eyebrow" style="margin-top:28px;">What's Included</div>
      <ul class="check-list">
        <li>Trained tele-calling desk for 0–30, 31–60 and 61–90 DPD buckets</li>
        <li>Multi-channel reminders — call, SMS, email and IVR</li>
        <li>Promise-to-pay tracking and follow-through</li>
        <li>Call recording and quality monitoring</li>
        <li>Daily and monthly bucket-movement reporting</li>
        <li>Escalation handoff to field or legal track when required</li>
      </ul>
    </div>
    <div class="reveal panel">
      <div class="eyebrow">At a Glance</div>
      <div style="display:flex; flex-direction:column; gap:18px; margin-top:8px;">
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Buckets Handled</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">0–30 / 31–60 / 61–90 DPD</div>
        </div>
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Channels</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">Voice, SMS, Email, IVR</div>
        </div>
        <div>
          <div style="font-family:var(--mono); font-size:11.5px; color:var(--paper-muted); text-transform:uppercase; font-weight:600;">Reporting</div>
          <div style="font-family:var(--serif); font-size:18px; margin-top:4px; font-weight:600;">Daily call logs, monthly bucket MIS</div>
        </div>
        <span class="stamp-note verified">● RBI Fair Practices Code</span>
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

      <a href="npa-recovery.php" class="service-card">
        <div class="service-card-header">
          <span class="idx">FILE 03</span>
          <div class="service-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
        </div>
        <h3>NPA Collection &amp; Recovery</h3>
        <p>Specialist handling of non-performing accounts, from negotiated settlement to legal-track recovery.</p>
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
