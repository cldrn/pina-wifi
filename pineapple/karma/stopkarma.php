<?php
exec ("echo '' > /tmp/karma.log");
exec ("echo '' > /www/pineapple/logs/associations.log");
exec ("hostapd_cli -p /var/run/hostapd-phy0 karma_disable");
exec ("kill `ps auxww | grep update-associations.sh | grep -v -e grep | awk '{print $1}'`");
?>
<html><head>
<meta http-equiv="refresh" content="2; url=../wait.php">
</head><body bgcolor="black" text="white"><pre>
<?php
echo "Conejito de la entrop&iacute;a desactivado.";
?>
</pre></head></body>
