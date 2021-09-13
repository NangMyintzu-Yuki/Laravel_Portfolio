<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.about') }}">About</a></li>
                    <li class="breadcrumb-item active">Skill</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addskill') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr class="row">
                    <th class="col-md-3">ID</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-3">Percent</th>
                    <th class="col-md-3" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr class="row">
                        <td class="col-md-3">{{ $skill->id }}</td>
                        <td class="col-md-3">{{ $skill->name }}</td>
                        <td class="col-md-3">{{ $skill->percent }} %</td>
                        <td class="col-md-3" class="text-center">
                            <a href="{{ route('admin.editskill',['id'=>$skill->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit"></i> Edit</a>
                            <a href="#" wire:click.prevent="deleteSkill({{ $skill->id }})" class="btn btn-delete" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
