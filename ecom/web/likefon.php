<?php
session_start();
if(isset($_GET['action']))
{
	switch ($_GET['action']) {
		case 'ajouter':
		print_r(ajouter_panier($_GET['idprd']));
			
			break;
		case 'supprimer':
			supprimer_panier($_GET['idprd']);
			break;
		case 'up':
			upQnt_panier($_GET['idprd']);
			break;

		case 'down':
			downQnt_panier($_GET['idprd']);
			break;
		default:
			break;
	}
}



function ajouter_panier($idprd)
{
	if(!isset($_SESSION['like']))
	{
		$_SESSION['like']=array();
		$_SESSION['like']['id']=array();
		
		
	}

	$posid=array_search($idprd, $_SESSION['like']['id']);

	if($posid===false)
	{
		array_push($_SESSION['like']['id'], $idprd);
		
	}
	

	return count($_SESSION['like']['id']);
}

function supprimer_panier($idprd)
{
$posid=array_search($idprd, $_SESSION['like']['id']);

$temp=array();
$temp['id']=array();

	for ($i=0; $i < count($_SESSION['like']['id']); $i++) { 
		
		if($posid!=$i)
		{
			array_push($temp['id'], $_SESSION['like']['id'][$i]);	
		}
	}

$_SESSION['like']=$temp;

}
?>
