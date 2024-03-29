<div>

    <h1 class="text-black">Ivyhoot Contacts</h1>
	<p class="fs-5 my-3 text-secondary">Full List of Ivyhoot Contacts</p>

	<div class="d-flex justify-content-between align-items-center">
		<input type="text" id="contactSearch" class="form-control form-control-sm" style="width:350px" placeholder="Search" wire:model.live.debounce.150ms="search">
		<a href="#" class="btn btn-primary btn-sm mb-3">Add Contact</a>
	</div>
	
	
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Active</th>
            </tr>
        </thead>
        <tbody>
			@forelse($contacts as $contact)
				<tr wire:loading.class="opacity-50">
					<th scope="row">{{ $contact->full_name }}</th>
					<td>
						{{ strlen($contact->mobile) == 10 
							? '('.substr($contact->mobile, 0, 3).') '.substr($contact->mobile, 3, 3).'-'.substr($contact->mobile, 6) 
							: $contact->mobile }}
					</td>
					<td>{{ $contact->email }}</td>
					<td>
						@if($contact->active)
							<span class="badge text-bg-success">Active</span>
						@else
							<span class="badge text-bg-danger">Inactive</span>
						@endif
					</td>
				</tr>
			@empty
				<tr>
					<td colspan=4>
						No Results
					</td>
				</tr>
			@endforelse        
        </tbody>
    </table>

	<div class="mt-3">
        {{ $contacts->links('vendor.livewire.bootstrap') }}
    </div>

</div>
