$(document).ready(function(){
	
	  

$('#btnsubmit').click(function(){

	var email=$('#chemail').val();
	var password=$('#chpw').val();

	$.post('login.php',{"email":email,"pw":password},function(data){
		
		$('#reponseLogin').html(data)

		$('#btnlogout').html('<a href="?logout">Logout</a>');
		
	})



})

$('#catall').click(function(){
	$.get("category/category.php",null,function(data){

		 $.ajax({
            url: 'category/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);

	})
})
$('#usertall').click(function(){
	$.get("users/users.php",null,function(data){

		
		 $.ajax({
            url: 'users/view.php',
            method: 'post',
            encode       : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);
	})
})



$('#admintall').click(function(){
	$.get("admin/admin.php",null,function(data){
        
		 $.ajax({
            url: 'admin/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);

	})
})




$('.products').click(function(){
	$.get("produit/produit.php",null,function(data){
        
         $.ajax({
            url: 'produit/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);
            
		

	})
})

 $('.users').click(function(){
	$.get("users/users.php",null,function(data){

		
		 $.ajax({
            url: 'users/view.php',
            method: 'post',
            encode       : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);
	})
})


 $('.admin').click(function(){
	$.get("admin/admin.php",null,function(data){

		
		 $.ajax({
            url: 'admin/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);
	})
})

$('.Category').click(function(){
	$.get("category/category.php",null,function(data){

		 $.ajax({
            url: 'category/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);

	})
})



$('.carousel').click(function(){
	$.get("carosl/carousel.php",null,function(data){

		 $.ajax({
            url: 'carosl/view.php',
            method: 'post',
            encode  : true
            })
             .done(function(data) {
            
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            });
             $('.glo').html(data);

	})
})










//////////////////////////Users///////////////////////////////////////////////////////////////

 $(document).on('click','#btn_register',function(event){

	        var formData = {
            'id'              : $('#UserId').val(),
            'nom'            : $('#UserName').val(),
            'email'            : $('#UserEmail').val(),
            'mp'				:$('#Userpass').val()
        };
   
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'users/insert.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'html', // what type of data do we expect back from the server
            encode       : true
        })

            .done(function(data) {
            $('#Registration').modal('hide');
            alert(data)
           
			   view_record();
          
            });


        event.preventDefault();


 
  })
  $(document).on('click','#btn_delete',function(event)
    {
        var Delete_ID = $(this).attr('data-id1');
        $('#delete').modal('show');

        $(document).on('click','#btn_delete_record',function()
        {
            $.ajax(
                {
                    url: 'users/delete.php',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    encode : true
                    })
                   .done(function(data) {
                    
                        $('#delete-message').html(data).hide(5000);
                        $('#delete').modal('hide');
                        
                      });
                
              event.preventDefault();
        })
    })
  
   $(document).on('click','#btn_edit',function(event)
    {
         var idu = $(this).attr('data-id');
        $.ajax(
            {
                url: 'users/get_data.php',
                method: 'post',
                data:{UserID:idu},
                dataType: 'JSON',
              
                })
                   .done(function(data) {
                  console.log(data[2])
                   $('#Up_User_Name').val(data[1]);
                   $('#Up_User_Email').val(data[2]);
                   $('#Up_User_Password').val(data[3]);
                    $('#Up_User_ID').val(data[4]);
                   $('#update').modal('show');
                   
                 
                      });
                
                
           
    })

    $(document).on('click','#btn_update',function(event)
    {
        var UpdateID = $('#Up_User_ID').val();
        var UpdateUser = $('#Up_User_Name').val();
        var UpdateEmail = $('#Up_User_Email').val();
        var UpdatePassword = $('#Up_User_Password').val();

        if(UpdateID=="" || UpdateUser=="" || UpdateEmail=="" || UpdatePassword=="")
        {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        }
        else
        {
              $.ajax(
                {
                    url: 'users/update.php',
                    method: 'post',
                    data:{U_ID:UpdateID,U_User:UpdateUser,U_Email:UpdateEmail,U_Password:UpdatePassword},
                   })
                   .done(function(data) {
                        $('#up-message').html(data);
                        $('#update').modal('show');
                        
                    });
                
        }
        
    })

/////////////////////////////ADMIN////////////////////////////////
 $(document).on('click','#btn_adminregister',function(event){

	        var formData = {
            'ida'              : $('#AdminId').val(),
            'noma'            : $('#AdminName').val(),
            'emaila'            : $('#AdminEmail').val(),
            'passwa'				:$('#Adminpass').val()
        };
   
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'admin/insert.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'html', // what type of data do we expect back from the server
            encode       : true
        })

            .done(function(data) {
            $('#RegistrationA').modal('hide');
            alert(data)
           
			  
          
            });


        event.preventDefault();


 
  })
 $(document).on('click','#btn_deleteadmin',function(event)
    {
        var ADelete_ID = $(this).attr('data-id1');
        $('#deleteA').modal('show');

        $(document).on('click','#btn_delete_admin',function()
        {
            $.ajax(
                {
                    url: 'admin/delete.php',
                    method: 'post',
                    data:{ADel_ID:ADelete_ID},
                    encode : true
                    })
                   .done(function(data) {
                    
                        $('#adelete-message').html(data).hide(5000);
                        $('#deleteA').modal('hide');
                        
                      });
                
              event.preventDefault();
        })
    })
   $(document).on('click','#btn_editadmin',function(event)
    {
         var ida = $(this).attr('data-id');
        $.ajax(
            {
                url: 'admin/get_data.php',
                method: 'post',
                data:{AdminID:ida},
                dataType: 'JSON',
              
                })
                   .done(function(data) {
                  console.log(data[2])
                   $('#Up_Admin_ID').val(data[1]);
                   $('#Up_Admin_Name').val(data[2]);
                   $('#Up_Admin_Email').val(data[3]);
                   $('#Up_Admin_Password').val(data[4]);
                   
                   $('#Aupdate').modal('show');
                   
                 
                      });
                
                
           
    })
    $(document).on('click','#btn_Adminupdate',function(event)
    {
        var UpdateAID = $('#Up_Admin_ID').val();
        var UpdateAdmin = $('#Up_Admin_Name').val();
        var UpdateAEmail = $('#Up_Admin_Email').val();
        var UpdateAPassword = $('#Up_Admin_Password').val();

        if(UpdateAID=="" || UpdateAdmin=="" || UpdateAEmail=="" || UpdateAPassword=="")
        {
            $('#aup-message').html('please Fill in the Blanks');
            $('#Aupdate').modal('show');
        }
        else
        {
              $.ajax(
                {
                    url: 'admin/update.php',
                    method: 'post',
                    data:{A_ID:UpdateAID,A_User:UpdateAdmin,A_Email:UpdateAEmail,A_Password:UpdateAPassword},
                   })
                   .done(function(data) {
                        $('#aup-message').html(data);
                        $('#Aupdate').modal('show');
                        
                    });
                
        }
        

})
////////////////////category////////////////////////////////////
$(document).on('click','#btn_categoryregister',function(event){

	        var formData = {
            'idc'              : $('#CategoryId').val(),
            'namec'            : $('#CategoryName').val(),
            'idsc'            : $('#SousCategoryId').val(),
           
        };
   
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'category/insert.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'html', // what type of data do we expect back from the server
            encode       : true
        })

            .done(function(data) {
            $('#Categoryadd').modal('hide');
            alert(data)
           
			  
          
            });


        event.preventDefault();


 
  })
$(document).on('click','#btn_deletecategory',function(event)
    {
        var CDelete_ID = $(this).attr('data-id1');
        $('#deletecategory').modal('show');

        $(document).on('click','#btn_delete_category',function()
        {
            $.ajax(
                {
                    url: 'category/delete.php',
                    method: 'post',
                    data:{CDel_ID:CDelete_ID},
                    encode : true
                    })
                   .done(function(data) {
                    
                        $('#cdelete-message').html(data).hide(5000);
                        $('#deletecategory').modal('hide');
                        
                      });
                
              event.preventDefault();
        })
    })
$(document).on('click','#btn_editcategory',function(event)
    {
         var idc = $(this).attr('data-id');
        $.ajax(
            {
                url: 'category/get_data.php',
                method: 'post',
                data:{CategoryID:idc},
                dataType: 'JSON',
              
                })
                   .done(function(data) {
                  console.log(data[2])
                   $('#UpCategoryId').val(data[1]);
                   $('#UpCategoryName').val(data[2]);
                   $('#UpSousCategoryId').val(data[3]);

                   $('#updatecategory').modal('show');
                   
                 
                      });
                
                
           
    })
 $(document).on('click','#btn_Categoryupdate',function(event)
    {
        var UpdateCID = $('#UpCategoryId').val();
        var UpdateCategory = $('#UpCategoryName').val();
        var UpdateCsi = $('#UpSousCategoryId').val();
       

        if(UpdateCID=="" || UpdateCategory=="" || UpdateCsi=="")
        {
            $('#cup-message').html('please Fill in the Blanks');
            $('#updatecategory').modal('show');
        }
        else
        {
              $.ajax(
                {
                    url: 'category/update.php',
                    method: 'post',
                    data:{C_ID:UpdateCID,C_category:UpdateCategory,C_sci:UpdateCsi},
                   })
                   .done(function(data) {
                        $('#cup-message').html(data);
                        $('#updatecategory').modal('show');
                        
                    });
                
        }

 })
 ////////////////////carousel////////////////////////////////////////////
 $(document).on('click','#btn_deletecarousel',function(event)
    {
        var CaDelete_ID = $(this).attr('data-id1');
        $('#deletecarousel').modal('show');

        $(document).on('click','#btn_delete_carousel',function()
        {
            $.ajax(
                {
                    url: 'carosl/delete.php',
                    method: 'post',
                    data:{CaDel_ID:CaDelete_ID},
                    encode : true
                    })
                   .done(function(data) {
                    
                        $('#cadelete-message').html(data).hide(5000);
                        $('#deletecarousel').modal('hide');
                        
                      });
                
              event.preventDefault();
        })
    })

$(document).on('click','#btn_registercarousel',function(event){

	        var formData = {
            'idca'              : $('#CarouselId').val(),
            'nameca'            : $('#CarouselName').val(),
            'imgca'            : $('#Carouselimg').val(),
           
        };
   
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'carosl/insert.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'html', // what type of data do we expect back from the server
            encode       : true
        })

            .done(function(data) {
            $('#Registrationcarousel').modal('hide');
            alert(data)
           
			  
          
            });


        event.preventDefault();


 
  })


$(document).on('click','#btn_editcarousel',function(event)

    {

         var idcar = $(this).attr('data-id');
        $.ajax(
            {
                url: 'carosl/get_data.php',
                method: 'post',
                data:{CarouselID:idcar},
                dataType: 'JSON',
                encode       : true
                })
                   .done(function(data) {
                   $('#UpCarouselId').val(data[1]);
                   $('#UpCarouselName').val(data[2]);
                   $('#UpCarouselImg').val(data[3]);

                   $('#updateCarousel').modal('show');
                   
                 
                      });
                
                  event.preventDefault();
      
           
    })
 $(document).on('click','#btn_updateca',function(event)
    {
        var UpdateCaID = $('#UpCarouselId').val();
        var UpdateCarousel = $('#UpCarouselName').val();
        var UpdateCaimg = $('#UpCarouselImg').val();
       

        if(UpdateCaID=="" || UpdateCarousel=="" || UpdateCaimg=="")
        {
            $('#upca-message').html('please Fill in the Blanks');
            $('#updateCarousel').modal('show');
        }
        else
        {
              $.ajax(
                {
                    url: 'carosl/update.php',
                    method: 'post',
                    data:{Ca_ID:UpdateCaID,Ca_carousel:UpdateCarousel,Ca_cimg:UpdateCaimg},
                   })
                   .done(function(data) {
                        $('#upca-message').html(data);
                        $('#updateCarousel').modal('show');
                        
                    });
                
        }

 })

////////////////////////////produit/////////////////////////////

 })

  

    

