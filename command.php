<?php include 'header.php'; ?>
<title>8. Terminale - Come lanciare i Comandi dalla riga di comando di openSUSE</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">8. Terminale</div>
In openSUSE, come in quasi tutte le moderne distribuzioni GNU/Linux, è possibile gestire tutte le principali funzioni graficamente. Però, se vuoi diventare indipendente dall'ambiente grafico utilizzato e sfruttare tutte le potenzialità di un sistema operativo GNU/Linux, faresti bene a imparare almeno i principali comandi impartibili da Terminale. Vedrai che non è difficile e da molte soddisfazioni!<br /><br />

I comandi impartibili da terminale sono migliaia, e ognuno di essi ha svariate opzioni. Questa è solo una piccola descrizione dei comandi più comuni.<br /><br />

Trovi l'applicazione <i>Konsole</i> nel menù principale, sotto la voce Sistema.<br /><br />

<center><video src="video/konsole.ogv" controls>  

<center><a href="images/screenshots/konsole.png" rel="thumbnail"><img src="images/screenshots/konsoleb.png" alt="konsole" class="pic" /></a></center><br />

<b>Il tuo browser web non supporta i video HTML5 e/o il formato Ogg Theora.<br />
Usa Firefox, Konqueror o Opera.</b><br /><br />

<a href="video/konsole.ogv">Download il video per guardarlo in locale (4.3 MB)</a>
</video></center>  <br /><br />

Usare la riga di comando è abbastanza semplice. Basta inserire un comando, possibilmente con una o più opzioni e uno o più argomenti, e premere Invio. Ecco un esempio:

<div class="cl">ls -l /home/[username]/ </div><br />

Il <i>comando</i> <b>ls</b> visualizza una lista di file, l'<i>opzione</i> <b>-l</b> significa che la lista verrà visualizzata in un lungo elenco, e l'<i>argemento</i> <b>/home/[username]/</b> indica la cartella di cui bisognerà visualizzare il contenuto.<br /><br />



<div class="heading2">8.1 Scorciatoie utili</div><br />

<div class="heading3">Tasto Tab</div>
Il tasto tab è molto utile, se possibile completerà automaticamente i comandi e gli argomenti. Questo ti permetterà di scrivere velocemente e di evitare errori di battitura.<br /><br />

<div class="heading3">Ctrl+Shift+V</div>
Incolla dagli appunti.<br /><br />

<div class="heading3">Ctrl+C</div>
Questa scorciatoia termina qualsiasi operazione in corso.<br /><br />



<div class="heading2">8.2 Esempi di comandi basilari</div>
Questa è una piccolissima selezione di comandi per darti un'idea di come funzionano.<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>I comandi scritti in <u>rosso</u> devono essere lanciati come utente root (superutente).</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">8.2.1 Gestione dei file</div>

Cambiare directory (cartella)<br />
<div class="cl">cd /home/user/directoryname/</div><br />

Elencare i file di una directory<br />
<div class="cl">ls</div><br />

Copiare un file<br />
<div class="cl">cp filename /home/user/directoryname/filename</div><br />

Cancellare un file<br />
<div class="cl">rm filename</div><br />

Cancellare una directory e tutto il suo contenuto<br />
<div class="cl">rm -rf /home/user/directoryname</div><br />

Spostare o rinominare un file<br />
<div class="cl">mv /home/user/filename /home/user/newfilename</div><br /><br />



<div class="heading3">8.2.2 Monitorare il sistema</div>

Processi in esecuzione e utilizzo delle risorse del sistema. Premi <b>'Q'</b> per uscire.<br />
<div class="cl">top </div><br />

Disco fisso utilizzato<br />
<div class="cl">df</div><br />

Memoria utilizzata<br />
<div class="cl">free</div><br /><br />



<div class="heading3">8.2.3 Rete</div>

Mostra il tuo IP-address<br />
<div class="cl">ip a</div><br />

Mostra il tuo gateway<br />
<div class="cl">ip route</div><br />

Mostra i DNS servers<br />
<div class="cl">cat /etc/resolv.conf</div><br /><br />



<div class="heading3">8.2.4 Manuali e Help</div>
Quasi tutti i comandi hanno un manuale integrato che ne descrive l'uso e le opzioni applicabili. Prova a dare questo comando:
<div class="cl">man cp</div><br />

