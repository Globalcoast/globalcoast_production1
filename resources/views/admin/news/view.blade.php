
@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')


<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            




<div class="col-md-1 col-lg-1"></div>
  <div class="col-sm-12 col-md-10 col-lg-10 col-xs-12" style="background-color: white;">
    <br>
    <div class="thumbnail">
    
      <div class="caption">
        <h3>{{$News->title}}</h3>
        <hr>
       <p>

          {!!html_entity_decode($News->message)!!}

            
               </p>
        <p>

           
                    <a href="{{URL::to('admin/news')}}" class="btn btn-primary" role="button">Back</a>
                 

           

        </p>
      </div>
    </div>
  </div>

  <div class="col-md-1 col-lg-1"></div>










 


                    
                </div>
                <!-- Row -->

 </div>


 <br><br>
 






                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->



@endsection