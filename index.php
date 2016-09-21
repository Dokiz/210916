<meta charset="utf-8">
<?php
for ($i=0,$x=0; $x<16; $x++){
	for ($y=0; $y<16; $y++){
		$chars[$x][$y] =array($i,chr($i));
		$i++;
	}
}
?>
<table border =1 cellpadding=1 cellspacing=0>
<?foreach ($chars as $row){?>
<tr>
<?foreach ($row as $cell){?>
<td>
<?=$cell[0]?>:
<b><tt><?=$cell[1]?></tt></b>
</td>
<?}?>
</tr>
<?}?>
</table>
<?php
$st="один из разделов документа например, правового акта. ";
echo strlen($st);
echo "</br>";
$where="Privet";
$what="ve";
echo strpos($where,$what);
echo "</br>";
$wheree="Privet Privet";
$whatt="ve";
echo strrpos($wheree,$whatt);
echo "</br>";
$strone="A";
$strtwo="a";
echo strcmp($strone,$strtwo);
echo "</br>";
$stronee="A";
$strtwoo="a";
echo strcasecmp($strone,$strtwo);
echo "</br>";
$substr="один из разделов";
echo substr($substr,9,26);
echo "</br>";
$text="Всем кто тут есть";
$from="тут";
$tex="Там";
echo str_replace($from,$tex,$text);
echo "</br>";
$str="https://github.com/Dokiz";
echo urlencode($str);
echo "</br>";
echo urldecode($str);
echo "</br>";
$html="<p>text</p>";
echo htmlspecialchars ($html);

?>