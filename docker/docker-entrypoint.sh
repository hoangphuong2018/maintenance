#!/bin/bash -e

# Copy all templates to /etc/nginx/, evaluate them
# and delete the files


for f in /docker-entrypoint-init.d/*; do
	case "$f" in 
		*.sh) echo "Running $f"; . "$f" ;;
		*)    echo "Ignoring $f" ;;
	esac
	echo 
done

cd /etc/nginx
exec "$@"
