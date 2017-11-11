# Section 11_Apache_HTTP_Server

This Section covers Apache HTTP Server Config options.

Note: Some examples based on David's lecture content.


## Config Overview

### Server Configuration (httpd.conf)
Modified by Server Admin.

### By Directory (.htaccess)
Applied, by directory, in .htaccess file.

#### Files / FilesMatch
```
<Files .htaccess>
    Order allow,deny
    Deny from all
</Files>
```

#### Expires
```
ExpiresActive On

ExpiresByType text/html   A3600
# HTML expires in 1 hour

ExpiresByType image/gif   A2592000
# GIF  expires in 30 days

ExpiresByType image/jpeg  A2592000
# JPEG expires in 30 days

ExpiresByType image/png   A2592000
# PNG  expires in 30 days

# types not specified
ExpiresDefault "now plus 1 day"
#  expires in 1 day
```

### Do Not Cache
```
Cache-control: no-cache
Pragma: no-cache
Expires: <set to now>
```

### Compress
```
AddOutputFilterByType DEFLATE text/html
AddOutputFilterByType DEFLATE text/css
AddOutputFilterByType DEFLATE text/plain
AddOutputFilterByType DEFLATE text/xml
AddOutputFilterByType DEFLATE text/css
AddOutputFilterByType DEFLATE application/javascript
```

### Errors
```
ErrorDocument 401 /error/status401.html
ErrorDocument 403 /error/status403.html
ErrorDocument 404 /error/status404.html
```

### Redirect
```
Redirect 302 /about    https://YOUR_DOMAIN/YOUR_DIR_PATH/about
```

### Rewrite
```
RewriteEngine On
RewriteBase /

RewriteRule ^lpr-(.*)$ https://webtrac.littletonrec.com/wbwsc/webtrac.wsc/wbsearch.html?per=10&xxsearch=yes&xxdispmap=no+&xxmulti-list=&xxmulti-lbls=&xxrowid=&xxmod=ar&xxactivitynumber=$1&xxage=&xxgrade=&xxkeyword=&xxkeywordoption=N&xxtype=&xxcategory=&xxsortoption=ActivityNumber&xxdisplayoption=D&xxsubmit=Search
```

### Redirect
```
Redirect  /registration https://www.signmeup.com/site/reg/register.aspx?fid=B42VRH7

Redirect /map http://maps.google.com/maps/ms?ie=UTF8&hl=en&msa=0&msid=101999702593116464805.00046f1a27a9feb5aacaf&ll=42.52946,-71.485934&spn=0.018975,0.018239&z=15
```

## Links:

 * [Apache HTTP Server Project](http://httpd.apache.org/)
