#!/usr/bin/make

SHELL = /bin/sh

.PHONY : help build latest install lowest test 'shell' clean
.DEFAULT_GOAL : help

help: ## Show this help
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[32m%-14s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## Build docker image for local development
	docker compose build

install: ## Install regular PHP dependencies
	docker compose run --rm --remove-orphans app composer install --no-interaction --prefer-dist

test: ## Execute php tests and linters
	docker compose run --rm --remove-orphans app composer test

phpunit: ## Execute PHPUnit tests
	docker compose run --rm --remove-orphans app composer phpunit

shell: ## Start shell into container with php
	docker compose run --rm --remove-orphans app sh

clean: ## Remove all dependencies and unimportant files
	-rm -Rf ./vendor

