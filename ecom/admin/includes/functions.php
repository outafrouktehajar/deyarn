<?php 
session_start();
require "connection.php";


function display_record()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-hover">
                    <tr style="background-color: #745975; color: white">
                        <td> User ID </td>
                        <td> User User </td>
                        <td> User Email</td>
                        <td> User Password</td>
                        <td> Edit </td>
                        <td> Delete </td>
                    </tr>';
        $query = "select * from user ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr >
                            <td> '.$row['id'].' </td>
                            <td> '.$row['nom'].' </td>
                            <td> '.$row['email'].'</td>
                            <td> '.$row['passw'].'</td>
                            <td> <button class="btn" id="btn_edit" data-id='.$row['id'].' style="background-color: #745975; color: white"><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn" id="btn_delete" data-id1='.$row['id'].' style="background-color: white; color: #745975"><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }
function delete_record()
    {
        global $con;
        $Del_Id = $_POST['Del_ID'];
        $query = "delete from user where id='$Del_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    function update_value()
    {
        global $con;
        $Update_ID = $_POST['U_ID'];
        $Update_User =$_POST['U_User'];
        $Update_Email = $_POST['U_Email'];
        $Update_Password = $_POST['U_Password'];

        $query = "UPDATE user SET id='$Update_ID' , nom='$Update_User', email='$Update_Email', passw='$Update_Password' WHERE id='$Update_ID' ";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo ' Your Record Has Been Updated ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    function get_record()
    {
        global $con;
        $UserId = $_POST['UserID'];
        $query = "select * from user where id='$UserId'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_array($result))
        {
           
            $User_data[1]=$row['nom'];
            $User_data[2]=$row['email'];
            $User_data[3]=$row['passw'];
            $User_data[4]=$row['id'];
        }
    

        echo json_encode($User_data);
    }





//////////////////////////ADMIN//////////////////////////

    function  display_Admin()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-hover">
                    <tr style="background-color: #745975; color: white">
                        <td> Admin ID </td>
                        <td> Admin User </td>
                        <td> Admin Email</td>
                        <td> Admin Password</td>
                        <td> Edit </td>
                        <td> Delete </td>
                    </tr>';
        $query = "select * from admin ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr >
                            <td> '.$row['id'].' </td>
                            <td> '.$row['nom'].' </td>
                            <td> '.$row['email'].'</td>
                            <td> '.$row['password'].'</td>
                            <td> <button class="btn" id="btn_editadmin" data-id='.$row['id'].' style="background-color: #745975; color: white"><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn" id="btn_deleteadmin" data-id1='.$row['id'].' style="background-color: white; color: #745975"><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }


   function  delete_Admin()
    {
        global $con;
        $ADel_Id = $_POST['ADel_ID'];
        $query = "delete from admin where id='$ADel_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }



 function  get_Admin()
    {
        global $con;
        $AdminId = $_POST['AdminID'];
        $query = "select * from admin where id='$AdminId'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_array($result))
        {
           $Admin_data[1]=$row['id'];
            $Admin_data[2]=$row['nom'];
            $Admin_data[3]=$row['email'];
            $Admin_data[4]=$row['password'];
           
        }
    

        echo json_encode($Admin_data);
    }



     function  update_Admin()
    {
        global $con;
        $Update_AID = $_POST['A_ID'];
        $Update_Admin =$_POST['A_User'];
        $Update_AEmail = $_POST['A_Email'];
        $Update_APassword = $_POST['A_Password'];

        $query = "UPDATE admin SET id='$Update_AID' , nom='$Update_Admin', email='$Update_AEmail', password='$Update_APassword' WHERE id='$Update_AID' ";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo ' Your Record Has Been Updated ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

/////////////////////////////category////////////////////////////
    function display_Category()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-hover">
                    <tr style="background-color: #745975; color: white">
                        <td> Cayegory Id  </td>
                        <td> Cayegory </td>
                        <td> Id Sous category</td>
                        <td> Edit </td>
                        <td> Delete </td>
                    </tr>';
        $query = "select * from shopcat ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr >
                            <td> '.$row['id'].' </td>
                            <td> '.$row['nom'].' </td>
                            <td> '.$row['id_shop'].'</td>
                            <td> <button class="btn" id="btn_editcategory" data-id='.$row['id'].' style="background-color: #745975; color: white"><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn" id="btn_deletecategory" data-id1='.$row['id'].' style="background-color: white; color: #745975"><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }


function delete_category()
    {
        global $con;
        $CDel_Id = $_POST['CDel_ID'];
        $query = "delete from shopcat where id='$CDel_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
function  get_Category()
    {
        global $con;
        $CategoryId = $_POST['CategoryID'];
        $query = "select * from shopcat where id='$CategoryId'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_array($result))
        {
           $Category_data[1]=$row['id'];
            $Category_data[2]=$row['nom'];
            $Category_data[3]=$row['id_shop'];
            
           
        }
    

        echo json_encode($Category_data);
    }



     function  update_Category()
    {
        global $con;
        $Update_CID = $_POST['C_ID'];
        $Update_Category =$_POST['C_category'];
        $Update_Sci = $_POST['C_sci'];
       

        $query = "UPDATE shopcat SET id='$Update_CID' , nom='$Update_Category', id_shop='$Update_Sci' WHERE id='$Update_CID' ";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo ' Your Record Has Been Updated ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
///////////////////////////carousel//////////////////////////////
     function display_carousel()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-hover">
                    <tr style="background-color: #745975; color: white">
                        <td> Carousel Id  </td>
                        <td>Carousel Title </td>
                        <td> Image </td>
                        <td> Edit </td>
                        <td> Delete </td>
                    </tr>';
        $query = "select * from carous ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr >
                            <td> '.$row['id'].' </td>
                            <td> '.$row['caro_title'].' </td>
                            <td> '.$row['caro_img'].'</td>
                            <td> <button class="btn" id="btn_editcarousel" data-id='.$row['id'].' style="background-color: #745975; color: white"><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn" id="btn_deletecarousel" data-id1='.$row['id'].' style="background-color: white; color: #745975"><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }


    function delete_carousel()
    {
        global $con;
        $CaDel_Id = $_POST['CaDel_ID'];
        $query = "delete from carous where id='$CaDel_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
function  get_carousel()
    {
        global $con;
        $CarouselyId = $_POST['CarouselID'];
        $query = "select * from carous where id='$CarouselyId'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_array($result))
        {
           $Carousel_data[1]=$row['id'];
            $Carousel_data[2]=$row['caro_title'];
            $Carousel_data[3]=$row['caro_img'];
            
           
        }
    

        echo json_encode($Carousel_data);
    }
     function  update_Carousel()
    {
        global $con;
        $Update_CaID = $_POST['Ca_ID'];
        $Update_Carousel =$_POST['Ca_carousel'];
        $Update_Cimg = $_POST['Ca_cimg'];
       

        $query = "UPDATE carous SET id='$Update_CaID' , caro_title='$Update_Carousel', caro_img='$Update_Cimg' WHERE id='$Update_CaID' ";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo ' Your Record Has Been Updated ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    //////////////////////////////produit///////////////////////////////////
     function display_produit()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-hover">
                    <tr style="background-color: #745975; color: white">
                        <td> Product Id  </td>
                        <td>Name of Product</td>
                        <td> Description </td>
                        <td> prix </td>
                        <td> fiber </td>
                        <td> date </td>
                        <td>nv</td>
                        <td> category </td>
                        <td> color </td>
                        <td> weight </td>
                        <td> color </td>
                        <td> idhookscat </td>
                        <td> type </td>
                        <td> Edit </td>
                        <td> Delete </td>
                        
                    </tr>';
        $query = "select * from produits ";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $value.= ' <tr >
                            <td> '.$row['id'].' </td>
                            <td> '.$row['nom'].' </td>
                            <td> '.$row['description'].'</td>
                            <td> '.$row['prix'].' </td>
                            <td> '.$row['fiber'].' </td>
                            <td> '.$row['date'].'</td>
                            <td> '.$row['nv'].' </td>
                            <td> '.$row['category'].' </td>
                            <td> '.$row['color'].'</td>
                            <td> '.$row['weight'].' </td>
                            <td> '.$row['idhookscat'].' </td>
                            <td> '.$row['type'].'</td>
                            <td> <button class="btn" id="btn_editproduit" data-id='.$row['id'].' style="background-color: #745975; color: white"><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn" id="btn_deleteproduit" data-id1='.$row['id'].' style="background-color: white; color: #745975"><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }

?>
