<form class="w-50 m-auto mt-5" wire:submit="submit">
    <div class="mb-3">
      <label for="fileUpload" class="form-label">Email address</label>
      <input type="file" class="form-control" id="fileUpload" aria-describedby="fileUpload" wire:model.live="photo">
    </div>
    <div class="mb-3">
        @if ($photo) 
        <img src="{{ $photo->temporaryUrl() }}">
    @endif
    <small class="text-primary" wire:loading wire:target="photo">Loading....</small>
    </div>
    <div class="mb-3">
        @error('photo') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>
    <button type="button" wire:click="download">Download</button> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
