# mysql 켜질 때까지!
sleep 10

# https://make.wordpress.org/cli/handbook/guides/installing/
# wp-cli installation
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# wp-cli download
chmod 777 -R /var/www
cd /var/www

wp core download --allow-root --path=/var/www

cp /tmp/wp-config.php /var/www

wp core install --allow-root --path=/var/www \
								--url=sunbchoi.42.fr \
								--title=Inception \
								--admin_user=sunbchoi \
								--admin_password=sunbchoi42 \
								--admin_email=sunbchoi@student.42seoul.kr \
								--skip-email

wp user create \
							user user@student.forest.kr \
							--allow-root --path=/var/www \
							--role=author \
							--user_pass=user42

chmod 777 -R /var/www
#mariadb 전에 php가 켜지면 안됨!
sleep 5
exec php-fpm8 -F