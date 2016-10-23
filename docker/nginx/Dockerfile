FROM nginx:latest
MAINTAINER Ruslan Bekenev <rbekenev@cayugasoft.com>
ADD nginx.conf /etc/nginx/
ADD egometry.conf /etc/nginx/sites-available/

RUN echo "upstream php-upstream {server egometry_php-fpm:9000;}" > /etc/nginx/conf.d/upstream.conf
RUN usermod -u 1000 www-data
RUN rm /etc/nginx/conf.d/default.conf

CMD ["nginx"]

EXPOSE 80 443
