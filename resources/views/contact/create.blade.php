@extends('layouts.admin_layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row">

      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Contact</h5>
          </div>
            @if(session()->has('message'))
              <div class="alert alert-success text-center" role="alert"> {{ session()->get('message') }}</div>
            @endif
          <div class="card-body">
            <form action="{{ route('contacts.store') }}" method="POST" id="form_id" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="name" id="name-title" aria-describedby="basic-icon-default-name" required>
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Image</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input type="file" id="image" name="image" class="form-control" aria-describedby="basic-icon-default-email2">
                </div>
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="company">Company</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="company" id="company" >
                </div>
                @error('company')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="phone1">Phone 1</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="phone1" id="phone1" >
                </div>
                @error('phone1')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="phone2">Phone 2</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="phone2" id="phone2" >
                </div>
                @error('phone2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="website_link">Website</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="website_link" id="website" >
                </div>
                @error('website_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="google_map_link">Google map link</label>
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control" name="google_map_link" id="google_map_link" >
                </div>
                @error('google_map_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>


              <div class="mb-3">
                <label class="form-label" for="address">Address</label>
                <div class="input-group input-group-merge">

                  <textarea name="address" id="address"class="form-control">

                  </textarea>
                </div>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="is_redirect">Is redirect</label>
                    <div class="form-check mt-3">
                        <input name="is_redirect" class="form-check-input" type="radio" value="1" id="yes">
                        <label class="form-check-label" for="yes"> Yes </label>
                      </div>
                    <div class="form-check mt-3">
                        <input name="is_redirect" class="form-check-input" type="radio" value="0" id="no" checked>
                        <label class="form-check-label" for="no"> No </label>
                      </div>
                @error('is_redirect')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
