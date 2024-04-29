default: up down import-db

COMPOSE_FILE = docker-compose.yml
MARIADB_CONTAINER_NAME = JSARC-DB
DATABASE_NAME = JSARC
DUMP_FILE = ./tmp/dump.sql.gz
ROOT_PASSWORD = demopassword

.PHONY: help
help: ## Print this help with list of available commands/targets and their purpose
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[36m\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

.PHONY: up
up: ## Run Docker compose
	docker compose up -d

.PHONY: down
down: ## Shutdown
	docker-compose -f $(COMPOSE_FILE) down

.PHONY: import-db
import-db: ## Import a test db
	docker exec -i $(MARIADB_CONTAINER_NAME) gunzip -c /docker-entrypoint-initdb.d/$(notdir $(DUMP_FILE)) | \
  docker exec -i $(MARIADB_CONTAINER_NAME) mysql -uroot -p$(ROOT_PASSWORD) $(DATABASE_NAME)

.PHONY: import
import: up import-db down
