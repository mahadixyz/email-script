# email-script
Simple email sending script using PHPMailer

# Script
This code is written with latest PHPMailer class

# Procedure
Download the PHP Mail Class from PHPMailer [Github Repo](https://github.com/PHPMailer/PHPMailer/)
Select the stable branch and download/clone.
Use the **class.phpmailer.php** and **class.smtp.php** for SMTP Mail Connection.

# Problems and soluitions
## Error: SMTP connect() failed

### On localhost, 
_In case of using a gmail account, "Less secure Apps" setting must be enabled._ To enable, visit https://www.google.com/settings/security/lesssecureapps and set the **Allow less secure apps:** option to **ON**

### On cpanel.
Most hosting provider blocks access to external SMTP servers by default on Cpanel. Contact them to remove these restrictions. 
Alternately, you can use the **webmail** instead.

