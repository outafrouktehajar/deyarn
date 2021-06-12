<?php
//connexion
 require('../includes/connection.php');
?> <div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn" data-toggle="modal" data-target="#Categoryadd" style="background-color: #745975; color: white ;float: right;">Add New Category </button>
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
    <div class="modal" id="Categoryadd">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Add new category</h3>
          </div>
          <div class="modal-body">
          <p id="camessage" class="text-dark"></p>
            <form>
               <input name="idc" type="text" class="form-control my-2" placeholder="Category Id" id="CategoryId">
              <input name="namec" type="text" class="form-control my-2" placeholder="Category Name" id="CategoryName">
               <input name="idsc" type="email" class="form-control my-2" placeholder="Sous Category Id" id="SousCategoryId">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn " id="btn_categoryregister" style="background-color: #745975; color: white">Register Now</button>
            <button type="button" class="btn " data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Update Modal-->
     <div class="modal" id="updatecategory">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Update Form</h3>
          </div>
          <div class="modal-body">
          <p id="cup-message" class="text-dark"></p>
            <form>
             <input  type="text" class="form-control my-2" placeholder="Category Id" id="UpCategoryId">
              <input  type="text" class="form-control my-2" placeholder="Category Name" id="UpCategoryName">
               <input  type="email" class="form-control my-2" placeholder="Sous Category Id" id="UpSousCategoryId">
              
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" id="btn_Categoryupdate" style="background-color: #745975; color: white">Update Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Delete Modal-->
    <!--Update Modal-->
    <div class="modal" id="deletecategory">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Delete Record</h3>
          </div>
          <div class="modal-body">
              <p id="cdelete-message" class="text-dark"></p>
            <p> Do You Want to Delete the Record ?</p>
            <button type="button" class="btn" id="btn_delete_category"  style="background-color: #745975; color: white">Delete Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>