<?php
//connexion
 require('../includes/connection.php');
?> <div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn" data-toggle="modal" data-target="#RegistrationA" style="background-color: #745975; color: white ;float: right;" >Add New Admin </button>
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
    <div class="modal" id="RegistrationA">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Registration Form</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
               <input name="ida" type="email" class="form-control my-2" placeholder="Admin Id" id="AdminId">
              <input name="noma" type="text" class="form-control my-2" placeholder="Admin Name" id="AdminName">
              <input name="emaila" type="email" class="form-control my-2" placeholder="Admin Email" id="AdminEmail">
               <input name="passwa" type="email" class="form-control my-2" placeholder="Admin Password" id="Adminpass">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn " id="btn_adminregister" style="background-color: #745975; color: white">Register Now</button>
            <button type="button" class="btn " data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Update Modal-->
     <div class="modal" id="Aupdate">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Update Form</h3>
          </div>
          <div class="modal-body">
          <p id="aup-message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="Admin Id" id="Up_Admin_ID">
              <input type="text" class="form-control my-2" placeholder="Admin Name" id="Up_Admin_Name">
              <input type="email" class="form-control my-2" placeholder="Admin Email" id="Up_Admin_Email">
               <input type="text" class="form-control my-2" placeholder="Admin Password" id="Up_Admin_Password">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" id="btn_Adminupdate" style="background-color: #745975; color: white">Update Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Delete Modal-->
    <!--Update Modal-->
    <div class="modal" id="deleteA">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Delete Record</h3>
          </div>
          <div class="modal-body">
              <p id="adelete-message" class="text-dark"></p>
            <p> Do You Want to Delete the Record ?</p>
            <button type="button" class="btn" id="btn_delete_admin"  style="background-color: #745975; color: white">Delete Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>