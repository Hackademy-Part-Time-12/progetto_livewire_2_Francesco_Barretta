<form class="p-5 shadow bg-white rounded" wire:submit.prevent="update">
    @csrf
    @if (session('articleUpdated'))
    <div class="alert alert-success">
        {{session('articleUpdated')}}
    </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" wire:model.blur="title">
    </div>
    @error('title')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo</label>
        <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
    </div>
    @error('subtitle')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="mb-3">
        <label for="body" class="form-label">Corpo</label>
        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="5"></textarea>
    </div>
    @error('body')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Modifica articolo</button>
    </div>
</form>