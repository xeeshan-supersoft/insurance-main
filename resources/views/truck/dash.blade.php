@extends('layouts/contentNavbarLayout')
@section('title', ' Vertical Layouts - Forms')
@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Truckers Certificate of Insurance</h4>
<p>Please fill out the following information and press the submit button to request a certificate of insurance. Your request will be processed and sent to you as soon as possible. Certificates will only be issued upon verification of coverage.</p>
  <form method="post" {{ route('form.user') }} action="reg" >
    @csrf
<!-- Basic Layout -->
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
@endif 
@if($errors->any())
   
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endforeach  
@endif



<div class="row"> 
    <!---------------------------------------------------------------------------------------------------------------------------
      --------------------------------------------------------------- PRODUCER  ---------------------------------------------------
      ----------------------------------------------------------------------->
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">PRODUCER</h5> <small class="text-muted float-end">USER INFO</small>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-6">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
            <label for="basic-default-fullname">INSURNAME</label>
          </div>
        </div>
          <div class="col-6">
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
                <label for="basic-default-company">Insured's MC #</label>
            </div>
    </div>
    <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
          <label for="basic-default-fullname">Certificate Holder</label>
        </div>
      </div>
        <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
          <label for="basic-default-company">Street Address</label>
      </div>
  </div>
  <div class="col-6">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
      <label for="basic-default-fullname">Street Address LINE 2</label>
    </div>
  </div>
    <div class="col-4">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
      <label for="basic-default-company">CITY</label>
  </div>
</div>
        <div class="col-4">
        <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
            <label for="basic-default-company">STATE</label>
        </div>
    </div>  <div class="col-4">
        <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" name="password"id="basic-default-company"  placeholder="********" />
            <label for="basic-default-company">ZIP CODE</label>
        </div>
    </div> 
        
    <div class="col-6">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control"name="email" id="basic-default-company" placeholder="Address line1" />
          <label for="basic-default-company">EAMIL</label>
      </div>
  </div>
  <div class="col-6">
    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control" name="username" id="basic-default-fullname" placeholder="ACME Inc." />
      <label for="basic-default-fullname">PHONE #</label>
    </div>
  </div>
      </div>
          
         
                
      </div>    
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button> 
    </form>

@endsection
