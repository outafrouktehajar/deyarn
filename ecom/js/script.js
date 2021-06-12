$(document).ready(function(){


$(".sk-cube-grid").fadeOut(1000, function () {
        $("body").css("overflow", "auto");
        $(".loading-page").fadeOut(1000).remove();
    })

$('#btnsubmit').click(function(){

	var email=$('#chemail').val();
	var password=$('#chpw').val();

	$.post('web/login.php',{"email":email,"pw":password},function(data){
		
		$('#reponseLogin').html(data)

		$('#btnlogout').html('<a href="?logout">Logout</a>');
		
	})



})


$( document ).ready(function() {
  new WOW().init();
});







$( 'navbar-nav a' ).on( 'click', function () {
	$( '.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});

	/////////Menu categories//////////////////
	$("#accordian h6").click(function(){
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
		$('#modaldetail .idproduit').text($(this).parents(".card").find('.idproduit').text())
		
		$('#modaldetail .img-prd').attr('src',$(this).parents(".card").find('.card-img-top').attr('src'))
		//$('#modaldetail .heading').text($(this).parents(".card").find('.card-title').text



		var idprd=$(this).parents(".card").find('.idproduit').val();

			$.get('web/produitsimil.php',{"idprd":idprd},function(data){
			$('#similprd').html(data);

		})
				$('#modaldetail').modal();
	})


     $('.divglo').on('click','.btnpanier',function(){

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
    $('.divglo').on('click','.btnSupplike',function(){

	var reponse=confirm('Voulez vous vraiment supprimer cet article?')
	if(reponse==true)
	{
		var idprd=$(this).attr('rel');
		
		$.get('web/likefon.php',{"idprd":idprd,"action":"supprimer"},function()
			{
				$.get("web/likedeta.php",null,function(data){
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
			 var idprd=$(this).parents(".table").find('.idproduit').val();
		       $.get('web/order.php',null,function(data)
			{
				
                
				
						$('.divglo').html(data);

					

			})



		}
		else
		{
			$('#loginmodal').modal('show');
		}
	})

})




$('.divglo').on('click','#btninscription',function(){
	$('.modal-backdrop').css({"display":"none"});
	$.get('web/signup1.php',null,function(data)
	{
		$('.divglo').html(data);
	})
})




$('.divglo').on('click','#btnLogin',function(){

$('#myModal').modal('show');
})


$('.divglo').on('submit','#inscriptionform',function(event){

	        var formData = {
            'nom'              : $('#nom').val(),
            'prenom'            : $('#prenom').val(),
            'email'            : $('#email').val(),
            'gsm'             : $('#gsm').val(),
            'adresse'          : $('#adresse').val(),
            'mp'				:$('#mp').val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'web/signup1.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'html', // what type of data do we expect back from the server
            encode       : true
        })

            .done(function(data) {


          $('#reponseLogin').html(data)
			$('#btnlogout').html('<a href="?logout">Logout</a>');
			alert('Welcome');
			

            });


        event.preventDefault();
	})




 $('.divglo').on('click','.btnlike',function(){

	  var idprd=$(this).parents(".card").find('.idproduit').val();
	    $.get('web/like.php',null,function(data)

	{

		if(data==1)

		{

		$.get('web/likefon.php',{"idprd":idprd,"action":"ajouter"},function(data)
			{
				$('.baglike .badge').html(data)
			})
		}
		else
		{

			$('.loginmodal').modal('show');
		}
	})


	})
     



  $('.baglike').click(function()
{
	 var idprd=$(this).parents(".card").find('.idproduit').val();
	$.get("web/likedeta.php",{"idprd":idprd},function(data){

		$('.divglo').html(data);

	})
})

$('.register').click(function(){
	$('.loginmodal').modal('hide');
	$.get('web/signup1.php',null,function(data)
	{
		$('.divglo').html(data);
	})
})
$('.register').click(function(){
	
	$.get('web/signup1.php',null,function(data)
	{
		$('.divglo').html(data);
	})
})

 


 $('.divglo').on('click','.btnlpanier',function(){

	    var idprd=$(this).parents(".card").find('.idproduit').val();
		$.get('web/basket.php',{"idprd":idprd,"action":"ajouter"},function()
			{
				$('.bagshp .badge').html(data)
			})
      $.get("web/basketdeta.php",null,function(data){

		$('.divglo').html(data);

	})

	})




$('.account').click(function(){

 $.get('web/like.php',null,function(data)
 {
 	
	

		if(data==1)

		{

		$.get('web/accont.php',null,function(data)
			{
				$('.divglo').html(data);
			})
		}
		else
		{

			$('.loginmodal').modal('show');
		}
	})
	
})





$('#footer').on('click','.favl',function()
{
	$.get("web/likedeta.php",null,function(data){

		$('.divglo').html(data);

	})
})









///////////////////////////
})