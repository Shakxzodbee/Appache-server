<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteRule ^index\.html$ - [L]
    RewriteRule ^about\.html$ - [L]
    RewriteRule ^blog\.html$ - [L]
    RewriteRule ^gallery\.html$ - [L]
    RewriteRule ^contac\.html$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ /index.html [L]
</IfModule>
