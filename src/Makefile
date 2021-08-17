install:
	composer install
	touch .env
	cp .env.example .env
	php data/migrations/ServicesMigration.php
	php data/migrations/UsersMigration.php	
