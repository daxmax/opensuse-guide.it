<?php include 'header.php'; ?>
<title>14. Browser Plugins - Installare Plugins per il tuo Web Browser come Flash e Java</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">14. Browser Plugins</div>
Molti siti web richiedono l'installazione di alcuni plugin per funzionare al meglio. Qui trovi indicazioni su come installare i principali plugin.<br /><br /> 


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Se i concetti <i>gestore di pacchetti</i> e <i>repositories</i> ti sono estranei, rileggi i capitoli <a href="installpackage.php">Installare il software</a> e <a href="repositories.php">Software Repositories</a>.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading2">14.1 Adobe Flash</div>
Installa il pacchetto <b>flash-player</b>, se necessiti Flash per guardare video online, giochi o altre cose (N.B. il <i>Repository Packman</i> deve essere abilitato).<br /><br />

Installare Flash da terminale:

<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.2/ packman</div><br />
<div class="clroot">zypper install freshplayerplugin</div><br /><br />



<div class="heading2">14.2 Java</div>
I Java web applets sono utilizzati nei giochi, in siti home banking, e in altre varie funzioni.<br /><br />

Se non è installato nel sistema, installa il pacchetto <b>java-1_8_0-openjdk-plugin</b> con il gestore dei pacchetti.<br /><br />

Installare il Java browser plugin con il terminale:
<div class="clroot">zypper install java-1_8_0-openjdk-plugin</div><br />



<div class="heading2">14.3 Streaming Video e Audio</div>
Per abilitare Firefox (e altri browser) a vari stream multimediali, installa il pacchetto <b>xine-browser-plugin</b> (è necessario il <i>Repository Packman</i>).<br /><br />

Installare il plugin dal terminale:
<div class="clroot">zypper install xine-browser-plugin</div><br />



<div class="heading2">14.4 Microsoft Silverlight</div>
Microsoft ha creato Silverlight per competere con Adobe Flash.<br /><br />

Microsoft <i>non</i> ha un plugin ufficiale per GNU/Linux, ma c'è un programma chiamato <a href="http://fds-team.de/cms/articles/2013-08/pipelight-using-silverlight-in-linux-browsers.html" target="_blank">Pipelight</a> che permette di usare Microsoft Silverlight su GNU/Linux. Trovi i pacchetti Pipelight per openSUSE <a href="http://software.opensuse.org/package/pipelight" target="_blank">a questo indirizzo</a>.<br /><br />

Netflix funziona correttamente senza Microsoft Silverlight nell'ultima versione el browser Chrome di Google.<br /><br />



<div class="heading2">14.5 Google Hangouts</div>
Con Google Hangouts è possibile fare chat e video con amici direttamente sul browser web tramite un apposito plugin. Puoi scaricare il pacchetto RPM per openSUSE qui:<br />
<a href="http://www.google.com/chat/video">http://www.google.com/chat/video</a><br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="codecs.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="3d.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>


<?php include 'footer.php'; ?>
