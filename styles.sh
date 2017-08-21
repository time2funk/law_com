#!/bin/bash

echo ">>>> Styles script start"

php app/console cache:clear --env=prod
rm web/css/*
rm web/js/*
php app/console assetic:dump --env=prod --no-debug

echo ">>>> Styles script stop"
