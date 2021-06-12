$(document).ready(function(){



$('#btnsubmit').click(function(){

	var email=$('#chemail').val();
	var password=$('#chpw').val();

	$.post('web/login.php',{"email":email,"pw":password},function(data){
		
		$('#reponseLogin').html(data)
		
	})


})
$('#btnsup').click(function(){

    var name=$('#form2').val();
	var email=$('#form14').val();
	var password=$('#form5').val();

	$.post('web/signup1.php',{"name":name,"email":email,"pw":password},function(data){
		alert('hello')
		
		$('#reponseLogin').html(data)
		
	})


})




$( 'navbar-nav a' ).on( 'click', function () {
	$( '.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
	/////////Menu categories//////////////////
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp(100);
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown(100);
		}
	})



	///////////carousel//////////////////////
	$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:5,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:4
		        }
		    }
		});

	///////////detail/////////////////
	$('.divCorps').on('click','.btndetail',function(){

		$('#modaldetail .nom-prd').text($(this).parents(".card").find('.card-title').text())
		$('#modaldetail .prix-prd').text($(this).parents(".card").find('.prixprd').text())
		$('#modaldetail .description-prd').text($(this).parents(".card").find('.card-text').text())
		
		$('#modaldetail .img-prd').attr('src',$(this).parents(".card").find('.card-img-top').attr('src'))
		//$('#modaldetail .heading').text($(this).parents(".card").find('.card-title').text



		var idprd=$(this).parents(".card").find('.idproduit').val();

			$.get('web/produitsimil.php',{"idprd":idprd},function(data){
			$('#similprd').html(data);

		})
				$('#modaldetail').modal();
	})


     $('.divCorps').on('click','.btnpanier',function(){

	    var idprd=$(this).parents(".card").find('.idproduit').val();
		$.get('web/basket.php',{"idprd":idprd,"action":"ajouter"},function(data)
			{
				$('.bagshp .badge').html(data)
			})


	})
  $('.bagshp').click(function()
{
	$.get("web/basketdeta.php",null,function(data){

		$('.divglo').html(data);

	})
})



   $('.divglo').on('click','.btnup',function(){

	var idprd=$(this).attr('rel');

		$.get('web/basket.php',{"idprd":idprd,"action":"up"},function()
			{
				$.get("web/basketdeta.php",null,function(data){

						$('.divglo').html(data);

					})
			})
	})

   $('.divglo').on('click','.btndown',function(){

	var idprd=$(this).attr('rel');
		$.get('web/basket.php',{"idprd":idprd,"action":"down"},function()
			{
				$.get("web/basketdeta.php",null,function(data){

						$('.divglo').html(data);

					})
			})
	})


   $('.divglo').on('click','.btnSuppPanier',function(){

	var reponse=confirm('Voulez vous vraiment supprimer cet article?')
	if(reponse==true)
	{
		var idprd=$(this).attr('rel');
		
		$.get('web/basket.php',{"idprd":idprd,"action":"supprimer"},function()
			{
				$.get("web/basketdeta.php",null,function(data){
						$('.divglo').html(data);
					})
			})
	}
	
	})





	////////////////AJAX produit///////////////
	$('.lienSousCat').click(function()
	{
		//afficher loading
		$('.divCorps').html("<img src='img/loading.gif'>");

		//recuperer l'id de la souscat a afficher
		var idsoucat=$(this).attr('rel');

		//appel ajax pour ramener les infos de cette souscat
		$.get('web/produits-yarns.php',{"souscat":idsoucat},function(data){
			//affichage des info dans le corps	
			$('.divCorps').html(data);

		})

	})

////////////////AJAX pagination///////////////
$('.divCorps').on('click','.page-link',function(){

		//afficher loading
		$('.divCorps').html("<img src='img/loading.gif'>");
		//recuperer l'id de la souscat a afficher
		var chemain=$(this).attr('rel');
		chemain=chemain.replace(/ /g,'');
		var tabchemain = chemain.split("&");
	
			if(tabchemain.length>1)
			{
				get1=tabchemain[0].split('=');
				get2=tabchemain[1].split('=');
				var idsoucat=get1[1]
				var page=get2[1]
						$.get('web/produits-yarns.php',{"souscat":idsoucat,"page":page},function(data){
							//affichage des info dans le corps	
							$('.divCorps').html(data);

						})
			}
			else
			{
				get1=tabchemain[0].split('=');
				var page=get1[1]
				$.get('web/produits-yarns.php',{"page":page},function(data){
							//affichage des info dans le corps	
							$('.divCorps').html(data);

						})	
			}

})

//////////////////////////////////////////////////////////////////////Commander
$('.divglo').on('click','#btnCommander',function(){

	$.get('web/commander.php',null,function(data)
	{
		if(data==1)
		{
			alert('passer la commande');
		}
		else
		{
			$('#loginmodal').modal('show');
		}
	})

})

///////////////////////////
})