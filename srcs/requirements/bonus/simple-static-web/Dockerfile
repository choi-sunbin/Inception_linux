FROM alpine:3.16

RUN apk update && apk upgrade

RUN apk add nodejs git dumb-init && \
	git clone https://github.com/choi-sunbin/simple-static-web

EXPOSE 3000

COPY ./tools/entrypoint.sh /tmp/

RUN chmod +x /tmp/entrypoint.sh

ENTRYPOINT [ "/usr/bin/dumb-init", "/tmp/entrypoint.sh" ]

CMD [ "node", "/simple-static-web/index.js" ]