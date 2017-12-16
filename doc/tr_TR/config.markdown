Yapılandırma dosyası
===========

Kanboard'un varsayılan ayarlarını proje kökünde veya `data`  klasöründe  `config.php` dosyasına ekleyerek özelleştirebilirsiniz.
`config.default.php` dosyasını` config.php` olarak yeniden adlandırabilir ve istenen değerleri değiştirebilirsiniz.

Hata ayıklama modunu etkinleştir/devre dışı bırak
-------------------------

```php
define('DEBUG', true);
define('LOG_DRIVER', 'file'); // Other drivers are: syslog, stdout, stderr or file
```

Hata ayıklama modunu etkinleştirirseniz günlük sürücüsü tanımlanmalıdır.
Hata ayıklama modu tüm SQL sorgularını ve sayfaları oluşturmak için harcanan süreyi günlüğe kaydeder.

Eklentiler
-------

Eklenti klasörü:

```php
define('PLUGINS_DIR', 'data/plugins');
```

Kullanıcı arayüzünden eklenti kurulumunu etkinleştirme/devre dışı bırakma:

```php
define('PLUGIN_INSTALLER', true); // Default is true
```

Varsayılan eklenti dizini URL'sini değiştirin:

```php
define('PLUGIN_API_URL', 'https://kanboard.org/plugins.json');
```

Yüklenen dosyalar için klasör
-------------------------

```php
define('FILES_DIR', 'data/files');
```

Önbellek parametreleri
----------------

```php
// Available cache drivers are "file" and "memory"
define('CACHE_DRIVER', 'memory');

// Cache folder to use if cache driver is "file" (must be writeable by the web server user)
define('CACHE_DIR', DATA_DIR.DIRECTORY_SEPARATOR.'cache');
```

Url yeniden yazmayı etkinleştir/devre dışı bırak
--------------------------

```php
define('ENABLE_URL_REWRITE', false);
```

E-posta yapılandırması
-------------------

```php
// Enable/disable email configuration from the user interface
define('MAIL_CONFIGURATION', true);

// E-mail address used for the "From" header (notifications)
define('MAIL_FROM', 'notifications@kanboard.local');

// Mail transport to use: "smtp", "sendmail" or "mail" (PHP mail function)
define('MAIL_TRANSPORT', 'mail');

// SMTP configuration to use when the "smtp" transport is chosen
define('MAIL_SMTP_HOSTNAME', '');
define('MAIL_SMTP_PORT', 25);
define('MAIL_SMTP_USERNAME', '');
define('MAIL_SMTP_PASSWORD', '');
define('MAIL_SMTP_ENCRYPTION', null); // Valid values are "null", "ssl" or "tls"

// Sendmail command to use when the transport is "sendmail"
define('MAIL_SENDMAIL_COMMAND', '/usr/sbin/sendmail -bs');
```

Veritabanı ayarları
-----------------

```php
// Run automatically database migrations
// If set to false, you will have to run manually the SQL migrations from the CLI during the next Kanboard upgrade
// Do not run the migrations from multiple processes at the same time (example: web page + background worker)
define('DB_RUN_MIGRATIONS', true);

// Database driver: sqlite, mysql or postgres (sqlite by default)
define('DB_DRIVER', 'sqlite');

// Mysql/Postgres username
define('DB_USERNAME', 'root');

// Mysql/Postgres password
define('DB_PASSWORD', '');

// Mysql/Postgres hostname
define('DB_HOSTNAME', 'localhost');

// Mysql/Postgres database name
define('DB_NAME', 'kanboard');

// Mysql/Postgres custom port (null = default port)
define('DB_PORT', null);

// Mysql SSL key
define('DB_SSL_KEY', null);

// Mysql SSL certificate
define('DB_SSL_CERT', null);

// Mysql SSL CA
define('DB_SSL_CA', null);
```

LDAP ayarları
-------------

