# mysql 켜질 때까지!
sleep 10

# https://make.wordpress.org/cli/handbook/guides/installing/
# wp-cli installation
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# wp-cli download
chmod 777 -R /var/www/wordpress
cd /var/www/wordpress

wp core download --allow-root --path=/var/www/wordpress

cp /tmp/wp-config.php /var/www/wordpress/wp-config.php
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~111111111111~"
wp core install --allow-root --path=/var/www/wordpress \
								--url=sunbchoi.42.fr \
								--title=Inception \
								--admin_user=sunbchoi \
								--admin_password=sunbchoi42 \
								--admin_email=sunbchoi@student.42seoul.kr \
								--skip-email

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~vv2222222vvvv~"

wp plugin install --allow-root redis-cache --activate --path=/var/www/wordpress
wp plugin update --allow-root --all --path=/var/www/wordpress
wp redis enable --allow-root --path=/var/www/wordpress

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~vv233333322333v~"

wp user create \
			evaluator evaluator@student.42seoul.kr \
			--allow-root --path=/var/www/wordpress \
			--role=author \
			--user_pass=evaluator42

chmod 777 -R /var/www/wordpress
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
#mariadb 전에 php가 켜지면 안됨!

sleep 5
exec php-fpm8 -F