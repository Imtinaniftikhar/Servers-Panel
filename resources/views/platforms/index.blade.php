<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


   <div class="card">
       <div class="card-header">
        <div class="row ">
            <div class="col-lg-12 d-flex justify-content-between">
               
                    <h2>Check all Platforms</h2>
                
                    <a class="btn btn-success" href="{{ route('platforms.create') }}"> Add Platforms</a>
                </div>
            </div>
        </div>
       
       <div class="card-body">
        
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       
        <table class="table table-bordered table-striped table-hover datatable datatable-User">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th width="250px">Action</th>
            </tr>
            @foreach ($platforms as  $key=> $platform)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $platform->title }}</td>
                
                <td>
                    <form action="{{ route('platforms.destroy',$platform->id) }}" method="POST">
       
                        {{-- <a class="btn btn-info" href="{{ route('platforms.show',$project->id) }}">Show</a> --}}
        
                        <a class="btn btn-primary" href="{{ route('platforms.edit',$platform->id) }}">Edit</a>
       
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