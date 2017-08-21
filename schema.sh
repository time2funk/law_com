#!/bin/bash

echo ">>>> Schema script start"

sudo chown -R sharova:sharova ../sharovalaw-com

app/console doctrine:schema:update --force

sudo chown -R www-data:www-data ../sharovalaw-com

echo ">>>> Schema script stop"
