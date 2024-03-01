<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
 <base href="/public">

  @include('admin.css')
<style type="text/css">
   
      
    label
    {
        display: inline-block;
        width: 200px;
    }

</style>
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
    <!-- partial:./partials/_sidebar.html -->
      @include('admin.sidebar')

    <!-- partial -->
      @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding-top: 100px;">

    
     
        <h1 style="font-size: 20px; font-weight: bold;">Modifier Destination</h1>

     </div>

         <form action="{{url('mofidier_destination',$destination->id)}}" method="POST" enctype="multipart/form-data">     

        @csrf
       
         <div style="padding:15px;">

           <label>name</label>

           <input type="text" style="color:black;" name="name"  value="{{$destination->name}}" required="">

         </div>
        
        

        <div style="padding:15px;"><label>Description</label>
      
           <textarea name="description">
          {{$destination->description}}
           </textarea>

        </div>
        
        <div style="padding:15px;">

         <label>Type</label>
           <select name="type" >
            <option selected value="{{$destination->type}}">{{$destination->type}}</option>

            <option value="type">Type</option>
            <option value="plages méditerranéennes ">plages méditerranéennes </option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>

         </select>
      
     </div>
 
     <div style="padding:15px;">

          <label>Ville</label>
           <select name="city" >
            <option selected value="{{$destination->city}}">{{$destination->city}}</option>

           <option value="city">ville</option>
           <option value="gabes ">Gabes</option>
           <option value="douz">douz</option>
           <option value="nabel">nabel</option>
           <option value="mestir">mestir</option>

         </select>

    </div>
           

            
           <div style="padding:15px;">
              <label>Service</label>
              <input type="text" style="color:black;" name="service" value="{{$destination->service}}">

            </div>

            <div style="padding:15px;">
              
              <label>Météo</label>
              <input type="number" style="color:black;" name="météo" value="{{$destination->météo}}">

            </div>


            <div style="padding:15px;">
            
              <label>Coordonnée géographique</label>
              <input type="text" style="color:black;" name="geographic_coordinates" placeholder="écrire le nom" required="">

            </div>

            
            <div style="padding:15px;" >
                <label >Image</label>
                <img style="margin: auto" width=" 100" src="/{{$destination->picture}}">
            </div>
            <div style="padding:15px;">
                <label >Image</label>
                <input type="file" name="picture">
           </div>

            <div style="padding:15px;">
                <input class="btn btn-primary" type="submit" value="Modifier">
            </div>
  <!-- container-scroller -->

  <!-- base:js -->

  @include('admin.script')
  
  <!-- End custom js for this page-->
</body>

</html>