```php
// Enable LDAP authentication (false by default)
define('LDAP_AUTH', false);

// LDAP server hostname
define('LDAP_SERVER', '');

// LDAP server port (389 by default)
define('LDAP_PORT', 389);

// By default, require certificate to be verified for ldaps:// style URL. Set to false to skip the verification
define('LDAP_SSL_VERIFY', true);

// Enable LDAP START_TLS
define('LDAP_START_TLS', false);

// By default Kanboard lowercase the ldap username to avoid duplicate users (the database is case sensitive)
// Set to true if you want to preserve the case
define('LDAP_USERNAME_CASE_SENSITIVE', false);

// LDAP bind type: "anonymous", "user" or "proxy"
define('LDAP_BIND_TYPE', 'anonymous');

// LDAP username to use with proxy mode
// LDAP username pattern to use with user mode
define('LDAP_USERNAME', null);

// LDAP password to use for proxy mode
define('LDAP_PASSWORD', null);

// LDAP DN for users
// Example for ActiveDirectory: CN=Users,DC=kanboard,DC=local
// Example for OpenLDAP: ou=People,dc=example,dc=com
define('LDAP_USER_BASE_DN', '');

// LDAP pattern to use when searching for a user account
// Example for ActiveDirectory: '(&(objectClass=user)(sAMAccountName=%s))'
// Example for OpenLDAP: 'uid=%s'
define('LDAP_USER_FILTER', '');

// LDAP attribute for username
// Example for ActiveDirectory: 'samaccountname'
// Example for OpenLDAP: 'uid'
define('LDAP_USER_ATTRIBUTE_USERNAME', 'uid');

// LDAP attribute for user full name
// Example for ActiveDirectory: 'displayname'
// Example for OpenLDAP: 'cn'
define('LDAP_USER_ATTRIBUTE_FULLNAME', 'cn');

// LDAP attribute for user email
define('LDAP_USER_ATTRIBUTE_EMAIL', 'mail');

// LDAP attribute to find groups in user profile
define('LDAP_USER_ATTRIBUTE_GROUPS', 'memberof');

// LDAP attribute for user avatar image: thumbnailPhoto or jpegPhoto
define('LDAP_USER_ATTRIBUTE_PHOTO', '');

// LDAP attribute for user language, example: 'preferredlanguage'
// Put an empty string to disable language sync
define('LDAP_USER_ATTRIBUTE_LANGUAGE', '');

// Allow automatic LDAP user creation
define('LDAP_USER_CREATION', true);

// LDAP DN for administrators
// Example: CN=Kanboard-Admins,CN=Users,DC=kanboard,DC=local
define('LDAP_GROUP_ADMIN_DN', '');

// LDAP DN for managers
// Example: CN=Kanboard Managers,CN=Users,DC=kanboard,DC=local
define('LDAP_GROUP_MANAGER_DN', '');

// Enable LDAP group provider for project permissions
// The end-user will be able to browse LDAP groups from the user interface and allow access to specified projects
define('LDAP_GROUP_PROVIDER', false);

// LDAP Base DN for groups
define('LDAP_GROUP_BASE_DN', '');

// LDAP group filter
// Example for ActiveDirectory: (&(objectClass=group)(sAMAccountName=%s*))
define('LDAP_GROUP_FILTER', '');

// LDAP user group filter
// If this filter is configured, Kanboard will search user groups in LDAP_GROUP_BASE_DN
// Example for OpenLDAP: (&(objectClass=posixGroup)(memberUid=%s))
define('LDAP_GROUP_USER_FILTER', '');

// LDAP attribute for the group name
define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');
```

Tersine-Proxy Kimlik Doğrulama ayarları
-------------------------------------

```php
// Enable/disable the reverse proxy authentication
define('REVERSE_PROXY_AUTH', false);

// Header name to use for the username
define('REVERSE_PROXY_USER_HEADER', 'REMOTE_USER');

// Username of the admin, by default blank
define('REVERSE_PROXY_DEFAULT_ADMIN', '');

// Default domain to use for setting the email address
define('REVERSE_PROXY_DEFAULT_DOMAIN', '');
```

RememberMe Kimlik Doğrulama ayarları hatırla
----------------------------------

```php
// Enable/disable remember me authentication
define('REMEMBER_ME_AUTH', true);
```

Güvenli HTTP üstbilgileri ayarları
----------------------------

```php
// Enable or disable "Strict-Transport-Security" HTTP header
define('ENABLE_HSTS', true);

// Enable or disable "X-Frame-Options: DENY" HTTP header
define('ENABLE_XFRAME', true);
```

Günlüğe kaydetme
-------

By default, Kanboard do not log anything.
If you want to enable the logging, you have to set a log driver.

```php
// Available log drivers: syslog, stderr, stdout or file
define('LOG_DRIVER', '');

// Log filename if the log driver is "file"
define('LOG_FILE', __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'debug.log');
```

Kaba kuvvet Brute-force koruması
---------------------

```php
// Enable captcha after 3 authentication failure
define('BRUTEFORCE_CAPTCHA', 3);

// Lock the account after 6 authentication failure
define('BRUTEFORCE_LOCKDOWN', 6);

// Lock account duration in minute
define('BRUTEFORCE_LOCKDOWN_DURATION', 15);
```

Oturum
-------

```php
// Session duration in second (0 = until the browser is closed)
// See http://php.net/manual/en/session.configuration.php#ini.session.cookie-lifetime
define('SESSION_DURATION', 0);
```

HTTP İstemcisi
-----------

Harici HTTP isteklerinin bir proxy üzerinden gönderilmesi gerekiyorsa:

```php
define('HTTP_PROXY_HOSTNAME', '');
define('HTTP_PROXY_PORT', '3128');
define('HTTP_PROXY_USERNAME', '');
define('HTTP_PROXY_PASSWORD', '');
```

Kendinden imzalı sertifikalara izin vermek için:

```php
// Set to false to allow self-signed certificates
define('HTTP_VERIFY_SSL_CERTIFICATE', true);
```

Çeşitli ayarlar
----------------

```php
// Escape html inside markdown text
define('MARKDOWN_ESCAPE_HTML', true);

// API alternative authentication header, the default is HTTP Basic Authentication defined in RFC2617
define('API_AUTHENTICATION_HEADER', '');

// Hide login form, useful if all your users use Google/Github/ReverseProxy authentication
define('HIDE_LOGIN_FORM', false);

// Disabling logout (for external SSO authentication)
define('DISABLE_LOGOUT', false);

// Override API token stored in the database, useful for automated tests
define('API_AUTHENTICATION_TOKEN', 'My unique API Token');

// TOTP (2FA) issuer name
define('TOTP_ISSUER', 'Kanboard');
```
