This is a modification of the initscripts compatibility service command for CentOS 7.
It aims to try and emulate upstart-alike status messages when you issue service action commands.

Installation
===============================================================================

Place the `service` file for your el-generation in `/usr/local/sbin`. (without the ticks)

chown root:root (if not already owned by root)
chmod 755

Logout and log back in.

Usage
===============================================================================

Identical to upstream services command