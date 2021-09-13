<main class="admin-contact">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.admincontact') }}"></a> Admin Contact</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addadmincontact') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover admin-contact-table">
            <thead>
                <tr class="row">
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Phone</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-1">Address</th>
                    <th class="col-md-1">Facebook</th>
                    <th class="col-md-1">Twitter</th>
                    <th class="col-md-1">Telegram</th>
                    <th class="col-md-2">Github</th>
                    <th class="col-md-2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($admin_contacts as $contact)
                    <tr class="row">
                        <td class="col-md-1">{{ $contact->id }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->phone, 7) }}</td>
                        <td class="col-md-2">{{ Str::limit($contact->email, 15) }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->address, 15) }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->facebook, 10) }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->twitter, 10) }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->telegram, 10) }}</td>
                        <td class="col-md-2">{{ Str::limit($contact->github, 15) }}</td>

                        <td class="col-md-2">
                            <a href="{{ route('admin.editadmincontact',['id'=>$contact->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit"></i> Edit</a>
                            <a href="#" wire:click.prevent="deleteAdminContact({{ $contact->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
