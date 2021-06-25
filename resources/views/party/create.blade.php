@extends('layout.master')

@section('title', $meta['title']);

@section('main')

    <div class="container">

        <h3 class="mt-4 mb-3 text-center fw-bold">Party Informatoin</h3>

        <div>
            <form action="" >
                <div class="row">
                    <div class="mb-3 col-sm-6">
                        <label for="companyName" class="form-label">Organization/Company Name :</label>
                        <input type="text" class="form-control" id="companyName">
                    </div>
                    <div class="mb-3 col-sm-6 ">
                        <label for="ownerName" class="form-label">Owner Name :</label>
                        <input type="text" class="form-control" id="ownerName">
                    </div>

                    <div class="mb-3 col-sm-12">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>

                    <div class="mb-3 col-sm-8">
                        <label for="address" class="form-label">Address :</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="mb-3 col-sm-4">
                        <label for="phone" class="form-label">Phone No :</label>
                        <input type="text" class="form-control" id="phone">
                    </div>

                    <div class="mb-3 col-sm-12">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                   <div class="mb-3 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text fw-bold ">Balance:</span>
                        {{-- <label for="number" class="form-label">Balance</label> --}}
                        <input type="number" class="form-control form-control-lg" id="number" placeholder="0.00">
                      </div>
                   </div>

                   <div class="mb-3 col-sm-3">
                      <select class="form-select  form-select-lg" >
                        <option selected>Party Type</option>
                        <option value="1">Customer</option>
                        <option value="2">Supplier</option>
                      </select>
                   </div>
  
                   <div class="mb-3 col-sm-3">
                    <select class="form-select form-select-lg" >
                        <option selected>Balance Type</option>
                        <option value="1">Payable</option>
                        <option value="2">Receiveable</option>
                      </select>
                   </div>
                
                    <div class="mb-3 col-sm-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                     </div>

            
                </div>

            
            </form>

        </div>
        
   

        {{-- class="d-flex justify-content-center" --}}

     
    </div>
    
@endsection