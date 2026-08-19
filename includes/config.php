<?php
// ==========================================================================
// Gurutma Financial Services Pvt. Ltd. — Central Business & Claims Config
// ==========================================================================

if (!defined('COMPANY_NAME')) {
    define('COMPANY_NAME', 'Gurutma Financial Services Pvt. Ltd.');
    define('COMPANY_SHORT', 'Gurutma');
    define('COMPANY_TAGLINE', 'Financial Services Pvt. Ltd.');
    define('COMPANY_ESTABLISHED', '2013');

    // Contact Information
    define('PHONE_NUMBER', '+91 98765 43210');
    define('PHONE_RAW', '919876543210');
    define('EMAIL_ADDRESS', 'contact@gurutmafinancial.com');
    define('OFFICE_ADDRESS', '4th Floor, Hemkunt Tower, Nehru Place, New Delhi – 110019, India');
    define('OFFICE_HOURS', 'Mon – Sat, 9:30 AM – 6:30 PM IST');
    define('WHATSAPP_NUMBER', '919876543210');

    // Compliance & Registrations
    define('RBI_COMPLIANT_TEXT', 'RBI Fair Practices Code Compliant');
    define('CIN_NUMBER', 'U65999DL2013PTC254321');
    define('ISO_CERTIFICATION', 'ISO 27001:2022 Certified Security');

    // Social Media Handles
    define('LINKEDIN_URL', 'https://www.linkedin.com/company/gurutma-financial');
    define('FACEBOOK_URL', 'https://www.facebook.com/gurutmafinancial');
    define('TWITTER_URL', 'https://twitter.com/gurutmafin');
    define('INSTAGRAM_URL', 'https://www.instagram.com/gurutmafinancial');

    // Performance Claims & Achievements
    $COMPANY_STATS = [
        'years_experience'   => '12+',
        'years_label'        => 'Years in Practice',
        'portfolio_serviced' => '₹1,250 Cr+',
        'portfolio_label'    => 'Portfolio Serviced',
        'field_locations'    => '150+',
        'locations_label'    => 'PAN-India Locations',
        'client_retention'   => '98%',
        'retention_label'    => 'Client Retention Rate',
        'cases_resolved'     => '50,000+',
        'cases_label'        => 'Files Processed & Closed',
        'dra_agents'         => '350+',
        'agents_label'       => 'DRA Certified Field Agents'
    ];
}
