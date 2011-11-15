<?php

// Sprachdefinitionen, die in der install.php verwendet werden

$lang_install = array(

'Install message'				=>	'Die Datei \'config.php\' scheint nicht zu existieren oder ist defekt. Es scheint, als ob FluxBB noch nicht installiert wurde.',
'Choose install language'		=>	'W�hlen Sie hier die Sprache f�r den Installationsassistenten',
'Choose install language info'	=>	'Die Sprache, die f�r den Installationsassistenten verwendet werden soll. Die voreingestellte Sprache f�r das Forum kann weiter unten festgelegt werden.',
'Install language'				=>	'Sprache installieren',
'Change language'				=>	'Sprache �ndern',
'Next'							=>	'Weiter',
'Already installed'				=>	'Es scheint so, als ob FluxBB bereits installiert ist. Sie sollten daher <a href="index.php">hier</a> weitermachen.',
'You are running error'			=>	'Sie verwenden %1$s Version %2$s. FluxBB %3$s ben�tigt f�r seine volle Funktionsf�higkeit mindestens %1$s %4$s. Bevor Sie weitermachen k�nnen, m�ssen Sie zun�chst die %1$s Installation aktualisieren.',
'My FluxBB Forum'				=>	'Mein FluxBB-Forum',
'Description'					=>	'FluxBB kann man nicht mit Worten beschreiben - man muss es selbst erlebt haben.',
'Username 1'					=>	'Mitgliedsnamen m�ssen mindestens zwei Zeichen lang sein.',
'Username 2'					=>	'Mitgliedsnamen d�rfen nicht l�nger als 25 Zeichen sein.',
'Username 3'					=>	'Der Mitgliedsname Gast ist reserviert.',
'Username 4'					=>	'Mitgliedsnamen d�rfen nicht die Form einer IP-Adresse haben.',
'Username 5'					=>	'Mitgliedsnamen d�rfen nicht die Zeichen \', " und [ oder ] enthalten.',
'Username 6'					=>	'Mitgliedsnamen d�rfen keine vom Forum verwendeten Formatierungs-Tags (BBCode) enthalten.',
'Short password'				=>	'Passw�rter m�ssen mindestens vier Zeichen lang sein.',
'Passwords not match'			=>	'Die Passw�rter stimmen nicht �berein.',
'Wrong email'					=>	'Die f�r die Administration eingegebene E-Mail-Adresse ist ung�ltig.',
'No board title'				=>	'Das Board braucht einen Titel.',
'Error default language'		=>	'Die voreingestellte Sprache scheint nicht zu existieren.',
'Error default style'			=>	'Der voreingestellte Style scheint nicht zu existieren.',
'No DB extensions'				=>	'Die PHP-Umgebung unterst�tzt keine der Datenbanken, die mit FluxBB verwendet werden k�nnen. Um FluxBB installieren zu k�nnen, muss PHP die Datenbanken MySQL, PostgreSQL oder SQLite unterst�tzen.',
'Administrator username'		=>	'Mitgliedsname des Administrators',
'Administrator password 1'		=>	'Passwort 1 des Administrators',
'Administrator password 2'		=>	'Passwort 2 des Administrators',
'Administrator email'			=>	'E-Mail des Administrators',
'Board title'					=>	'Board-Titel',
'Base URL'						=>	'Basis-URL',
'Required field'				=>	'ist in diesem Formular ein Pflichtfeld.',
'FluxBB Installation'			=>	'FluxBB-Installation',
'Welcome'						=>	'Sie m�chten FluxBB installieren. Daf�r m�ssen Sie das nachfolgende Formular vollst�ndig ausf�llen. Wenn bei der Installation Schwierigkeiten auftreten, lesen Sie bitte in der Dokumentation nach.',
'Install'						=>	'FluxBB 1.4 installieren',
'Errors'						=>	'Die folgenden Fehler m�ssen korrigiert werden:',
'Database setup'				=>	'Datenbank-Einstellungen',
'Info 1'						=>	'Bitte geben Sie die abgefragten Daten ein, um die Datenbank f�r die Installation von FluxBB vorzubereiten. Sie sollten all diese Daten kennen, BEVOR Sie mit der Installation weiter machen.',
'Select database'				=>	'W�hlen Sie hier den Datenbank-Typ',
'Info 2'						=>	'FluxBB unterst�tzt gegenw�rtig MySQL, PostgreSQL und SQLite. Falls die Datenbank Ihrer Wahl nicht im nachfolgenden Listenfeld-Men� zu finden ist, unterst�tzt Ihre PHP-Umgebung diese Datenbank nicht. Im FAQ finden Sie weitere Informationen zu den unterst�tzten Datenbank-Versionen.',
'Dual MySQL'					=>	'FluxBB hat erkannt, dass Ihre PHP-Umgebung zwei verschiedene Wege unterst�tzt, mit MySQL zu kommunizieren. Diese beiden Optionen werden Standard und improved genannt. Wenn Sie unsicher sind, welche Sie verwenden sollen, versuchen Sie zun�chst improved und falls es fehlschl�gt, versuchen Sie Standard.',
'InnoDB'						=>	'FluxBB hat erkannt, dass Ihr MySQL-Server <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a> unterst�tzt. Dies ist eine gute Wahl, wenn Sie ein gro�es Forum planen. Falls Sie unsicher sind, sollten Sie InnoDB besser nicht verwenden.',
'Database type'					=>	'Datenbank-Typ',
'Required'						=>	'(Pflichtfeld)',
'Database hostname'				=>	'Geben Sie hier den Hostnamen des Datenbank-Servers ein',
'Info 3'						=>	'Die Adresse des Datenbank-Servers (Beispiel: localhost, db.meinhost.de oder 192.168.0.15). Sie k�nnen au�erdem einen Port festlegen, falls die Datenbank nicht den Standard-Port verwendet (Beispiel: localhost:3580). F�r SQLite k�nnen Sie irgend etwas eingeben oder belassen es einfach auf \'localhost\'.',
'Database server hostname'		=>	'Hostname des Datenbank-Servers',
'Database enter name'			=>	'Geben Sie hier den Namen der Datenbank ein',
'Info 4'						=>	'Der Name der Datenbank, in die FluxBB installiert werden soll. Die Datenbank muss bereits existieren. F�r SQLite muss hier der relative Pfad zur Datenbank-Datei angegeben werden. Falls die SQLite-Datenbank-Datei nicht existiert, wird FluxBB versuchen, diese zu erstellen.',
'Database name'					=>	'Datenbank-Name',
'Database enter informations'	=>	'Geben Sie hier den Benutzernamen und das Passwort der Datenbank ein',
'Database username'				=>	'Datenbank-Benutzername',
'Info 5'						=>	'Geben Sie hier den Benutzernamen und das Passwort f�r die Verbindung zur Datenbank ein. Kann f�r SQLite ignoriert werden.',
'Database password'				=>	'Datenbank-Passwort',
'Database enter prefix'			=>	'Geben Sie hier den Pr�fix f�r die Datenbank-Tabellen ein',
'Info 6'						=>	'Wenn Sie m�chten, k�nnen Sie hier einen Tabellen-Pr�fix festlegen. Auf diese Weise k�nnen mehrere FluxBB-Installationen die gleiche Datenbank verwenden (Beispiel: foo_).',
'Table prefix'					=>	'Tabellen-Pr�fix',
'Administration setup'			=>	'Administrations-Einstellung',
'Info 7'						=>	'Bitte geben Sie die abgefragten Daten ein, um einen Administrator f�r die FluxBB-Installation festzulegen.',
'Admin enter username'			=>	'Geben Sie hier den Mitgliedsnamen des Administrators ein',
'Info 8'						=>	'Der Mitgliedsname des Administrator. Sie k�nnen sp�ter weitere Administratoren und Moderatoren anlegen. Mitgliedsnamen k�nnen zwischen zwei und 25 Zeichen lang sein.',
'Admin enter password'			=>	'Geben Sie hier das Passwort des Administrators ein und best�tigen Sie es anschlie�end noch einmal',
'Info 9'						=>	'Passw�rter m�ssen mindestens vier Zeichen lang sein. Au�erdem sind die Passw�rter zeichensensitiv (Gro�-/Kleinschreibung).',
'Password'						=>	'Passwort',
'Confirm password'				=>	'Passwort best�tigen',
'Admin enter email'				=>	'Geben Sie die E-Mail-Adresse des Administrators ein',
'Info 10'						=>	'Die E-Mail-Adresse des Foren-Administrators.',
'Board setup'					=>	'Board-Einstellung',
'Info 11'						=>	'Bitte geben Sie die abgefragten Daten ein, um FluxBB zu installieren.',
'Enter board title'				=>	'Geben Sie hier den Board-Titel ein',
'Info 12'						=>	'Der Titel dieses Forums wird im Kopf jeder Seite angezeigt.',
'Enter board description'		=>	'Geben Sie hier die Beschreibung des Boards ein',
'Info 13'						=>	'Eine kurze Beschreibung des Forums. Sie wird im Kopf jeder Seite angezeigt. Dieses Feld kann HTML enthalten.',
'Board description'				=>	'Board-Beschreibung',
'Enter base URL'				=>	'Geben Sie hier die Basis-URL der FluxBB-Installation ein',
'Info 14'						=>	'Die URL des FluxBB-Forums (ohne nachfolgenden Schr�gstrich) (Beispiel: http://forum.meinhost.de oder http://meinhost.de/~mitglied). Dies <strong>MUSS</strong> richtig sein, anderenfalls k�nnen Administratoren und Moderatoren keine Formulare absenden. Bitte beachten Sie, dass es sich bei dem voreingestellten Wert lediglich um einen Erfahrungswert aus der FluxBB-Praxis handelt.',
'Choose the default language'	=>	'W�hlen Sie hier die voreingestellte Sprache',
'Info 15'						=>	'Die voreingestellte Sprache wird f�r G�ste und Mitglieder verwendet, die in ihrem Profil keine andere Wahl getroffen haben.',
'Default language'				=>	'Voreingestellt Sprache',
'Choose the default style'		=>	'W�hlen Sie hier den voreingestellten Style',
'Info 16'						=>	'Der voreingestellt Style wird f�r G�ste und Mitglieder verwendet, die in ihrem Profil keine andere Wahl getroffen haben.',
'Default style'					=>	'Voreingestellter Style',
'Start install'					=>	'Installation beginnen',
'DB type not valid'				=>	'\'%s\' ist kein g�ltiger Datenbank-Typ',
'Table prefix error'			=>	'Der Tabellen-Pr�fix \'%s\' enth�lt ung�ltige Zeichen oder ist zu lang. Der Pr�fix darf nur die Buchstaben a bis z, Ziffern und das Unterstrich-Zeichen enthalten. Er darf nicht mit einer Ziffer beginnen. Die maximale L�nge ist 40 Zeichen. Bitte w�hlen Sie einen anderen Pr�fix',
'Prefix reserved'				=>	'Der Tabellen-Pr�fix \'sqlite_\' ist f�r die Verwendung von SQLite-Datenbanken reserviert. Bitte w�hlen Sie einen anderen Pr�fix',
'Existing table error'			=>	'Eine Tabelle mit dem Namen \'%susers\' ist bereits in der Datenbank \'%s\' vorhanden. Entweder ist FluxBB bereits installiert oder eine andere Software ist installiert und verwendet die gleichen Tabellennamen wie FluxBB. Wenn mehrere Kopien von FluxBB in der gleichen Datenbank installiert werden sollen, m�ssen Sie jeweils einen anderen Tabellen-Pr�fix w�hlen',
'InnoDB off'					=>	'InnoDB scheint nicht aktiviert zu sein. Bitte w�hlen Sie einen Datenbank-Layer, der keine InnoDB-Unterst�tzung hat oder aktivieren Sie InnoDB auf dem MySQL-Server',
'Administrators'				=>	'Administratoren',
'Administrator'					=>	'Administrator',
'Moderators'					=>	'Moderatoren',
'Moderator'						=>	'Moderator',
'Guests'						=>	'G�ste',
'Guest'							=>	'Gast',
'New member'					=>	'Neues Mitglied',
'Members'						=>	'Mitglieder',
'Member'						=>	'Mitglied',
'Announcement'					=>	'Geben Sie hier den Text f�r Ank�ndigungen ein.',
'Rules'							=>	'Geben Sie hier die Regeln f�r das Forum ein',
'Maintenance message'			=>	'Das Forum ist aufgrund von Wartungsarbeiten vor�bergehend geschlossen. Bitte versuchen Sie es in ein paar Minuten noch einmal.<br />\\n<br />\\n/ Die Administration',
'Test post'						=>	'Test-Beitrag',
'Message'						=>	'Wenn Sie dies lesen k�nnen (wovon ich mal ausgehe), scheint die Installation von FluxBB zu funktionieren! Sie k�nnen sich jetzt einloggen und �ber die Administration das Forum konfigurieren.',
'Test category'					=>	'Test-Kategorie',
'Test forum'					=>	'Test-Forum',
'This is just a test forum'		=>	'Dies ist nur ein Test-Forum',
'Alert cache'					=>	'<strong>Das Cache-Verzeichnis ist derzeit nicht beschreibbar!</strong> Damit FluxBB richtig funktionieren kann, muss PHP Schreibzugriff auf das Verzeichnis <em>%s</em> haben. Sie k�nnen chmod verwenden, um dem Verzeichnis die entsprechenden Berechtigungen zu geben. Falls Sie unsicher sind, setzen Sie chmod auf 0777.',
'Alert avatar'					=>	'<strong>Das Avatar-Verzeichnis ist nicht beschreibbar!</strong> Wenn Mitglieder ihr eigenes Avatar-Bild hochladen k�nnen sollen, muss PHP Schreibrechte f�r das Verzeichnis <em>%s</em> haben. Sie k�nnen dann sp�ter noch in der Administration unter Optionen ein anderes Verzeichnis zum Speichern der Avatar-Bilder ausw�hlen. Sie k�nnen chmod verwenden, um dem Verzeichnis die entsprechenden Berechtigungen zu geben. Falls Sie unsicher sind, setzen Sie chmod auf 0777.',
'Alert upload'					=>	'<strong>Das Hochladen von Dateien scheint auf diesem Server nicht erlaubt zu sein!</strong> Damit Mitglieder ihre eigenen Avatar-Bilder hochladen k�nnen, muss in der PHP-Konfiguration file_uploads aktiviert sein. Sobald das Hochladen von Dateien aktiviert wurde, kann das Hochladen von Avatar-Bildern in der Administration unter Optionen freigegeben werden.',
'FluxBB has been installed'		=>	'FluxBB wurde installiert. Um die Installation abzuschlie�en, folgen Sie bitte den unten stehenden Hinweisen.',
'Final instructions'			=>	'Abschlie�ende Hinweise',
'Info 17'						=>	'Um die Installation abzuschlie�en, m�ssen Sie auf den nachfolgenden Button klicken, um die Datei config.php herunter zu laden. Diese Datei m�ssen Sie anschlie�end ins Wurzelverzeichnis der FluxBB-Installation hochladen.',
'Info 18'						=>	'Nachdem Sie die Datei config.php hochgeladen haben, ist FluxBB einsatzbereit! Sie k�nnen dann <a href="index.php">zur Foren�bersicht gehen</a>.',
'Download config.php file'		=>	'Die Datei config.php herunter laden',
'FluxBB fully installed'		=>	'Die FluxBB-Installation ist abgeschlossen! Sie k�nnen jetzt <a href="index.php">zur Foren�bersicht gehen</a>.',

);
