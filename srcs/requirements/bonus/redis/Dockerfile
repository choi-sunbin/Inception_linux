# Base Image (Currently Most Stable Version 3.16)
FROM        alpine:3.16

# Package Installation
RUN apk update && apk upgrade

RUN         apk add redis && \
            wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
            chmod +x /usr/bin/dumb-init

# Copy Files
COPY        tools/entry.sh /tmp/run_redis.sh

# Permission Control
RUN         chmod +x /tmp/run_redis.sh

# Handle Every Signal Correctly by Dumb Init to PID 1
ENTRYPOINT  [ "/usr/bin/dumb-init", "--" ]

# Command to Execute by Entrypoint
CMD         [ "sh", "-c", "/tmp/run_redis.sh" ]
