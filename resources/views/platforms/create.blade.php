<x-app-layout>
    
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12 margin-tb d-flex justify-content-between">
                    <h2>Create New Platform</h2>
                    <a class="btn btn-primary" href="{{ route('platforms.index') }}"> Back</a>          
                </div>
            </div>
        </div>
        <div class="card-body">
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('platforms.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            
                            <input type="text" name="title" class="form-control" placeholder="Title">
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