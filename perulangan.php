<?php

echo "waktu mundur\n";
for($count=10; $count>=0; $count--){
	echo $count."\n";
	sleep(1);
}

$daftarNama = ['MARWOOD','RORI'];
foreach ($daftarNama as $data) {
	echo $data."\n";
}

?>

