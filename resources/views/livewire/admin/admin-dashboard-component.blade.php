
<main class="dashboard">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addadmindashboard') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>
        <hr class="horizontal-line">

        <div class="row">
            @foreach ($dashboardItems as $dItem)

            <div class="col-md-4 video-item mb-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to watch">
                <div class="card">
                    <a href="{{ $dItem->url }}">
                        <img src="{{ asset('assets/images/dashboard') }}/{{ $dItem->image }}" class="card-img-top"alt="...">
                    </a>
                    <h6 class="video-title">{{ $dItem->title }}</h6>
                </div>
            </div>

            @endforeach

        </div>
         <hr class="horizontal-line">
         @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover mb-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Url</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dashboardItems as $dashItem)
                    <tr>
                        <td>{{ $dashItem->id }}</td>
                        <td>{{ $dashItem->image }}</td>
                        <td>{{ $dashItem->title }}</td>
                        <td>{{ $dashItem->url }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.editadmindashboard',['id'=>$dashItem->id]) }}" class="btn btn-edit editBtn"><i class="fa fa-edit"></i>Edit</a>
                            <a href="#" wire:click.prevent="deleteAdminDashboard({{ $dashItem->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>
