<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <style type="text/css" >

    label
    {
        display: inline-block;
        width: 200px;
    }

    

  </style>

  @include('admin.css')

</head>
<body>

<div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/spica-admin/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/spica-admin/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white mr-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
   


  
  <div class="container-scroller d-flex">
    
   
    <!-- partial:./partials/_sidebar.html -->
      @include('admin.sidebar')

    <!-- partial -->
      @include('admin.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding-top: 100px;">

        @if(session()->has('message'))

         <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert"></button>

          {{session()->get('message')}}

         </div>
         @endif


            <form action="{{url('telecharger_destination')}}" method="POST" enctype="multipart/form-data">

              @csrf

              <div style="padding:15px;">

                <label>Nom  Destination</label>
                <input type="text" style="color:black;" name="name" placeholder="écrire le nom" required="">

              </div>

              <div style="padding:15px;">
              
                <label>Description</label>
                <input type="text" style="color:black;" name="description" placeholder="écrire le description" required="">

              </div>

              

              <div style="padding:15px;">
              
                <label>Type</label>

                <select name="type" style="color: black; width: 200px" required="">

                  <option value="Type">Type</option>
                  <option value="plages méditerranéennes ">plages méditerranéennes </option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>

                </select>
              </div>

              <div style="padding:15px;">
              
                <label>Ville</label>
                <input type="text" style="color:black;" name="city" placeholder="écrire le Ville" required="">

              </div>


              
              <div style="padding:15px;">
              
                <label>Service</label>
                <input type="text" style="color:black;" name="service" placeholder="écrire le service" required="">

              </div>


              <div style="padding:15px;">
              
                <label>Météo</label>
                <input type="number" style="color:black;" name="météo" placeholder="écrire le Numéro" required="">

              </div>


              <div style="padding:15px;">
              
                <label>Coordonnée géographique</label>
                <input type="text" style="color:black;" name="geographic_coordinates" placeholder="écrire le nom" required="">

              </div>


              <div style="padding:15px;">
              
                <label>Image destination</label>
                <input type="file" style="color:black;" name="file" placeholder="choisir fichier" required="">

              </div>


              <div style="padding:15px;">
                <input type="submit" class="btn btn-success">
              </div>

              

            </form>

        </div>

   </div>
     
                         
  <!-- container-scroller -->

  <!-- base:js -->

  @include('admin.script')
  
  <!-- End custom js for this page-->
</body>

</html>
