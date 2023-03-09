@extends('layouts.app-master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Branch</strong> Information</h1>

        <div class="row">
            <div class="col-md-2 my-4">
                <a class="btn btn-primary" href="{{route('branch.index')}}">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <form action="{{route('branch.update',$branch->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="branch_name" id="branch_name"  class="form-control" placeholder="Branch_Name" value="{{$branch->branch_name}}">
                                <label for="floatingInput">Branch Name</label>
                                @error('branch_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div>
        
                            </div>
                        </div>
                        
                    </div>                  
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
            
                </form>
            </div>
        </div>

        
    </div>
</main>

    
@endsection