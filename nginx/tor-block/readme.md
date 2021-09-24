## Block Tor exit nodes

1. copy `torupdate.sh` to `/etc/nginx`, makes sure it's +x ed
2. Add a cron job with the `torupdate.sh` script, less than once an hour! Recommended once every 3 hours.
If you run it too often, dan will block your server
3. edit nginx.conf
in the `http` block, add:
```
    # deny tor access
    include /etc/nginx/tor-ip.conf;
```
before the include for `nginx/conf.d/*.conf`


