#!/bin/sh
# Reference http://drupal.org/node/479948#comment-1673488 by pearlbear

SITE=http://stage.sitv.com/
USERNAME=admin
PASS=123456

COOKIES=/tmp/cron-cookies.txt
WGETPARAMS="--quiet -O /dev/null --no-check-certificate --save-cookies $COOKIES --keep-session-cookies --load-cookies $COOKIES"
# if you run drupal in a default language different than English you need to modify this
LOGIN="Log%20in"

wget $WGETPARAMS "${SITE}user"
wget $WGETPARAMS --post-data="name=$USERNAME&pass=$PASS&op=$LOGIN&form_id=user_login" "${SITE}user"
wget $WGETPARAMS " ${SITE}cron.php"