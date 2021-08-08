build:
	docker-compose \
		-f docker-compose-adminer.yml \
		-f docker-compose-mysql.yml \
		-f docker-compose-redis.yml \
		-f docker-compose-redisinsight.yml \
		-f docker-compose-php-fpm.yml \
		-f docker-compose-nginx.yml \
		build --no-cache

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

buildNode:
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose -f docker-compose-node.yml build --no-cache

upNode:
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose -f docker-compose-node.yml up -d

upfNode:
	cd ./resources/view && ./init_node_modules.sh && cd ../../ && \
	docker-compose -f docker-compose-node.yml up

down:
	docker-compose -f docker-compose-node.yml down

