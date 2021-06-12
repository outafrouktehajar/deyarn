<?php
//connexion
 require('../includes/connection.php');
?> <div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button--> 
              <button type="button" class="btn" data-toggle="modal" data-target="#Registrationproduit" style="background-color: #745975; color: white ; float: right;" >Add New product </button>
            </div>
            <div class="card-body table ">
          
              <div id="table">
   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Registration Modal-->
    <div class="modal" id="Registrationproduit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Registration Form</h3>
          </div>
          <div class="modal-body">
          <p id="camessage" class="text-dark"></p>
            <form>
               <input name="idca" type="text" class="form-control my-2" placeholder="Carousel Id" id="CarouselId">
              <input name="nameca" type="text" class="form-control my-2" placeholder="Carousel title" id="CarouselName">
              <input name="imgca" type="email" class="form-control my-2" placeholder="Image" id="Carouselimg">
               <input name="idca" type="text" class="form-control my-2" placeholder="Carousel Id" id="CarouselId">
              <input name="nameca" type="text" class="form-control my-2" placeholder="Carousel title" id="CarouselName">
              <input name="imgca" type="email" class="form-control my-2" placeholder="Image" id="Carouselimg">
               <input name="idca" type="text" class="form-control my-2" placeholder="Carousel Id" id="CarouselId">
              <input name="nameca" type="text" class="form-control my-2" placeholder="Carousel title" id="CarouselName">
              <input name="imgca" type="email" class="form-control my-2" placeholder="Image" id="Carouselimg">
               <input name="idca" type="text" class="form-control my-2" placeholder="Carousel Id" id="CarouselId">
              <input name="nameca" type="text" class="form-control my-2" placeholder="Carousel title" id="CarouselName">
              <input name="imgca" type="email" class="form-control my-2" placeholder="Image" id="Carouselimg">     
            </form>
          </div>
          <div class="modal-footer">
            <button  type="button" class="btn " id="btn_registercarousel" style="background-color: #745975; color: white">Register Now</button>
            <button type="button" class="btn " data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Update Modal-->
     <div class="modal" id="updateCarousel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Update Carousel</h3>
          </div>
          <div class="modal-body">
          <p id="upca-message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="Carousel Id" id="UpCarouselId" >
              <input  type="text" class="form-control my-2" placeholder="Carousel Title" id="UpCarouselName" >
              <input  type="text" class="form-control my-2" placeholder="Image" id="UpCarouselImg" >
               
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" id="btn_updateca" style="background-color: #745975; color: white">Update Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Delete Modal-->
    <!--Update Modal-->
    <div class="modal" id="deletecarousel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Delete Record</h3>
          </div>
          <div class="modal-body">
              <p id="cadelete-message" class="text-dark"></p>
            <p> Do You Want to Delete the Record ?</p>
            <button type="button" class="btn" id="btn_delete_carousel"  style="background-color: #745975; color: white">Delete Now</button>
            <button type="button" class="btn" data-dismiss="modal" id="btn_close" style="background-color: white; color: #745975">Close</button>
          </div>
        </div>
      </div>
    </div>