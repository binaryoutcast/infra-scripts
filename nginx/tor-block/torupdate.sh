wget -q -O /etc/nginx/tor-ip.raw https://www.dan.me.uk/torlist/?exit
sed "s/^/deny /g; s/$/;/g" /etc/nginx/tor-ip.raw > /etc/nginx/tor-ip.conf
systemctl reload nginx.service > /dev/null
