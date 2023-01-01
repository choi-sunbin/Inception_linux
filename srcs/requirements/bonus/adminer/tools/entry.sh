# !/bin/sh
sleep 5

# Check Whether index.php File Exists or Not
if [ ! -f "/var/www/wordpress/adminer/index.php" ]; then
  echo "Adminer INSTALL"
  # Create Directory on WordPress to Serve Adminer
  mkdir -p /var/www/wordpress/adminer
  # Download a Sole Adminer Page
  curl -s -L https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql-en.php --output /var/www/wordpress/adminer/index.php
  sed -i "s/.*listen = 127.0.0.1.*/listen = 8000/g" /etc/php8/php-fpm.d/www.conf
fi

echo "Start Adminer Container"
exec php-fpm8 -F