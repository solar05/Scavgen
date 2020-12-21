install:
	composer install
lint:
	composer run-script phpcs -- --standard=PSR12 tests app routes
test:
	composer run-script phpunit tests
run:
	php artisan serve