This is a modification of the initscripts compatibility service command for CentOS 7.
It aims to try and emulate upstart-alike status messages when you issue service action commands.

Files
===============================================================================
service: The all or nothing modification of service as it will use the
upstart-alike status messages.

service-optional: This retains the current upstream behaviour by default but
exporting an environmental command of SERVICE_COMMAND_STATUS=anythingyoulike
will cause it to run with the upstart-alike status messages.

Installation
===============================================================================

Place the `service` file in /usr/local/sbin if this is service-optional rename
it to `service`. (without the ticks)

chown root:root
chmod 755

Logout and log back in.

If you are using the service-optional version
===============================================================================

You can add `export SERVICE_COMMAND_STATUS=anythingyoulike` to the root `.bashrc`
to enable the upstart-alike status messages.

If you intend to execute this command using `sudo` use the `-i` argument or add
`alias service='sudo -i service'` to your unprivileged user `.bashrc`.
(without the ticks)

Usage
===============================================================================

Identical to upstream services command