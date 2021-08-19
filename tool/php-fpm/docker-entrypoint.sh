#!/bin/sh

#write storage dir
chmod -R 777 ./storage

exec "$@";
