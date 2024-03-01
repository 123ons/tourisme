<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
    
    
    @include('admin.css')

  <style type="text/css">

  .table_deg
  {
    border:2px solid black;
    margin: auto;
    width: 80%;
    text-align: center;
    margin-top: 40px;
  }

  .th_deg
  {
    background-color: skyblue;
    padding: 20px;
  }
  tr
  {
    border= 3px solid black;
  }
  tr
  {
    padding: 10px;

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
      <table class="table_deg">
        <tr>
            <th class="th_deg">Nom</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">Type</th>
            <th class="th_deg">ville</th>
            <th class="th_deg">Service</th>
            <th class="th_deg">Météo</th>
            <th class="th_deg">coordonnée_géographique</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Supprimer</th>
            <th class="th_deg">Modifier</th>
        </tr>
        @foreach($destination as $destination )
        
        
        <tr>
            <td>{{$destination->name}}</td>
            <td>{!! Str::limit($destination->description,150) !!}</td>
            <td>{{$destination->type}}</td>
            <td>{{$destination->city}}</td>
            <td>{{$destination->service}}</td>
            <td>{{$destination->météo}}</td>
            <td>{{$destination->geographic_coordinates}}</td>
            <td>
                <img width="100" src="/{{$destination->picture}}">
            </td>
            <td>
                <a onclick="return confirm('es-tu sur de supprimer ceci');" class="btn btn-danger" 
                href="{{url('supprimer_destination',$destination->id)}}">Delete</a>
            </td>
            <td>
                <a class="btn btn-warning" 
                href="{{url('modifier_destination',$destination->id)}}">Modifier</a>
            </td>
        </tr>

        @endforeach
      </table>
                         
  <!-- container-scroller -->

  <!-- base:js -->

  @include('admin.script')
  
  <!-- End custom js for this page-->
</body>

</html>


