#!/bin/bash
# Script created by initialize.sh for commands that require sudo.

sed "s/$dbpass=.*/$dbpass='ScHs2017';/" /etc/phpmyadmin/config-db.php > /etc/phpmyadmin/config-db.php
