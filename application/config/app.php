<?php
$config['app.name'] = "";
$config['app.shortName'] = "";
$config['app.version'] = "v1.0.0-beta";
$config['app.description'] = "";
$config['app.email'] = "no-reply@funkd.com";
$config['app.phone'] = "";
$config['app.themeColor'] = "#24009c";

// SMTP Config
$smtpConfig['development'] = [
   'useragent' => $config['app.name'],
   'protocol' => 'smtp',
   'smtp_host' => 'smtp.mailtrap.io',
   'smtp_port' => 2525,
   'smtp_user' => '6841176ada4f21',
   'smtp_pass' => '6b1d4cada97228',
   'crlf' => "\r\n",
   'newline' => "\r\n",
   'mailtype' => 'html',
   'validate' => true,
];
$smtpConfig['production'] = array_merge($smtpConfig['development'], [
   'smtp_host' => 'mail.creativewavetech.in',
   'smtp_user' => $config['app.email'],
   'smtp_pass' => '+g?Ta@fCpWOD',
   'smtp_port' => 587,
   //'smtp_crypto' => 'ssl',
]);
$smtpConfig['production'] = array_merge($smtpConfig['development'], [
   'smtp_host' => 'smtp.gmail.com',
   'smtp_user' => 'creativewavetech@gmail.com',
   'smtp_pass' => 'mbabiwkxhubopuyo',
   'smtp_port' => 587,
   'smtp_crypto' => 'tls',
]);

$config['smtp'] = $smtpConfig['production'];
