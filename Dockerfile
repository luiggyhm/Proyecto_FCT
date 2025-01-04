FROM humpedli/docker-pure-ftpd-mysql

# Sobrescribe el run.sh para que no genere un nuevo archivo mysql.conf
COPY custom-run.sh /run.sh
RUN chmod +x /run.sh