FROM registry.access.redhat.com/rhscl/httpd-24-rhel7:latest
USER root
LABEL maintainer="hwcho"
# Update image
RUN yum update --disableplugin=subscription-manager -y && rm -rf /var/cache/yum
# Add default Web page and expose port
# RUN echo "The Web Server is Running" > /var/www/html/index.html
#COPY src/index.html /var/www/html/index.html
#COPY src/myfile.py /var/www/html/myfile.py
#COPY src/home.html /var/www/html/home.html
#EXPOSE 80
# Start the service
#CMD ["-D", "FOREGROUND"]
#ENTRYPOINT ["/usr/sbin/httpd"]