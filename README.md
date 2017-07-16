## Upload it

It's a WebM video sharing site. Where you can upload WebM videos up to 40 MiB in size.

## Setting up

Clone/download this repo and extract it into the Apache folder.

Than create a MySQL database from the ```uploadit.sql``` script.

After that configure Apache VirtualHost:
```
<VirtualHost *:80>
       DocumentRoot /var/www/html/uploadit/public
       ServerName your-domain.domain
       ServerAlias www.your-domain.domain
       <Directory /var/www/html/uploadit/public>
               Allowoverride All
       </Directory>
       ErrorLog ${APACHE_LOG_DIR}/error.log
       CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

In ```/public/``` create a folder ```storage``` 
than create a folder ```uploads``` in ```/storage/app/public/```
after create a shortcut to the ```/storage/app/public/``` folder in the ```/public/storage/``` folder.

Wola the the site is up!
