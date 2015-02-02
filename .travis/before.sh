# composer specific
mkdir -p ~/.composer
cp .travis/.travis.composer.json ~/.composer/config.json
composer install --prefer-dist

# set environment and create the initial database
cp .env.testing .env
touch storage/testing.sqlite

# migrate the database once
php artisan migrate