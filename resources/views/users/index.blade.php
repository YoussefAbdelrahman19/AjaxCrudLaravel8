@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row ">
        <div class="mx-auto" style="width:80%;padding:20px">

    <div class="card ">
        <div id="card-header" class=" card-header" style="padding: 0px 15px;">
            <b>Users List</b>
            <span>
                <a href="{{route('register')}}" class=" btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#userModal"><i class="fas fa-plus-circle"></i> Add New User</a>


            </span>
            {{-- Search input --}}
            <div class="main m-2">
              <form action="{{'users'}}" method="get">

                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search with Username or Gender" name="search">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
            </form>


              </div>
              {{-- End of search button --}}

        </div>
        <br>
        <div class="card-body">
            <table class="table table-bordered" id="userList">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($users as $user)
                <tr id="cid{{$user->id}}">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->age }}</td>
                    <td><a href="javascript:void(0)" onclick="editUser(<?php echo $user->id; ?>)" class="btn btn-primary m-2">Edit</a><a href="javascript:void(0)" onclick="deleteUser(<?php echo $user->id; ?>)" class="btn btn-danger m-2">Delete</a></td>
                </tr>
                @endforeach
            </table>
        <div class="text-center">
            {{$users->links('pagination::bootstrap-4')}}
        </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Add user Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id='addUser'>
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" id="age" name="age">

                            <input type="hidden" class="form-control" id="name" name="">
                        </div>
                        <input type="submit" value="Add User" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Update user Modal -->
    <div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id='edituserForm'>
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name1" name="name1">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email1" name="email1">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender1" name="gender1">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" id="age1" name="age1">
                        </div>
                        <input type="submit" value="Update User" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#addUser").submit(function(e){
        e.preventDefault();
        let name = $("#name").val();
        let email = $("#email").val();
        let gender = $("#gender").val();
        let age = $("#age").val();
        let _token = $("input[_token]").val();
        $.ajax({
            url: "{{route('addUser')}}",
            type: "POST",
            data:{
                name:name,
               email:email,
               gender:gender,
                age:age,
                _token: '{{csrf_token()}}'
            },
            success:function(response)
            {
                if(response)
                {
                    $("#userList tbody").append('<tr><td>'+response.id+'<td>'+response.name+'</td><td>'+response.email+'</td><td>'+response.gender+'</td><td>'+response.age+'</td><td>'+"<a href='javascript:void(0)' onclick='editUser("+response.id+")'class='btn btn-primary'>Edit</a><a href='' class='btn btn-danger'>Delete</a>"+'</td></tr>');
                    $("#addUser")[0].reset();
                    $("#userModal").modal('hide');
                }
            }
        });
    });
</script>
<script type="text/javascript">
    function editUser(id)
    {

        $.get('/user/'+id, function(user){
            $("#id").val(user.id);
            $("#name1").val(user.name);
            $("#email1").val(user.email);
            $("#gender1").val(user.gender);
            $("#age1").val(user.age);
            $("#edituserModal").modal('toggle');
        });
    }
        // update the user
        $("#edituserForm").submit(function(e){
            e.preventDefault();
            let id = $("#id").val();
            let name = $("#name1").val();
            let email = $("#email1").val();
            let gender = $("#gender1").val();
            let age = $("#age1").val();
            let _token = $("input[_token]").val();
            $.ajax({
                url: "{{route('updateUser')}}",
                type: "PUT",
                data:{
                    id:id,
                    name:name,
                    email:email,
                    gender:gender,
                    age:age,
                    _token: '{{csrf_token()}}'
                },
                success:function(response)
                {
                    $('#cid' + response.id +' td:nth-child(1)').text(response.id);
                    $('#cid' + response.id +' td:nth-child(2)').text(response.name);
                    $('#cid' + response.id +' td:nth-child(3)').text(response.email);
                    $('#cid' + response.id +' td:nth-child(4)').text(response.gender);
                    $('#cid' + response.id +' td:nth-child(5)').text(response.age);
                    $("#edituserModal").modal('hide');
                    $("#edituserForm")[0].reset();
                }
            });
        });
    </script>
    <script type="text/javascript">
        function deleteUser(id)
        {
            if(confirm("Do you want to delete?"))
            {
                $.ajax({
                    url:'/deleteUser/'+id,
                    type:'DELETE',
                    data:{
                        _token: '{{csrf_token()}}',
                    },
                    success:function(response)
                    {
                        $("#cid"+id).remove();
                    }
                    });
            }
        }
    </script>
</div>
</div>
    @endsection

