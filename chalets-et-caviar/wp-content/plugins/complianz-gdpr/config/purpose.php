<?php
$this->purposes = array(
    'contact' => __('Contact - Through phone,  mail, e-mail and/or webforms', 'complianz-gdpr'),
    'payments' => __('Payments', 'complianz-gdpr'),
    'register-account' => __('Registering an account', 'complianz-gdpr'),
    'newsletters' => __('Newsletters', 'complianz-gdpr'),
    'support-services' => __('To support services or products that your customer wants to buy or have purchased', 'complianz-gdpr'),
    'legal-obligations' => __('To be able to comply with legal obligations', 'complianz-gdpr'),
    'statistics' => __('Compiling and analyzing statistics for website improvement.', 'complianz-gdpr'),
    'offer-personalized-products' => __('To be able to offer personalized products and services.', 'complianz-gdpr'),
);

if (cmplz_has_region('us')) {
    $this->purposes['selling-data-thirdparty'] = __('To sell data to third parties', 'complianz-gdpr');
}
$this->details_per_purpose_us = array(
    'first-lastname' => __('A first and last name', 'complianz-gdpr'),
    'accountname-alias' => __('Accountname or alias', 'complianz-gdpr'),
    'address' => __('A home or other physical address, including street name and name of a city or town', 'complianz-gdpr'),
    'email' => __('An e-mail address', 'complianz-gdpr'),
    'phone' => __('A telephone number', 'complianz-gdpr'),
    'social-security' => __('A social security number', 'complianz-gdpr'),
    'any-other' => __('Any other identifier that permits the physical or online contacting of a specific individual', 'complianz-gdpr'),
    'ip' => __('IP address', 'complianz-gdpr'),
    'signature' => __('A signature', 'complianz-gdpr'),
    'physical-characteristic' => __('Physical characteristics or description', 'complianz-gdpr'),
    'passport' => __('Passport number', 'complianz-gdpr'),
    'drivers-license' => __("Driver's license", 'complianz-gdpr'),
    'state-id' => __('State identification card number', 'complianz-gdpr'),
    'insurance-policy' => __('Insurance policy number', 'complianz-gdpr'),
    'education' => __('Education information', 'complianz-gdpr'),
    'employment' => __('Professional or employment-related information', 'complianz-gdpr'),
    'employment-history' => __('Employment history', 'complianz-gdpr'),
    'bank-account' => __('Bank account number', 'complianz-gdpr'),
    'financial-information' => __('Financial information such as bank account number of credit card number', 'complianz-gdpr'),
    'medical' => __('Medical information', 'complianz-gdpr'),
    'health-insurcance' => __('Health insurance information', 'complianz-gdpr'),
    'commercial' => __('Commercial information, including records of personal property, products or services purchased, obtained, or considered', 'complianz-gdpr'),
    'biometric' => __('Biometric information', 'complianz-gdpr'),
    'internet' => __("Internet activity information, including, but not limited to, browsing history, search history, and information regarding a consumer's interaction with an Internet Web site, application, or advertisement.", 'complianz-gdpr'),
    'geo' => __('Geolocation data', 'complianz-gdpr'),
    'audio' => __('Audio, electronic, visual, thermal, olfactory, or simular information', 'complianz-gdpr'),
);


$this->collected_info_children = array(
    'name' => __('a first and last name','complianz-gdpr'),
    'address' => __('a home or other physical address including street name and name of a city or town','complianz-gdpr'),
    'email-child' => __('an email adress from the child','complianz-gdpr'),
    'email-parent' => __('an email adress from the parent or guardian','complianz-gdpr'),
    'phone' => __('a telephone number','complianz-gdpr'),
    'social-security-nr' => __('a Social Security number','complianz-gdpr'),
    'identifier-online' => __('an identifier that permits the physical or online contacting of a child','complianz-gdpr'),
    'other' => __('other information concerning the child or the parents, combined with an identifier as described above.','complianz-gdpr'),
);