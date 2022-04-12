This is a modification of the initscripts compatibility service command for EL7/EL8.
It aims to try and emulate upstart-alike status messages when you issue service action commands.

Installation
===============================================================================

- Place the `service` file for your el-generation in `/usr/local/sbin`. (without the ticks)
- Edit .bashrc either per user or globally to add `/usr/local/sbin` to the front of $PATH
- chown root:root (if not already owned by root)
- chmod 755
- Logout and log back in.

Usage
===============================================================================

Identical to upstream services command