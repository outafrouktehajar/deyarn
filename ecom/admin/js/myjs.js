$(document).ready(function()
{
    Insert_record();
    view_record();
    get_record();
    update_record();
    delete_record();

     Insert_admin();
    view_admin();
    get_admin();
    update_admin();
    delete_admin();

   

})
////////////////////////////////////////////USER//////////////////////////////////////////////////////////////
// Insert Record in the Database
function Insert_record()
{
   $(document).on('click','#btn_register',function()
   {
        
         var Id = $('#UserId').val();
         var User = $('#UserName').val();
        var Email = $('#UserEmail').val();
        var Password = $('#Userpass').val();
       
        if(Id=="" || User == "" || Email=="" || Password == "")
        {
            $('#message').html('Please Fill in the Blanks ');
        }
        else
        {
            $.ajax(
                {
                    url : 'users/insert.php',
                    method: 'post',
                    data:{UId:Id,UName:User,UEmail:Email,UPass:Password},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('#Registration').modal('show');
                        $('form').trigger('reset');
                        view_record();
                    }
                })
        }
        
   })

   $(document).on('click','#btn_close',function()
   {
       $('form').trigger('reset');
       $('#message').html('');
   })   
}

// Display Record
function view_record()
{
     $('.users').click(function(){
    $.ajax(
        {
            url: 'users/view.php',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {

                    $('.table').html(data.html);
                }
                else
                {
                    $('.table').html("errour");
                }
            }
        })
    })
     
}

//Get Particular Record
function get_record()
{
    $(document).on('click','#btn_edit',function()
    {
        var ID = $(this).attr('data-id');
        $.ajax(
            {
                url: 'users/get_data.php',
                method: 'post',
                data:{UserID:ID},
                dataType: 'JSON',
                success: function(data)
                {
                   $('#Up_User_ID').val(data[0]);
                   $('#Up_UserName').val(data[1]);
                   $('#Up_UserEmail').val(data[2]);
                   $('#Up_UserPassword').val(data[2]);
                   $('#update').modal('show');
                   
                }
                
            })
    })
}

// Update Record 
function update_record()
{
    
    $(document).on('click','#btn_update',function()
    {
        var UpdateID = $('#Up_User_ID').val();
        var UpdateUser = $('#Up_UserName').val();
        var UpdateEmail = $('#Up_UserEmail').val();
        var UpdatePassword = $('#Up_UserPassword').val();

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
                    success: function(data)
                    {
                        $('#up-message').html(data);
                        $('#update').modal('show');
                        view_record();

                    }
                })
        }
        
    })
}

// Delete Function
function delete_record()
{
    $('.glo').on('click','#btn_delete',function()
    {
        var Delete_ID = $(this).attr('data-id1');
        $('#delete').modal('show');

        $('#delete').on('click','#btn_delete_record',function()
        {
            $.ajax(
                {
                    url: 'users/delete.php',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    success: function(data)
                    {
                        $('#delete-message').html(data).hide(5000);
                        
                        view_record();
                    }
                })
        })
    })
}


/////////////////////////////////////////////////ADMIN///////////////////////////////////////////////////////////

function Insert_admin()
{
   $(document).on('click','#btn_adminregister',function()
   {
        
        
         var Id = $('#AdminId').val();
         var Admin = $('#AdminName').val();
        var Email = $('#AdminEmail').val();
        var Password = $('#Adminpass').val();
       
        if(Id=="" || Admin == "" || Email=="" || Password == "")
        {
            $('#message').html('Please Fill in the Blanks ');
        }
        else
        {
            $.ajax(
                {
                    url : 'admin/insert.php',
                    method: 'post',
                    data:{AName:Admin,AEmail:Email,AId:Id,APass:Password},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('#Registration').modal('show');
                        $('form').trigger('reset');
                        view_record();
                    }
                })
        }
        
   })

   $(document).on('click','#btn_close',function()
   {
       $('form').trigger('reset');
       $('#message').html('');
   })   
}

// Display Record
function view_admin()
{
     
 $('.admin').click(function(){
    $.get("admin/admin.php",null,function(data){

      

    $.ajax(
        {
            url: 'admin/view.php',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {

                    $('.table').html(data.html);
                }
            }
        })
    })
     })
}

//Get Particular Record
function get_admin()
{
    $(document).on('click','#btn_Adminedit',function()
    {
        var IDA = $(this).attr('data-id');
        $.ajax(
            {
                url: 'admin/get_data.php',
                method: 'post',
                data:{AdminIDA:IDA},
                dataType: 'JSON',
                success: function(data)
                {
                   $('#Up_Admin_ID').val(data[0]);
                   $('#Up_AdminName').val(data[1]);
                   $('#Up_AdminEmail').val(data[2]);
                   $('#Up_AdminPassword').val(data[2]);
                   $('#update').modal('show');
                   
                }
                
            })
    })
}

// Update Record 
function update_admin()
{
    
    $(document).on('click','#btn_Adminupdate',function()
    {
        var UpdateIDAdmin = $('#Up_Admin_ID').val();
        var UpdateAdmin = $('#Up_AdminName').val();
        var UpdateEmailAdmin = $('#Up_AdminEmail').val();
        var UpdatePasswordAdmin = $('#Up_AdminPassword').val();

        if(UpdateIDAdmin=="" || UpdateAdmin=="" || UpdateEmailAdmin=="" || UpdatePasswordAdmin=="")
        {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        }
        else
        {
            $.ajax(
                {
                    url: 'admin/update.php',
                    method: 'post',
                    data:{A_ID:UpdateIDAdmin,A_Admin:UpdateAdmin,A_Email:UpdateEmailAdmin,A_Password:UpdatePasswordAdmin},
                    success: function(data)
                    {
                        $('#up-message').html(data);
                        $('#update').modal('show');
                        view_record();

                    }
                })
        }
        
    })
}

// Delete Function
function delete_admin()
{
    $('.glo').on('click','#btn_Admindelete',function()
    {
        var Delete_IDA = $(this).attr('data-id1');
        $('#delete').modal('show');

        $('#delete').on('click','#btn_delete_admin',function()
        {
            $.ajax(
                {
                    url: 'admin/delete.php',
                    method: 'post',
                    data:{Del_IDA:Delete_IDA},
                    success: function(data)
                    {
                        $('#delete-message').html(data).hide(5000);
                        
                        view_record();
                    }
                })
        })
    })
}
