<?php
exec("/usr/bin/top -b -n1",$out);
preg_match('/Tasks:([\s+]\d+)/',$out[1],$gorevler);
echo $toplam_gorev="Total Tasks = ".$gorevler[1]."\n";
preg_match('/%Cpu\(s\):\s+(\d+,\d+)/',$out[2],$cpu);
echo $cpu_kullanim="Usage Of Processor (x/100) = % ".$cpu[1]."\n";
preg_match('/KiB Mem:.\s+(\d+)\s+total,\s+(\d+)\s+used,\s+(\d+)\s+free/',$out[3],$hafiza);
echo $toplam_hafiza="Total Ram = ".$hafiza[1]."\n";
echo $kullanilan_hafiza="Ram Usage = ".$hafiza[2]."\n";
echo $bos_hafiza="Free Ram = ".$hafiza[3]."\n";
?>
