<?php
// Array with names
$r[] = "rio de janeiro";
$r[] = "caxias";
$r[] = "belford roxo";

$m[] = "brumadinho";
$m[] = "belo horizonte";
$m[] = "palma";

$s[] = "sao paulo";
$s[] = "santos";
$s[] = "abc paulista";


// get q parametro url
$q = $_REQUEST["q"];

$hint = "";


// diferentes cidades RJ
if ($q !== "") 
{
  if ($q == "RJ" || $q == "rj")
  { 
	echo '<select>';
		foreach($r as $name)	
		{
		  echo '<option value=""> '.$name.'</option>';
		}
	echo '</select>';
  }
}

// diferentes cidades SP
if ($q !== "") 
{
  if ($q == "SP" || $q == "sp")
  { 
	echo '<select>';
		foreach($s as $name)	
		{
		  echo '<option value=""> '.$name.'</option>';
		}
	echo '</select>';
  }
}

// diferentes cidades MG
if ($q !== "") 
{
  if ($q == "MG" || $q == "mg")
  { 
	echo '<select>';
		foreach($m as $name)	
		{
		  echo '<option value=""> '.$name.'</option>';
		}
	echo '</select>';
  }
}

?>
