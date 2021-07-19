FROM registry.access.redhat.com/ubi7/ubi
USER root
LABEL maintainer="hwcho"
# Update image
RUN yum update --disableplugin=subscription-manager -y && rm -rf /var/cache/yum
RUN yum install --disableplugin=subscription-manager httpd -y && rm -rf /var/cache/yum
# Add default Web page and expose port
# RUN echo "The Web Server is Running" > /var/www/html/index.html
RUN mkdir -p /var/www/html/styles
RUN mkdir -p /var/www/html/images
COPY index.html /var/www/html/index.html
COPY images/gomi.jpg /var/www/html/images/gomi.jpg
COPY styles/style.css /var/www/html/styles/style.css
EXPOSE 80
# Start the service
CMD ["-D", "FOREGROUND"]
ENTRYPOINT ["/usr/sbin/httpd"]