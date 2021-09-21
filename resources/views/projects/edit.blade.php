<x-app-layout>

    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


   <div class="card">
       <div class="card-headwer">
        <div class="row">
            <div class="col-lg-12 margin-tb d-flex justify-content-between">
               
                    <h2>Edit Project</h2>
               
                
                    <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                
            </div>
        </div>
       </div>
       <div class="card-body">
        
       
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check input field code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
        <form action="{{ route('projects.update',$project->id) }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>IP:</strong>
                        <input type="text" name="ip" value="{{ $project->ip }}" class="form-control" placeholder="IP">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Host Name:</strong>
                        <input type="text" class="form-control"  name="host_name" placeholder="Host Name">{{ $project->host_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Name:</strong>
                        <input type="text" class="form-control"  name="user_name" placeholder="User Name">{{ $project->user_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" class="form-control"  name="password" placeholder="Password">{{ $project->password }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>SSH Code:</strong>
                        <input type="text" class="form-control"  name="ssh_code" placeholder="SSH Code">{{ $project->ssh_code }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bandwidth:</strong>
                        <input type="text" class="form-control"  name="bandwidth" placeholder="Bandwidth">{{ $project->bandwidth }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Duration Cost:</strong>
                        <input type="text" class="form-control"  name="cost" placeholder="Duration Cost">{{ $project->cost }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
       </div>
   </div>


</x-app-layout>