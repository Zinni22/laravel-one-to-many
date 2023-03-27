@extends('layouts.admin')

@section('content')

<div class="container">

  @include('partials.success')

    <div class="row">
        <div class="col">
            <h1>Tutti i progetti</h1>
        </div>
    </div>

    <a href="{{ route('admin.project.create') }}" class="btn btn-success">
      Inserisci un nuovo progetto
    </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->title }}</th>
                <td>{{ $project->slug }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->link }}</td>

                <td>
                  <div>

                    <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-primary">
                      Visualizza
                    </a>

                    <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning my-1">
                      Aggiorna
                    </a>

                    <form
                    action="{{ route('admin.project.destroy', $project->id) }}" 
                    method="POST"
                    onsubmit="return confirm('Sei sicuro di voler eliminare?');"
                    >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"> 
                        Elimina
                      </button>
                    </form>

                  </div>
                </td>
            </tr>
            @endforeach

            
          
        </tbody>
      </table>
</div>
    
@endsection