install:
	composer install
test:
	composer run-script phpunit tests
run:
	php artisan serve