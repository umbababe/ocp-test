FROM centos:7
LABEL maintainer=<cellist01@gmail.com>

# openjdk1.8. 설치
RUN mkdir -p /apps && mkdir -p /bin && mkdir -p /src
COPY apache-tomcat-7.0.105.tar.gz /apps
RUN tar xzf /apps/apache-tomcat-7.0.105.tar.gz -C /apps/
RUN mv /apps/apache-tomcat-7.0.105 /apps/tomcat
ENV CATALINA_HOME=/apps/tomcat
ENV CATALINA_BASE=/apps/tomcat
RUN echo "tomcat install complete"

WORKDIR /apps
RUN yum update -y
RUN yum install wget -y
RUN yum list java-1.8.0.232-openjdk-devel.x86_64
RUN yum install java-1.8.0.232-openjdk-devel.x86_64 -y
#RUN yum list java-1.8.0-openjdk-devel.x86_64
#RUN yum install java-1.8.0-openjdk-devel.x86_64 -y
# RUN which javac
RUN readlink -f /usr/bin/java

#ENV JAVA_HOME=/usr/lib/jvm/java-1.8.0-openjdk-1.8.0.232.b09-0.el7_7.x86_64
ENV JAVA_HOME=/usr/lib/jvm/java-1.8.0-openjdk-1.8.0.262.b10-0.el7_8.x86_64
RUN java -version
#RUN cd /apps
RUN echo "java install complete"
#RUN pwd

# Tomcat 설치
#RUN wget http://mirror.apache-kr.org/tomcat/tomcat-7/v7.0.100/bin/apache-tomcat-7.0.100.tar.gz
#RUN tar xzf apache-tomcat-7.0.105.tar.gz
#RUN mv apache-tomcat-7.0.105 /apps/tomcat
#ENV CATALINA_HOME=/apps/tomcat
#ENV CATALINA_BASE=/apps/tomcat
#ENV JRE_HOME=/usr/lib/jvm/java-1.8.0-openjdk-1.8.0.242.b08-0.el7_7.x86_64
#RUN echo "tomcat install complete"


EXPOSE 8080
WORKDIR /app/tomcat/bin
RUN chmod +x /apps/tomcat/bin/catalina.sh
CMD ["/apps/tomcat/bin/catalina.sh", "run"]