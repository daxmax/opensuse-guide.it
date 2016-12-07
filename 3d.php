<?php include 'header.php'; ?>
<title>15. Driver Grafici - Come installare i driver 3D Nvidia e ATI/AMD</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="heading1">15. Driver Grafici</div>
N.B. openSUSE Leap 42.2 viene fornito con driver free adatti alle più diffuse schede video. Non è necessario installare i driver proprietari se i driver utilizzati di default funzionano adeguatamente per le tue esigenze<br /><br />



<!-- nvidia KMPs start -->



<div class="heading2">15.1 Nvidia</div>
Questo capitolo descrive due differenti metodi per installare i driver proprietari Nvidia: il 1-click install oppure utilizzando il terminale<br /><br />

<div class="heading3">15.1.1 Installare i Driver Nvidia con 1-Click Install</div>
Clicca sul bottone corrispondente alla tua scheda grafica Nvidia per installare il driver con 1-click install.<br /><br />


Questo driver funziona con le schede grafiche Nvidia successive alla Geforce 400.<br /><br />
<center><a href="http://opensuse-community.org/nvidia.ymp"><img src="images/oneclick/nvidia_gf400.png" alt="ymp" class="pic" /></a></center><br />

Questo driver funziona con le schede grafiche Nvidia successive al 2008. Sono incluse le GeForce 8, GeForce 100-, 200- e 300-series.<br /><br />

<center><a href="http://opensuse-community.org/nvidia_gf8.ymp"><img src="images/oneclick/nvidia-gf8.png" alt="ymp" class="pic" /></a></center><br />

Questo driver funziona con le shede grafiche Nvidia più vecchie, approssimativamente successive al 2007. Sono incluse le GeForce 6 e 7.<br /><br />

<center><a href="http://opensuse-community.org/nvidia-gf6_gf7.ymp"><img src="images/oneclick/nvidia-gf6.png" alt="ymp" class="pic" /></a></center><br />

Dopo l'installazione riavvia il computer.<br /><br />



<div class="heading3">15.1.2 Installare il Driver Nvidia Driver dal Terminale</div>
Puoi installare i driver Nvidia direttamente dal Terminale. <u>Con questo metodo non è necessario conoscere il modello (o la serie) della scheda grafica</u>.<br /><br />

Per prima cosa aggiungi il repository:
<div class="clroot">zypper addrepo -f http://download.nvidia.com/opensuse/leap/42.2 nvidia</div><br />

Il seguente comendo dovrebbe installare automaticamente il driver corretto per la tua scheda Nvidia:<br />

<div class="clroot">zypper install-new-recommends</div><br />

Dopo l'installazione riavvia il computer.<br /><br />



<!-- nvidia KMP end -->
<!-- ati KMP start -->



<div class="heading2">15.2 ATI/AMD</div>
I driver free caricati di default dovrebbero funzionare correttamente per la maggior parte delle schede AMD. Un driver proprietario esiste ma non è più sviluppato da AMD che, al contrario, sta lavorando per migliorare i driver free. Ulteriori informazioni qui:<br/>

<a href="https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/" target="_blank">https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/</a><br /><br />



<!-- ati KMP end -->



<div class="heading2">15.3 Intel</div>
I driver 3D per le schede grafiche Intel sono già inclusi in openSUSE. Non è necessaria nessuna installazione o configurazione aggiuntiva.<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="wlan.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
