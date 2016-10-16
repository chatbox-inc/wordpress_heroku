install:
	touch .env
	./vendor/bin/wp core download --allow-root --force
	cp ./wp-config.local.php ./wordpress/wp-config.php
	./vendor/bin/wp core install --allow-root
	./vendor/bin/wp plugin install --allow-root
	./vendor/bin/wp plugin activate --allow-root
	#./vendor/bin/wp rewrite structure '/%category%/%post_id%/'
	./vendor/bin/wp theme activate mytheme
	#./vendor/bin/wp post delete 1
server:
	php -S localhost:8000 -t wordpress
composer:
	curl -sS https://getcomposer.org/installer | php