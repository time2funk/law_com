#!/bin/bash

echo ">>>> Update script start"

sudo chown -R sharova:sharova ../sharovalaw-com

git pull

php app/console cache:clear --env=prod
rm web/css/*
rm web/js/*
php app/console assetic:dump --env=prod --no-debug

sudo chown -R www-data:www-data ../sharovalaw-com

echo ">>>> Update script stop"
