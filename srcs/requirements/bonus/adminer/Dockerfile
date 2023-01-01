# Base Image (Currently Most Stable Version 3.16)
FROM        alpine:3.16

# Package Installation
RUN         apk update && \
            apk add curl php8 php8-session php8-fpm php8-mysqli && \
            wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
            chmod +x /usr/bin/dumb-init

EXPOSE 8000

# Copy Files
COPY ./conf/www.conf /etc/php/8/fpm/pool.d/
COPY ./tools/entry.sh /tmp/run_adminer.sh

# Permission Control
RUN         chmod +x /tmp/run_adminer.sh

# Handle Every Signal Correctly by Dumb Init to PID 1
ENTRYPOINT  [ "/usr/bin/dumb-init", "--" ]

# Command to Execute by Entrypoint
CMD         [ "sh", "-c", "/tmp/run_adminer.sh" ]
