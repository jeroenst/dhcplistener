#!/bin/bash
stdbuf -i0 -o0 -e0 tcpdump -i eth0 port bootps -vvv | /usr/domotica/dhcplistener/dhcplistener.php
#while [ 1 -le 5 ]
#do
#sleep 60
#done
