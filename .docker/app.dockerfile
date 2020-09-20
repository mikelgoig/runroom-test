FROM php:7.4-cli

ENV PATH="./vendor/bin:${PATH}"

# Install Linux packages.
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
  git \
  libzip-dev \
  unzip \
  wget

# Install Docker PHP extensions.
RUN docker-php-ext-install \
  zip

# Copy PHP config files.
COPY .docker/php/composer-installer.sh /usr/local/bin/composer-installer

# Copy the application.
COPY . /var/www

# Install Composer.
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN chmod +x /usr/local/bin/composer-installer \
  && /usr/local/bin/composer-installer \
  && mv composer.phar /usr/local/bin/composer \
  && chmod +x /usr/local/bin/composer \
  && composer check-platform-reqs --working-dir=/var/www/ \
  && composer global require hirak/prestissimo --prefer-dist --no-progress --no-suggest --classmap-authoritative \
  && composer clear-cache \
  && composer --version

CMD tail -f /dev/null
