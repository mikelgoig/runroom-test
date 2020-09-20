#!/bin/zsh

source .cli/alias.sh

# Run Docker in "detached" mode.
dc up -d

# Install Composer dependencies.
[ -f composer.lock ] && ( dc:composer check-platform-reqs )
dc:composer install --prefer-dist --no-progress --no-suggest --no-interaction

# Check PHP.
dc:composer check

# Test PHP.
dc:composer test

.cli/down.sh
