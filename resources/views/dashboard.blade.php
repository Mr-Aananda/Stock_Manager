@extends('layout.master')

@section('title', $meta['title'])

@section('main')
 
    <div class="container">
        <h3 class= "text-center mt-5 fw-bolder" >Welcome to Dashboard</h3>

        <div class="row d-flex justify-content-around">
            <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h2 class="card-title text-center fw-bold">50</h2>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Total Supplier</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">Details..</button>
                  </div>
                 
                </div>
              </div>

              <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold">1550</h3>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Total Customer</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">Details..</button>
                  </div>
                 
                </div>
              </div>

              <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold">BDT 50,00,000.00</h3>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Total Stock</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">More..</button>
                  </div>
                 
                </div>
              </div>

              <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold">BDT 20,45,000</h3>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Total Receiveable</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">More..</button>
                  </div>
                 
                </div>
              </div>

              <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold">BDT 50,54,534</h3>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Total Payable</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">More..</button>
                  </div>
                 
                </div>
              </div>

              
              <div class="card mt-5 col-sm-6" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title text-center fw-bold">07</h3>
                  <hr>
                  <h5 class="card-subtitle mb-2 text-center text-muted mb-3">Warehouses</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary ">Details..</button>
                  </div>
                 
                </div>
              </div>


        </div>



    </div>
    
@endsection