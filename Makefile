build:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		up -d --build --force-recreate

up:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		up -d

upf:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		up

down:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		down
