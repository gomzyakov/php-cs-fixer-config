#!/usr/bin/make

SHELL = /bin/sh

.PHONY : help build latest install lowest test 'shell' clean
.DEFAULT_GOAL : help

help: ## Show this help
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[32m%-14s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## Build docker image for local development
	docker compose build

latest: clean ## Install latest php dependencies
	docker compose run app composer update -n --ansi --prefer-dist --prefer-stable

install: clean ## Install regular php dependencies
	docker compose run app composer update -n --prefer-dist

lowest: clean ## Install lowest php dependencies
	docker compose run app composer update -n --ansi --prefer-dist --prefer-lowest

test: ## Execute php tests and linters
	docker compose run app composer test

shell: ## Start shell into container with php
	docker compose run app sh

clean: ## Remove all dependencies and unimportant files
	-rm -Rf ./composer.lock ./vendor

