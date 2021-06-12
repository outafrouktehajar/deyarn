<?php
//connexion
 require('../includes/connection.php');
?> <div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn" data-toggle="modal" data-target="#Registration" style="background-color: #745975; color: white ; float: right;" >Add New User </button>
            </div>
            <div class="card-body table ">
          
              <div id="table" class="tableuser">
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Registration Modal-->
    <div class="modal" id="Registration">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Registration Form</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
               <input name="id" type="text" class="form-control my-2" placeholder="User Id" id="UserId">
              <input name="nom" type="text" class="form-control my-2" placeholder="User Name" id="UserName">
              <input name="email" type="email" class="form-control my-2" placeholder="User Email" id="UserEmail">
               <input name="mp" type="email" class="form-control my-2" placeholder="User Password" id="Userpass">
            </form>
          </div>
          <div class="modal-footer">
            <button  type="button" class="btn " id="btn_register" style="background-color: #745975; color: white">Register Now</button>
            <button type="button" class="btn " data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Update Modal-->
     <div class="modal" id="update">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Update Form</h3>
          </div>
          <div class="modal-body">
          <p id="up-message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="User Id" id="Up_User_ID" >
              <input  type="text" class="form-control my-2" placeholder="User Name" id="Up_User_Name" >
              <input  type="email" class="form-control my-2" placeholder="User Email" id="Up_User_Email" >
               <input type="text" class="form-control my-2" placeholder="User Password" id="Up_User_Password" >
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" id="btn_update" style="background-color: #745975; color: white">Update Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Delete Modal-->
    <!--Update Modal-->
    <div class="modal" id="delete">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Delete Record</h3>
          </div>
          <div class="modal-body">
              <p id="delete-message" class="text-dark"></p>
            <p> Do You Want to Delete the Record ?</p>
            <button type="button" class="btn" id="btn_delete_record"  style="background-color: #745975; color: white">Delete Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>