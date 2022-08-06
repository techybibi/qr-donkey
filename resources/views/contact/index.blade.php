@extends('layouts.admin_layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Blogs</h4>
    <div class="card">
        <h5 class="card-header">My Bogs</h5>
        @if(session()->has('message'))
        <div class="alert alert-success text-center" role="alert"> {{ session()->get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
            <div class="col-md-3 mb-2 mr-5" style="margin-left: 10px;">

            <a href="{{ route('contacts.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
            </div>
          <table class="table contact-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Company</th>
                <th>Phnoe 1</th>
                <th>Phnoe 2</th>
                <th>Website</th>
                <th>Googlemap Link</th>
                <th>Address</th>
                <th>Is redirect</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($contacts as $contact)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $contact->name }}</strong></td>
                    <td>
                        <img src="{{ asset('/storage/contact-images/'.$contact->image) }}" width="50" height="50">
                    </td>
                    <td>{{ $contact->company }}</td>
                    <td>{{ $contact->phone_1 }}</td>
                    <td>{{ $contact->phone_2 }}</td>
                    <td>{{ $contact->website_link }}</td>
                    <td>{{ $contact->google_map_link }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        @if ($contact->is_redirect == 1)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-danger">No</span>
                        @endif
                    </td>
                    <td class="text-center">
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('contacts.edit',$contact->unique_id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="{{ route('contacts.delete',$contact->unique_id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
