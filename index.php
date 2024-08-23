<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /

    RewriteRule ^about$ about.html [L]
    RewriteRule ^blog$ blog.html [L]
    RewriteRule ^contact$ contact.html [L]
    RewriteRule ^gallery$ gallery.html [L]
    RewriteRule ^$ index.html [L]

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /404.html [L]
</IfModule>
