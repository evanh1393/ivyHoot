<div>
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
            class="alert alert-{{ session('alertColor') }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href='/contacts' class="btn btn-secondary btn-sm float-end">
        Back To Contact List
    </a>

    <h1 class="dark-green-text mb-5">Contact Form</h1>

    <form wire:submit="save">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full name</label>
            <input type="text" class="form-control @error('form.fullName') is-invalid @enderror" id="fullName"
                wire:model.live="form.fullName">
            @error('form.fullName')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control @error('form.mobile') is-invalid @enderror" id="mobile"
                wire:model.live="form.mobile">
            @error('form.mobile')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('form.email') is-invalid @enderror" id="email"
                wire:model.live="form.email">
            @error('form.email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
