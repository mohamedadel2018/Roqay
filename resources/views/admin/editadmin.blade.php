@extends('admin.layout')
@section('layout')


                <!-- Begin Page Content -->
                <div class="container-fluid">

<div class="row justify-content-center">
    <div class="col-md-7 col-sm-10">
        <div class="contact-form">
            <form  action="{{route('admins.update',$admin->id)}}" method="POST" style="margin-bottom: 150px;">
                @csrf @method('PUT')
                <div class="form-group ">
                    <label for="inputName">Name</label>
                    
                     <input id="name" type="text" placeholder=" Name here" class="form-control @error('name') is-invalid @enderror" 
                     name="name" value="{{$admin->name}}" required autocomplete="name" autofocus>
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="inputsemail">email </label>
              
                     <h6> (if admin has problem in mail you can check here mail) </h6>
                    <input id="email" type="email" placeholder="Write your email here" class="form-control @error('email')  is-invalid @enderror"
                     name="email" value="{{ $admin->email  }}"  autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              

                

                <div class="text-center p-2">
                  
                    <button type="submit" class="btn btn-primary" style="margin-bottom:20px">
                          Update
                    </button>
            </form>

                {{-- form for delete admin --}}
                <form action="{{route('admins.destroy',$admin->id)}}" method="POST">
                    @csrf @method('delete')
                  <button type="submit" class='btn btn-danger'>Delete</button>  
              </form>
            {{-- end form --}}
</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           





@endsection