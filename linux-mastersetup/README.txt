Easy setup script for Centos & (minimal) to set up a VM with LEMP+ stack:

- 'service' convenience script
- Yum repos for NginX, MariaDB 10.3, PHP 7.3 and webmin
- install packages and set up services to stop Apache and autostart the LEMP stack on boot
- infra setup for /srv/www/*/{logs|public_html}
- use with nginx multiple virtual hosts (sites-available/sites-enabled)
- prerequisites for webmin with sysstats

Run as root.


