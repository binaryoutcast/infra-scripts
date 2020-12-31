yum -y install net-tools wget
cp service /usr/local/sbin/
chmod +x /usr/local/sbin/service
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
cp nginx.repo /etc/yum.repos.d/
yum --enablerepo=remi,remi-php73 -y install nginx php-fpm php-common
yum --enablerepo=remi,remi-php73 -y install php-opcache php-pecl-apcu php-cli php-pear php-pdo php-mysqlnd php-pecl-memcache php-pecl-memcached php-gd php-mbstring php-mcrypt php-xml
service httpd stop
service nginx start
service php-fpm start
systemctl disable httpd.service
systemctl enable nginx.service
systemctl enable php-fpm.service
cp nginx.conf /etc/nginx/
cp www.conf /etc/php-fpm.d/
mkdir /srv/www
mkdir /etc/nginx/sites-available
mkdir /etc/nginx/sites-enabled
cp website.conf /etc/nginx/sites-available/
service nginx restart
service php-fpm restart
cp MariaDB.repo /etc/yum.repos.d/
rpm --import https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
yum -y install MariaDB-server MariaDB-client
systemctl enable mariadb
service mariadb start
cp webmin.repo /etc/yum.repos.d/
wget http://www.webmin.com/jcameron-key.asc
rpm --import jcameron-key.asc
rm -f jcameron-key.asc
yum -y install webmin rrdtool-perl perl-CGI perl-DBD-MySQL


