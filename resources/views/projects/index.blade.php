<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    
                    <h2>Check all Projects</h2>             
                    <a class="btn btn-success" href="{{ route('projects.create') }}"> Create new Projects</a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">        
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>IP</th>
                    <th>Host Name</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>SSH Code</th>
                    <th>Bandwidth</th>
                    <th>Duration Cost</th>
                    <th width="250px">Action</th>
                </tr>
                @foreach ($projects as $key => $project)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $project ->ip }}</td>
                    <td>{{ $project ->host_name }}</td>
                    <td>{{ $project ->user_name }}</td>
                    <td>{{ $project ->password}}</td>
                    <td>{{ $project ->ssh_code }}</td>
                    <td>{{ $project ->bandwidth }}</td>
                    <td>{{ $project ->duration_date}}</td>
                    <td>
                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                            
                            {{-- <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">Show</a> --}}
                            
                            <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>
                            
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    
</x-app-layout>