<main class="admin-contact">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.viewcontact') }}"></a> View Contact</li>
                </ol>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover admin-contact-table">
            <thead>
                <tr class="row">
                    <th class="col-md-1">No</th>
                    <th class="col-md-1">Name</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Discussion Title</th>
                    <th class="col-md-1">Message</th>
                    <th class="col-md-2">Sending Date</th>
                    <th class="col-md-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($contacts as $contact)
                    <tr class="row">
                        <td class="col-md-1">{{ $i++ }}</td>
                        <td class="col-md-1">{{ $contact->name }}</td>
                        <td class="col-md-2">{{ $contact->email }}</td>
                        <td class="col-md-2">{{ $contact->discussion_title }}</td>
                        <td class="col-md-1">{{ Str::limit($contact->message, 15) }}</td>
                        <td class="col-md-2">{{ $contact->created_at }}</td>
                        <td class="col-md-3" class="text-center">
                            <a href="#" class="btn btn-edit editBtn">
                                <i class="fa fa-eye"></i> Show</a>
                                <a href="#" class="btn btn-sm hideBtn">
                                    <i class="fa fa-eye-slash"></i>Hide
                                </a>
                            <a href="#" wire:click.prevent="deleteMessage({{ $contact->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                     </tr>
                 @endforeach
            </tbody>
        </table>

    </div>
</main>
