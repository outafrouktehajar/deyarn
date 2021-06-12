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
	if(!isset($_SESSION['panier']))
	{
		$_SESSION['panier']=array();
		$_SESSION['panier']['id']=array();
		$_SESSION['panier']['qnt']=array();
	}

	$posid=array_search($idprd, $_SESSION['panier']['id']);

	if($posid===false)
	{
		array_push($_SESSION['panier']['id'], $idprd);
		array_push($_SESSION['panier']['qnt'], 1);
	}
	else
	{
		$_SESSION['panier']['qnt'][$posid]++;
	}

	

	return count($_SESSION['panier']['id']);
}
function upQnt_panier($idprd)
{
	$posid=array_search($idprd, $_SESSION['panier']['id']);
	$_SESSION['panier']['qnt'][$posid]++;

}

function downQnt_panier($idprd)
{
	$posid=array_search($idprd, $_SESSION['panier']['id']);
	if($_SESSION['panier']['qnt'][$posid]>1)
	{
			$_SESSION['panier']['qnt'][$posid]--;
	}
}


function supprimer_panier($idprd)
{
$posid=array_search($idprd, $_SESSION['panier']['id']);

$temp=array();
$temp['id']=array();
$temp['qnt']=array();

	for ($i=0; $i < count($_SESSION['panier']['id']); $i++) { 
		
		if($posid!=$i)
		{
			array_push($temp['id'], $_SESSION['panier']['id'][$i]);
			array_push($temp['qnt'],$_SESSION['panier']['qnt'][$i]);	
		}
	}

$_SESSION['panier']=$temp;

}
?>