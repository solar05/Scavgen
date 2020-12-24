install:
	composer install
lint:
	composer run-script phpcs -- --standard=PSR12 tests app routes
test:
	composer run-script phpunit tests
run:
	php artisan serve
compose:
	docker-compose up
down:
	docker-compose down
compose-lint:
	docker-compose exec myapp composer run-script phpcs -- --standard=PSR12 tests app routes
compose-test:
	docker-compose exec myapp composer run-script phpunit tests