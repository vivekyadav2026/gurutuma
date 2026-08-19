<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = COMPANY_NAME . " | Loan Sourcing, Collection & NPA Recovery";
$pageDesc = COMPANY_NAME . " — trusted loan sourcing, collection, NPA recovery and field collection services for banks and NBFCs across India.";
$activePage = "home";

$formSubmitted = false;
$formSuccess = false;
$formError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formSubmitted = true;
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($name) && !empty($phone)) {
        $formSuccess = true;
    } else {
        $formError = "Please fill in all required fields (Name and Phone Number).";
    }
}

include 'includes/header.php';
?>

<main>

  <!-- HERO -->
  <section class="hero section-paper ruled">
    <div class="wrap hero-grid">
      <div class="reveal in">
        <div class="hero-kicker">Registered Entity · Reg. Date: <?php echo REGISTRATION_DATE; ?></div>
        <h1>Every loan file,<br>every recovery case —<br><em>logged, worked, closed.</em></h1>
        <p class="lead">Gurutma Financial Services partners with leading banks and NBFCs to source clean loan business and recover what's owed, through a disciplined, file-numbered process built for accountability at scale.</p>
        
        <div class="hero-actions">
          <a href="contact.php" class="btn btn-primary">File an Enquiry →</a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn btn-wa">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Chat on WhatsApp
          </a>
          <a href="#services" class="btn btn-outline">View Our Services</a>
        </div>

        <!-- Verified Feature Pillars -->
        <div class="hero-highlights">
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>RBI Fair Practices Code Compliant</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Case-Numbered Audit Trail &amp; MIS</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Trained &amp; Verified Field Agents</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Dedicated Relationship Desk</span></div>
        </div>
      </div>
      
      <!-- Generated Visual Showcase Card -->
      <div class="reveal in" style="display:flex; flex-direction:column; align-items:center; gap:20px;">
        <div class="hero-image-card">
          <img src="assets/images/hero-office.png" alt="Gurutma Financial Services Headquarters" loading="eager">
          <div class="hero-image-overlay">
            <div>
              <div style="font-family:var(--mono); font-size:11px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass);">REGISTERED OFFICE</div>
              <div style="font-family:var(--serif); font-size:16px; font-weight:700; color:#FFFFFF;">Azamgarh, Uttar Pradesh</div>
            </div>
            <span class="stamp-note verified" style="padding:4px 10px; font-size:10.5px;">● Active Desk</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION OVERHAUL -->
  <section class="section-deep" id="about">
    <div class="wrap two-col">
      <div class="reveal">
        <div class="eyebrow">About the Company</div>
        <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">A back office built the way lenders actually work</h2>
        <p style="margin-top:14px; font-size:16px; color:var(--paper-muted); line-height:1.7;">
          Gurutma Financial Services Pvt. Ltd. was set up to solve a specific problem for banks and NBFCs: loan books grow faster than internal teams can source, verify and, when needed, recover. We operate as an extension of your credit and collections desk — every file we touch carries a case number, an owner, and a status that's visible to you at every stage.
        </p>
        <p style="margin-top:10px; font-size:16px; color:var(--paper-muted); line-height:1.7;">
          From first-mile loan sourcing to last-mile field recovery on stressed accounts, our teams follow documented, compliance-first playbooks — not ad-hoc calling lists. That discipline is why lending partners keep our register open year after year.
        </p>

        <!-- Redesigned Feature Pills -->
        <div class="about-feature-grid">
          <div class="about-feature-item"><span class="about-feature-icon">✓</span> RBI Fair Practices Code Compliant</div>
          <div class="about-feature-item"><span class="about-feature-icon">✓</span> Background-Verified Field Force</div>
          <div class="about-feature-item"><span class="about-feature-icon">✓</span> Real-Time MIS &amp; Case Reporting</div>
          <div class="about-feature-item"><span class="about-feature-icon">✓</span> Dedicated Relationship Desk</div>
        </div>

        <div style="margin-top:20px;">
          <a href="about.php" class="btn btn-primary">Read Full Firm Profile →</a>
        </div>
      </div>

      <!-- Redesigned Dark Executive Card -->
      <div class="reveal">
        <div class="about-details-card">
          <div class="eyebrow on-dark" style="margin-bottom:8px;">Firm Registration Particulars</div>
          <div class="about-details-row">
            <div class="about-details-item">
              <div class="about-details-label">Registered Entity</div>
              <div class="about-details-val"><?php echo COMPANY_NAME; ?></div>
            </div>
            <div class="about-details-item">
              <div class="about-details-label">Registration Date</div>
              <div class="about-details-val"><?php echo REGISTRATION_DATE; ?></div>
            </div>
            <div class="about-details-item">
              <div class="about-details-label">Registered Office Address</div>
              <div class="about-details-val"><?php echo OFFICE_ADDRESS; ?></div>
            </div>
            <div class="about-details-item">
              <div class="about-details-label">Practice Areas</div>
              <div class="about-details-val">Loan Sourcing · Collections · NPA Recovery</div>
            </div>
          </div>
          <div style="margin-top:16px;">
            <span class="stamp-note verified" style="font-size:10.5px;">● Compliance-First Operations</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section-paper" id="services">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Our Services</div>
        <h2>Five practice areas, one register</h2>
        <p>Each engagement is opened as a case file — scoped, staffed and tracked from day one through closure.</p>
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

        <a href="field-collection.php" class="service-card">
          <div class="service-card-header">
            <span class="idx">FILE 05</span>
            <div class="service-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
          </div>
          <h3>Field Collection Services</h3>
          <p>Trained, verified field agents for doorstep visits, notice serving and on-ground recovery.</p>
          <div><span class="card-badge">Doorstep Notice &amp; Audit</span></div>
          <span class="go">Read the file →</span>
        </a>

        <a href="contact.php" class="service-card">
          <div class="service-card-header">
            <span class="idx">FILE 06</span>
            <div class="service-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            </div>
          </div>
          <h3>Contact &amp; Enquiry</h3>
          <p>Open a new case with our team — tell us your portfolio and we'll respond within one business day.</p>
          <div><span class="card-badge">1 Business Day Response</span></div>
          <span class="go">Open a file →</span>
        </a>

      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US WITH COMPLIANCE IMAGE -->
  <section class="section-dark">
    <div class="wrap">
      <div class="two-col" style="margin-bottom:32px; align-items:center;">
        <div class="section-head reveal" style="margin-bottom:0;">
          <div class="eyebrow on-dark">Why Choose Us</div>
          <h2>Discipline is the product</h2>
          <p>Sourcing and recovery are relationship businesses. We treat the process like an audit trail — because your regulator will ask for one.</p>
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
          <h4>Case-numbered accountability</h4>
          <p>Every file has one owner and a visible status — no account sits unattended between updates.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card-num">2</div>
          <h4>Compliance by default</h4>
          <p>Field and calling conduct follows the RBI Fair Practices Code, not just company policy on paper.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card-num">3</div>
          <h4>PAN-India reach</h4>
          <p>Field teams available across major locations mean doorstep visits happen on schedule, not on excuses.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card-num">4</div>
          <h4>Transparent reporting</h4>
          <p>Daily MIS, recovery percentages and ageing reports land in your inbox — not just at month-end.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card-num">5</div>
          <h4>Trained personnel</h4>
          <p>Every field and tele-calling agent is background-verified and conduct-trained before a file is assigned.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card-num">6</div>
          <h4>Flexible engagement</h4>
          <p>Work with us on a single bucket, a full portfolio, or a project-basis recovery drive.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS OVERVIEW PIPELINE REDESIGN -->
  <section class="section-paper" id="process">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Process Workflow</div>
        <h2>How a file moves through our register</h2>
        <p>A disciplined 5-stage pipeline, documented and auditable from intake to closure.</p>
      </div>
      
      <div class="process-pipeline-grid reveal">
        <div class="pipeline-card">
          <div class="pipeline-header">
            <span class="pipeline-num">01</span>
            <span class="pipeline-tag">Stage 01</span>
          </div>
          <h4>Intake &amp; Logging</h4>
          <p>Portfolio data is received, validated and assigned a unique case file number.</p>
          <span class="pipeline-arrow">→</span>
        </div>

        <div class="pipeline-card">
          <div class="pipeline-header">
            <span class="pipeline-num">02</span>
            <span class="pipeline-tag">Stage 02</span>
          </div>
          <h4>Verification</h4>
          <p>Identity, address, and credit document checks are verified before outreach.</p>
          <span class="pipeline-arrow">→</span>
        </div>

        <div class="pipeline-card">
          <div class="pipeline-header">
            <span class="pipeline-num">03</span>
            <span class="pipeline-tag">Stage 03</span>
          </div>
          <h4>Routing &amp; Desk</h4>
          <p>File is dispatched to tele-calling, field collection, or NPA recovery teams.</p>
          <span class="pipeline-arrow">→</span>
        </div>

        <div class="pipeline-card">
          <div class="pipeline-header">
            <span class="pipeline-num">04</span>
            <span class="pipeline-tag">Stage 04</span>
          </div>
          <h4>Active MIS Work</h4>
          <p>Visits, calls and payments are logged daily and reported in real-time to your team.</p>
          <span class="pipeline-arrow">→</span>
        </div>

        <div class="pipeline-card">
          <div class="pipeline-header">
            <span class="pipeline-num">05</span>
            <span class="pipeline-tag">Stage 05</span>
          </div>
          <h4>Closure &amp; Audit</h4>
          <p>Recovery or disbursement is verified, and the file is closed with full audit logs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ENQUIRY FORM REDESIGN -->
  <section class="section-deep" id="enquiry">
    <div class="wrap two-col" style="align-items:center;">
      <div class="reveal">
        <div class="eyebrow">Client Enquiry Desk</div>
        <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">Open a direct case file with our desk</h2>
        <p style="margin-top:14px; font-size:16px; color:var(--paper-muted); line-height:1.7;">
          Tell us about your portfolio size, bucket range, or loan sourcing requirement. A named senior Relationship Manager will review your requirements and connect within one business day.
        </p>

        <div class="service-image-panel" style="margin-top:18px; margin-bottom:18px;">
          <img src="assets/images/relationship-manager.png" alt="Bank Relationship Manager Desk" loading="lazy">
        </div>

        <ul class="check-list">
          <li><strong>Confidential Scoping:</strong> Free portfolio assessment under strict NDA terms</li>
          <li><strong>Named Account Desk:</strong> Direct contact with an assigned Relationship Manager</li>
          <li><strong>1 Business Day SLA:</strong> Fast turnaround on all partner enquiries</li>
        </ul>
      </div>

      <div class="reveal">
        <div class="form-panel-dark">
          <div class="form-panel-header">
            <h4>Case Filing Desk</h4>
            <span style="font-family:var(--mono); font-size:10px; color:var(--verified); background:var(--verified-light); padding:2px 8px; border-radius:4px; border:1px solid var(--verified); font-weight:700;">🔒 256-bit Encrypted</span>
          </div>

          <?php if ($formSubmitted && $formSuccess): ?>
            <div class="alert-banner-success" style="margin-bottom:14px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <div>
                <strong>Enquiry Filed Successfully!</strong><br>
                Thank you, <?php echo htmlspecialchars($name); ?>. Our relationship manager will reach out within 1 business day.
              </div>
            </div>
          <?php endif; ?>

          <?php if ($formSubmitted && !empty($formError)): ?>
            <div class="alert-banner-error" style="margin-bottom:14px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
              <div><?php echo htmlspecialchars($formError); ?></div>
            </div>
          <?php endif; ?>

          <form id="enquiry-form" action="index.php#enquiry" method="POST">
            <div class="form-row">
              <div class="field">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required placeholder="Your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
              </div>
              <div class="field">
                <label for="company">Institution Name</label>
                <input type="text" id="company" name="company" placeholder="Bank / NBFC name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="field">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required placeholder="+91 73900 40402" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
              </div>
              <div class="field">
                <label for="email">Work Email</label>
                <input type="email" id="email" name="email" placeholder="you@company.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
              </div>
            </div>
            <div class="field">
              <label for="service">Practice Area Required</label>
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
              <label for="message">Requirement Details</label>
              <textarea id="message" name="message" placeholder="Portfolio size, location geography, bucket/DPD range or specific goals"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>
            <button type="submit" class="btn btn-brass" style="width:100%; justify-content:center; margin-top:4px;">Submit Case File Enquiry →</button>
            <p class="form-note" style="color:var(--dark-muted); font-size:11px; margin-top:8px;">By submitting, you agree to be contacted regarding your enquiry under strict NDA terms.</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT INFORMATION & MAP OVERHAUL -->
  <section class="section-paper">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Registered Headquarters</div>
        <h2>Direct lines to our Azamgarh desk</h2>
        <p>Visit our office or reach out via official phone, email or WhatsApp for immediate assistance.</p>
      </div>

      <div class="info-grid reveal">
        <div class="info-block">
          <div class="lbl">Registered Office Address</div>
          <div class="val" style="margin-top:6px; font-size:15px; line-height:1.45;"><?php echo COMPANY_NAME; ?><br><?php echo OFFICE_ADDRESS; ?></div>
          <div style="margin-top:12px;"><span class="stamp-note verified" style="font-size:9.5px;">● Reg Date: <?php echo REGISTRATION_DATE; ?></span></div>
        </div>

        <div class="info-block">
          <div class="lbl">Phone &amp; WhatsApp Desk</div>
          <div class="val" style="margin-top:6px;"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
          <div style="margin-top:12px;">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20connect%20with%20Gurutma%20Desk" target="_blank" rel="noopener" class="footer-wa-link">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Instant WhatsApp Connect
            </a>
          </div>
        </div>

        <div class="info-block">
          <div class="lbl">Official Support Email</div>
          <div class="val" style="margin-top:6px;"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
          <div style="margin-top:12px; font-family:var(--mono); font-size:11px; color:var(--paper-muted);">Response SLA: &lt; 1 Business Day</div>
        </div>
      </div>

      <div class="map-frame reveal">
        <iframe src="https://www.google.com/maps?q=Bhairav+Baba+Road,+Pasipur,+Maharajganj,+Azamgarh,+Uttar+Pradesh+276137&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Gurutma Financial Services office location"></iframe>
      </div>
    </div>
  </section>

  <!-- CTA BAND -->
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
