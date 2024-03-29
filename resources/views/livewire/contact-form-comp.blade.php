<div>
    <h1 class="dark-green-text mb-5">Contact Form</h1>


    <form wire:submit="save">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full name</label>
            <input type="text" class="form-control" id="fullName" wire:model.live="form.fullName">
            @error('form.fullName')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" wire:model.live="form.mobile">
            @error('form.mobile')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" wire:model.live="form.email">
            @error('form.email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
