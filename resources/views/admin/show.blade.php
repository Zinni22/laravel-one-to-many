@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">

                @include('partials.success')

                  <h1>{{ $project->title }}</h1>
                  
                  <p><strong>Slug:</strong> 
                        {{ $project->slug }}
                  </p>

                  <p><strong>Descrizione:</strong> 
                        {{ $project->description }}
                  </p>

                  <p><strong>Link:</strong> 
                        {{ $project->link }}
                  </p>

                  <a href="{{ route('admin.project.index') }}" class="btn btn-primary">
                        Torna indietro
                  </a>
            </div>
      </div>
</div>
@endsection