<main class="main">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addmain') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover main-table">
            <thead>
                <tr class="row">
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Image</th>
                    <th class="col-md-2">Resume</th>
                    <th class="col-md-2">Title</th>
                    <th class="col-md-2">Subtitle</th>
                    <th class="col-md-2">Intro</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mains as $main)
                    <tr class="row">
                        <td class="col-md-1">{{ $main->id }}</td>
                        <td class="col-md-1">
                            <img src="{{ asset('assets/images/myimg') }}/{{ $main->image }}" alt="{{ $main->image }}" width="60px">
                        </td>
                        <td class="col-md-2">{{ $main->resume }}</td>
                        <td class="col-md-2">{{ $main->title }}</td>
                        <td class="col-md-2">{{ $main->subtitle }}</td>
                        <td class="col-md-2">{{ $main->intro }}</td>
                        <td class="col-md-2">
                            <a href="{{ route('admin.editmain',['id'=>$main->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit"></i> Edit</a>
                            <a href="#" wire:click.prevent="deleteMain({{ $main->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
