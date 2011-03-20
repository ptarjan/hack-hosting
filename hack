<VirtualHost *:80>
  ServerAdmin admin@paulisageek.com
  ServerName hack.camphackathon.com
  ServerAlias hack.paulisageek.com
  UseCanonicalName Off
  DocumentRoot /var/www/hack/
  ErrorLog /var/log/apache2/hack-error.log
  CustomLog /var/log/apache2/hack-access.log combined
  DirectoryIndex index.php index.html
</VirtualHost>

<VirtualHost *:80>
  ServerAdmin admin@paulisageek.com
  ServerName *.hack.camphackathon.com
  ServerAlias *.hack.paulisageek.com
  UseCanonicalName Off
  VirtualDocumentRoot /home/%1/www/
  ErrorLog /var/log/apache2/hack-error.log
  CustomLog /var/log/apache2/hack-access.log combined
  DirectoryIndex index.php index.html
</VirtualHost>