Per uscire dal manuale premi <b>'Q'</b><br /><br />

Se un comando non ha un manuale integrato prova con <i>--help</i>, esempio:
<div class="cl">cp --help</div><br /><br />



<div class="heading3">8.2.5 Diventare Root</div>
Per passare all'utente root, che permette di amministrare il sistema, scrivi:<br />
<div class="cl">su -</div>

E poi inserisci la password (per l'utente root). Nota che non comparirà niente mentre scrivi la password, questo è voluto.<br /><br />

PEr uscire dall'utente root e tornare a lavorare come un normale utente, dai il comando <i>exit</i>.
<div class="clroot">exit</div><br />

Per lanciare un singolo comando come utente root utilizza:
<div class="cl">su -c "[command]"</div><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Utilizza l'utente root solo quando è strettamente necessario.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">8.2.6 Attività di sistema</div>
Spegnere il sistema.<br />
<div class="clroot">systemctl shutdown</div><br />

Riavviare il sistema.<br />
<div class="clroot">systemctl reboot</div><br />

Avviare, terminare, riavviare o visualizzare lo stato delle attività di sistema (start|stop|restart|status). Esempi:<br />
<div class="clroot">systemctl restart network</div>
<div class="clroot">systemctl stop SuSEfirewall2_init</div>
<div class="clroot">systemctl start apache2</div>
<div class="clroot">systemctl status smb</div><br />

Abilitare o disabilitare un'attività di sistema a ogni avvio. Esempi:
<div class="clroot">systemctl enable sshd</div>
<div class="clroot">systemctl disable cups</div><br /><br />



<div class="heading3">8.2.7 Il Kernel</div>
Visualizzare la versione del kernel utilizzata e la sua variante.<br />
<div class="cl">uname -r</div><br />

Visualizza i messaggi del kernel (utile per trovare e risolvere problemi/conflitti hardware).<br />
<div class="clroot">dmesg</div><br />

Elenco dei moduli del kernel caricati.<br />
<div class="clroot">lsmod</div><br />

Caricare un modulo del kernel.<br />
<div class="clroot">modprobe [modulename]</div><br />

Scaricare un modulo del kernel.<br />
<div class="clroot">rmmod [modulename]</div><br /><br />



<div class="heading3">8.2.8 Informazioni Hardware</div>

Il comando hwinfo può fornire informazioni della maggior parte dell'hardware del tuo PC. Ecco alcuni esempi:<br />
<div class="clroot">hwinfo --short --wlan</div>
<div class="clroot">hwinfo --short --gfxcard</div><br />

Elenco dei dispositivi PCI:
<div class="clroot">lspci</div><br />

Elenco dei dispositivi USB:
<div class="cl">lsusb</div><br /><br />



<div class="heading2">8.3 Editare File di Testo</div>
Editare file di configurazione o altri file di testo può essere fatto utilizzando l'editor vim, che è pre-installato.<br /><br />

Apri un file con <i>vim /path/to/file</i>. Esempio:<br />
<div class="clroot">vim /etc/sysconfig/yast2</div><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Nell'esempio vengono utilizzati i permessi di Root perché <i>yast2</i> è un file di configurazione del sistema - generalmente non è necessario editare file di sistema con vim.</td>
</tr>
</tbody>
</table>
</div><br />

Premi <b>i</b> per entrare nella modalità di inserimento testo (vedrai "-- INSERT --" sul fondo). In questo modo puoi editare il testo nel file. Quando hai finito premi <b>Esc</b> per uscire dalla modalità inserimento testo e tornare alla modalità comando. Adesso scrivi <b>:x</b> che è il comando per salvare e uscire. Per uscire senza salvare usa <b>:q!</b>.<br /><br />

Se vuoi puoi installare un editor di testo più semplice come <i>nano</i>.<br /><br />

<div class="heading2">8.4 Approfondimenti</div>
Se vuoi imparare a utilizzare al meglio il termilale puoi usufruire di molte guide disponibili su internet. Ecco qualche link.<br />
<a href="http://linuxcommand.org/" target="_blank">http://linuxcommand.org/</a><br />
<a href="http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html" target="_blank">http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html</a><br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="security.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="yast.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
