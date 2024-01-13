@extends('admin.admin-template')
@section('title','Admin | User List')
@include('admin.sidebar')
@section('content')
<main id="main" class="main">
<!-- User List -->
<div class="text-center text-lg">Users List</div>
  <div class="users-list bg-gray-500">
    <div class="table">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Profile Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">View</th>
            <th scope="col">Ban</th>
          </tr>
        </thead>
        <tbody>
          @foreach($UserList as $user)
          <tr>
            <th scope="row">
              <img src="{{ $user->profile_picture }}" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
            </th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><button class="btn btn-primary"><i class="bi bi-eye-fill"></i></button></td>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#confirmationModal{{ $user->id }}">
                <i class="bi bi-ban"></i>
              </button>
            </td>
          </tr>

          <!-- Modal -->
          <div class="modal fade" id="confirmationModal{{ $user->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ban user ? </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  This action will restrict the user from logging in.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" onclick="banUser({{ $user->id }})">Ban</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Modal -->

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      {{ $UserList->links() }}
    </ul>
  </nav>

  <script>
    function banUser(userId) {
      axios.post(`/admin/ban-user/${userId}`)
        .then(response => {
          console.log('User banned successfully');
          location.reload();
        })
        .catch(error => {
          console.error('Error banning user', error);
        });
    }
  </script>
<main>
@endsection