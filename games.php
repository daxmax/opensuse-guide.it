<?php include 'header.php'; ?>
<title>Appendix B: Giochi - Come giocare su openSUSE</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">Appendice B: Giochi</div>
Non tutti i principali giochi vengono sviluppati per GNU/Linux, ma ci sono comunque degli ottimi giochi per divertirsi.<br /><br />

<center><img src="images/pics/spil.jpg" alt="spil" class="pic" /></center>



<div class="heading2">B.1 Giochi sviluppati per GNU/Linux</div><br />



<div class="heading3">B.1.1 Repository Games</div>
Alcuni semplici giochi sono inclusi nel repository ufficiale di openSUSE, ma è ne troverai molti di più nel repository Games. Puoi aggiungere facilmente il repository Games consultando il capitolo <a href="repositories.php">Repository Software</a><br /><br />

Oppure aggiungi il repository Games utilizzando la riga di comando:
<div class="clroot">zypper addrepo -f http://download.opensuse.org/repositories/games/openSUSE_Leap_42.2/ games</div><br />



<div class="heading3">B.1.2 Steam</div>
<a href="http://store.steampowered.com/browse/linux/" target="_blank">Steam</a> è una piattaforma online usata per gestire e distribuire una vasta gamma di giochi (alcuni esclusivi) e il loro relativo supporto. E' disponibile per GNU/Linux. Puoi installare il pacchetto cliccando <a href="http://software.opensuse.org/package/steam" target="_blank">qui</a><br /><br />



<div class="heading3">B.1.3 Altre informazioni sui Giochi per GNU/Linux</div>
Linux Game Publishing acquista giochi e li porta su GNU/Linux, vedi:<br />
<a href="http://www.linuxgamepublishing.com" target="_blank">http://www.linuxgamepublishing.com</a><br /><br />

Esistono moltissimi giochi per GNU/Linux - Visita questi siti:<br />

<a href="http://www.tuxgames.com/" target="_blank">http://www.tuxgames.com/</a><br />
<a href="http://www.penguspy.com/" target="_blank">http://www.penguspy.com/</a><br />
<a href="http://www.lgdb.org/" target="_blank">http://www.lgdb.org/</a><br />
<a href="http://www.linuxgamingworld.com/" target="_blank">http://www.linuxgamingworld.com/</a><br /><br />



<div class="heading2">B.2 Usare i Giochi per MS Windows</div>
Alcune applicazioni permettono di far girare giochi sviluppati per MS Windows su GNU/Linux - Attenzione: non sempre la compatibilità è garantita al 100%, verifica sempre se il gioco è supportato.<br /><br />



<div class="heading3">B.2.1 Wine</div>
Wine (Wine Is Not an Emulator) è installabile dal gestore dei pacchetti. Controlla il database di Wine per verificare la compatibilità dei singoli giochi:<br />
<a href="http://appdb.winehq.org/appbrowse.php?iCatId=2" target="_blank">http://appdb.winehq.org/appbrowse.php?iCatId=2</a><br /><br />

Wine si lancia da riga di comando, il comando è:
<div class="cl">wine /path/to/setup.exe</div><br />



<div class="heading3">B.2.2 PlayOnLinux</div>
<a href="http://www.playonlinux.com/" target="_blank">PlayOnLinux</a> è basato su Wine e ti permette di installare facilmente alcuni giochi per MS Windows. Trovi i pacchetti di PlauOnLinux nel repository Games.<br /><br />



<div class="heading2">B.3 Emulatori</div>
Numerous emulators exist, making it possible to run many old classic games of other platforms on GNU/Linux. For example:<br />

<ul>
  <li>Amiga (UAE)</li>
  <li>Arcade (MAME)</li>
  <li>Atari (Stella, Steem)</li>
  <li>Commodore 64/128 (VICE)</li>
  <li>MS DOS (DOSBox, DOSEMU)</li>
  <li>Nintendo (infones, bsnes, nestopia)</li>
  <li>Play Station (pcsx, pcsx2)</li>
  
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Usually you can only do this legally, if you own the original hardware/have a licence for it.</td>
</tr>
</tbody>
</table>
</div><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="help.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="under.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
