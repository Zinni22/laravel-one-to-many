@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  <h1>Modifica Progetto</h1>
                  <a href="{{ route('admin.project.index') }}" class="btn btn-primary">
                        Torna indietro
                  </a>
            </div>
      </div>

      {{-- Messaggio di errore --}}
      @include('partials.error')

      <div class="row mb-4">
            <div class="col">
                  <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <div class="mb-3">
                              <label for="title" class="form-label">Titolo *</label>
                              <input 
                              type="text" 
                              class="form-control" 
                              id="title" 
                              name="title" 
                              value="{{ old('title', $project->title) }}"
                              required 
                              maxlength="100">
                        </div>
                        
                        <div class="mb-3">
                              <label for="description" class="form-label">Descrizione *</label>
                              <textarea 
                              class="form-control" 
                              id="description" 
                              name="description"
                              rows="10" 
                              required 
                              maxlength="500">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="link" 
                            name="link" 
                            value="{{ old('link', $project->link) }}">
                        </div>

                        <p>I campi contrassegnati con * sono obbligatori</p>

                        <div>
                              <button type="submit" class="btn btn-warning">
                                    Modifica
                              </button>
                        </div>
                  </form>
            </div>
      </div>
</div>
@endsection