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
        <div class="hero-kicker">Registered Financial Services Firm · New Delhi</div>
        <h1>Every loan file,<br>every recovery case —<br><em>logged, worked, closed.</em></h1>
        <p class="lead">Gurutma Financial Services partners with leading banks and NBFCs to source clean loan business and recover what's owed, through a disciplined, file-numbered process built for accountability at scale.</p>
        
        <div class="hero-actions">
          <a href="contact.php" class="btn btn-primary">File an Enquiry →</a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn btn-wa">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg> Chat on WhatsApp
          </a>
          <a href="#services" class="btn btn-outline">View Our Services</a>
        </div>

        <!-- Verified Feature Pillars (Replacing Numerical Stats) -->
        <div class="hero-highlights">
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>RBI Fair Practices Code Compliant</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Case-Numbered Audit Trail &amp; MIS</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Trained &amp; Verified Field Agents</span></div>
          <div class="highlight-item"><span class="highlight-icon">✓</span> <span>Dedicated Relationship Desk</span></div>
        </div>
      </div>
      
      <div class="seal-wrap reveal in">
        <div class="seal">
          <div class="seal-ring-text">
            <svg viewBox="0 0 200 200">
              <defs><path id="circlePath" d="M 100,100 m -78,0 a 78,78 0 1,1 156,0 a 78,78 0 1,1 -156,0"/></defs>
              <text><textPath href="#circlePath">GURUTMA FINANCIAL SERVICES · EST. <?php echo COMPANY_ESTABLISHED; ?> · NEW DELHI · </textPath></text>
            </svg>
          </div>
          <div class="seal-core">
            <span class="num">FILE</span>
            <span class="cap">Registered &amp; Verified</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="section-deep" id="about">
    <div class="wrap two-col">
      <div class="reveal">
        <div class="eyebrow">About the Company</div>
        <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">A back office built the way lenders actually work</h2>
        <p style="margin-top:18px; font-size:16.5px; color:var(--paper-muted); line-height:1.75;">
          Gurutma Financial Services Pvt. Ltd. was set up to solve a specific problem for banks and NBFCs: loan books grow faster than internal teams can source, verify and, when needed, recover. We operate as an extension of your credit and collections desk — every file we touch carries a case number, an owner, and a status that's visible to you at every stage.
        </p>
        <p style="margin-top:14px; font-size:16.5px; color:var(--paper-muted); line-height:1.75;">
          From first-mile loan sourcing to last-mile field recovery on stressed accounts, our teams follow documented, compliance-first playbooks — not ad-hoc calling lists. That discipline is why lending partners keep our register open year after year.
        </p>
        <ul class="check-list" style="margin-top:26px;">
          <li>RBI Fair Practices Code followed on every recovery engagement</li>
          <li>Trained, background-verified field and tele-calling staff</li>
          <li>Daily MIS and case-status reporting to your team</li>
          <li>Dedicated relationship manager per lending partner</li>
        </ul>
      </div>
      <div class="reveal panel">
        <div class="eyebrow">Firm Details</div>
        <div style="display:flex; flex-direction:column; gap:18px; margin-top:8px;">
          <div>
            <div style="font-family:var(--mono); font-size:11px; color:var(--paper-muted); text-transform:uppercase; letter-spacing:.08em;">Entity</div>
            <div style="font-family:var(--serif); font-size:17px; margin-top:4px; font-weight:600;"><?php echo COMPANY_NAME; ?></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:11px; color:var(--paper-muted); text-transform:uppercase; letter-spacing:.08em;">Registered Office</div>
            <div style="font-family:var(--serif); font-size:17px; margin-top:4px; font-weight:600;"><?php echo OFFICE_ADDRESS; ?></div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:11px; color:var(--paper-muted); text-transform:uppercase; letter-spacing:.08em;">Practice Areas</div>
            <div style="font-family:var(--serif); font-size:17px; margin-top:4px; font-weight:600;">Loan Sourcing · Collections · NPA Recovery</div>
          </div>
          <div>
            <div style="font-family:var(--mono); font-size:11px; color:var(--paper-muted); text-transform:uppercase; letter-spacing:.08em;">Client Base</div>
            <div style="font-family:var(--serif); font-size:17px; margin-top:4px; font-weight:600;">Banks, NBFCs &amp; Housing Finance Companies</div>
          </div>
          <span class="stamp-note verified" style="margin-top:6px;">● Compliance-First Operations</span>
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

        <a href="field-collection.php" class="service-card">
          <div class="service-card-header">
            <span class="idx">FILE 05</span>
            <div class="service-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
          </div>
          <h3>Field Collection Services</h3>
          <p>Trained, verified field agents for doorstep visits, notice serving and on-ground recovery.</p>
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
          <span class="go">Open a file →</span>
        </a>

      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="section-dark">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow on-dark">Why Choose Us</div>
        <h2>Discipline is the product</h2>
        <p>Sourcing and recovery are relationship businesses. We treat the process like an audit trail — because your regulator will ask for one.</p>
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

  <!-- PROCESS -->
  <section class="section-paper" id="process">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Process Overview</div>
        <h2>How a file moves through our register</h2>
        <p>The same five steps, whether it's a fresh sourcing lead or a two-year NPA.</p>
      </div>
      
      <div class="process-track reveal">
        <div class="process-step">
          <span class="step-num">01</span>
          <h4>Intake &amp; File Opening</h4>
          <p>Portfolio or lead data is received, validated and logged with a unique case file number.</p>
        </div>
        <div class="process-step">
          <span class="step-num">02</span>
          <h4>Verification</h4>
          <p>Identity, address and document checks are completed before any outreach begins.</p>
        </div>
        <div class="process-step">
          <span class="step-num">03</span>
          <h4>Assignment</h4>
          <p>The file is routed to the right team — tele-calling, field, or legal-track — based on bucket and risk.</p>
        </div>
        <div class="process-step">
          <span class="step-num">04</span>
          <h4>Active Work &amp; Reporting</h4>
          <p>Contact attempts, visits and settlements are logged daily and visible to your team in real time.</p>
        </div>
        <div class="process-step">
          <span class="step-num">05</span>
          <h4>Closure &amp; Handover</h4>
          <p>Disbursement, recovery or settlement is confirmed and the file is closed with a full audit trail.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ENQUIRY FORM -->
  <section class="section-deep" id="enquiry">
    <div class="wrap two-col">
      <div class="reveal">
        <div class="eyebrow">Client Enquiry</div>
        <h2 style="font-size:clamp(26px,3vw,38px); color:var(--ink);">Open a case with our team</h2>
        <p style="margin-top:16px; font-size:16.5px; color:var(--paper-muted); max-width:48ch; line-height:1.7;">
          Tell us about your portfolio or requirement. A relationship manager will review the details and respond within one business day.
        </p>
        <ul class="check-list" style="margin-top:24px; max-width:44ch;">
          <li>No obligation — this is a scoping conversation</li>
          <li>NDA available for portfolio-level discussions</li>
          <li>We reply from a named relationship manager, not a ticket queue</li>
        </ul>
      </div>
      <div class="reveal">
        <div class="form-panel">
          
          <?php if ($formSubmitted && $formSuccess): ?>
            <div class="alert-banner-success">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <div>
                <strong>Enquiry Filed Successfully!</strong><br>
                Thank you, <?php echo htmlspecialchars($name); ?>. Our relationship management team will reach out within one business day.
              </div>
            </div>
          <?php endif; ?>

          <?php if ($formSubmitted && !empty($formError)): ?>
            <div class="alert-banner-error">
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
                <label for="company">Company / Institution</label>
                <input type="text" id="company" name="company" placeholder="Bank / NBFC name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="field">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required placeholder="+91 98xxxxxxxx" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
              </div>
              <div class="field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@company.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
              </div>
            </div>
            <div class="field">
              <label for="service">Service Required</label>
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
              <label for="message">Brief Requirement</label>
              <textarea id="message" name="message" placeholder="Portfolio size, geography, bucket / DPD range, or any other context"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>
            <button type="submit" class="btn btn-brass" style="width:100%; justify-content:center;">Submit Case Enquiry</button>
            <p class="form-note">By submitting, you agree to be contacted regarding your enquiry. We do not share your data with third parties.</p>
            <div class="form-success"><span>✓</span> Enquiry filed — our team will reach out within one business day.</div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT + MAP -->
  <section class="section-paper">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Contact Information</div>
        <h2>Visit or reach our registered office</h2>
      </div>
      <div class="info-grid reveal">
        <div class="info-block">
          <div class="lbl">Office Address</div>
          <div class="val"><?php echo COMPANY_NAME; ?><br><?php echo OFFICE_ADDRESS; ?></div>
        </div>
        <div class="info-block">
          <div class="lbl">Phone &amp; WhatsApp</div>
          <div class="val"><a href="tel:<?php echo PHONE_RAW; ?>"><?php echo PHONE_NUMBER; ?></a></div>
        </div>
        <div class="info-block">
          <div class="lbl">Email</div>
          <div class="val"><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></div>
        </div>
      </div>
      <div class="map-frame reveal">
        <iframe src="https://www.google.com/maps?q=Nehru%20Place%2C%20New%20Delhi&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Gurutma Financial Services office location"></iframe>
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
