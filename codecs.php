<?php include 'header.php'; ?>
<title>13. Codec Multimediali - Installare i codec multimediali per MP3, DVD, WMA, WMV, MOV ecc.</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">13. Codec Multimediali</div>
Questo capitolo descrive due differenti metodi per installare i pacchetti necessari a gestire i i più diffusi formati multimediali, inclusi MP3, DVD ecc., con Dragon Player (video) e Amarok (audio). Puoi utilizzare la comoda 1-click install oppure usare la riga di comando.<br /><br />

Di default, per ragioni legali, openSUSE supporta solamente i formati open come Ogg Theora, Ogg Vorbis e Flac.<br /><br />




<div class="heading2">13.1 Installare i Codec con 1-Click</div>

1) Clicca sul bottone sottostante per aggiungere i repositori necessari e installare i pacchetti con 1-click install.<br /><br />

<center><a href="http://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codecs.png" alt="ymp" class="pic" /></a></center><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Se compare un messaggio di conflitto tra dipendenze, scegli di installare i pacchetti <i>con</i> Cambio di fornitore.</td>
</tr>
</tbody>
</table>
</div><br />

2) Finita l'installazione  accertati che tutti i pacchetti multimediali provengano dal Repository Packman:
<div class="path">Lancia YaST => apri il Gestore dei pacchetti => Clicca su Visualizza => Clicca su Repository => Seleziona Packman Repository => Clicca "Passa i pacchetti di sistema"</div><br />

<center><a href="images/screenshots/packman-vendorchange.png" rel="thumbnail"><img src="images/screenshots/packman-vendorchangeb.png" alt="packman_vendor_change" class="pic" /></a></center><br /><br />



<div class="heading2">13.2 Installazione dei Codec dal Terminale</div>
Per installare i Codec Multimediali con il terminale segui queste istruzioni:<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Use il Copia/Incolla per evitare errori di battitura. Per copiare nel terminale (Konsole) tasto destro del mouse => Incolla - oppure utilizza <b>Ctrl+Shift+V</b>.</td>
</tr>
</tbody>
</table>
</div><br />

1) Aggiungi i repository:
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.2/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.2/ dvd</div><br />

2) Ora installa i pacchetti:
<div class="clroot">zypper install k3b-codecs ffmpeg lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libdvdcss2</div><br />

Ti verrà chiesto se vuoi cambiare il fornitore di alcuni pacchetti - permetti il cambio.<br /><br />

3) Assicurati che tutti i tuoi pacchetti multimediali provengano dal Repository Packman: 
<div class="clroot">zypper dup --from http://packman.inode.at/suse/openSUSE_Leap_42.2/</div>

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
