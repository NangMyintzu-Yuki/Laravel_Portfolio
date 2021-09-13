<main class="service">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Service</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addservice') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover service-table">
            <thead>
                <tr class="row">
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Title</th>
                    <th class="col-md-1">Background Title</th>
                    <th class="col-md-2">Short Description</th>
                    <th class="col-md-1">Service Name</th>
                    <th class="col-md-2">Service Icon</th>
                    <th class="col-md-2">Service Description</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="row">
                        <td class="col-md-1">{{ $service->id }}</td>
                        <td class="col-md-1">{{ $service->title }}</td>
                        <td class="col-md-1">{{ $service->bgtitle }}</td>
                        <td class="col-md-2">{{ Str::limit($service->short_description, 20) }}</td>
                        <td class="col-md-1">{{ $service->name }}</td>
                        <td class="col-md-2">{{ $service->icon }}</td>
                        <td class="col-md-2">{{ Str::limit($service->service_description, 20) }}</td>
                        <td class="col-md-2">
                            <a href="{{ route('admin.editservice',['id'=>$service->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit"></i> Edit</a>
                            <a href="#" wire:click.prevent="deleteService({{ $service->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
