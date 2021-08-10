# php
build:
	./init_composer.sh && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		build --no-cache

up:
	./init_composer.sh && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		up

upd:
	./init_composer.sh && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		up -d

down:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		down


# node - php
buildFrontAndBack:
	./init_composer.sh && \
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-node.yml \
		-f docker-compose-nginx.yml \
		build --no-cache

upFrontAndBack:
	./init_composer.sh && \
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-node.yml \
		-f docker-compose-nginx.yml \
		up

updFrontAndBack:
	./init_composer.sh && \
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-node.yml \
		-f docker-compose-nginx.yml \
		up -d

downFrontAndBack:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-node.yml \
		-f docker-compose-nginx.yml \
		down
