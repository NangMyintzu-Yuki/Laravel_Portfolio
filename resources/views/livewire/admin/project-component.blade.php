
<main class="about">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addproject') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover about-table">
            <thead>
                <tr class="row">
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Title</th>
                    <th class="col-md-1">Background Title</th>
                    <th class="col-md-2">Short Description</th>
                    <th class="col-md-2">Project Title</th>
                    <th class="col-md-2">Language</th>
                    <th class="col-md-1">Image</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($projects as $project)
                    <tr class="row">
                        <td class="col-md-1">{{ $project->id }}</td>
                        <td class="col-md-1">{{ $project->title }}</td>
                        <td class="col-md-1">{{ $project->bgtitle }}</td>
                        <td class="col-md-2">{{ Str::limit($project->short_description, 30) }}</td>
                        <td class="col-md-2">{{ $project->pj_title }}</td>
                        <td class="col-md-2">{{ $project->language }}</td>
                        <td class="col-md-1">
                            <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="{{ $project->image }}" width="50px">

                        </td>
                        <td class="col-md-2">
                            <a href="{{ route('admin.editproject',['id'=>$project->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit edit-btn-icon"></i></a>
                            <a href="#" class="btn btn-delete" wire:click.prevent="deleteProject({{ $project->id }})" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
