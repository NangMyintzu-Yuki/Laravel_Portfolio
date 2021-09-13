
<main class="about">
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.about') }}">About</a></li>
                    <li class="breadcrumb-item active">About Me</li>
                </ol>
            </div>
            <div class="col-md-6">
                 <div class="float-end"><a href="{{ route('admin.addabout') }}" class="btn btn-sm add-new">Add New</a></div>
            </div>
        </div>

        <hr class="horizontal-line">
        @if(Session::has('success'))
            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
        @endif

        <table class="table table-hover about-table">
            <thead>
                <tr  class="row">
                    <th  class="col-md-1">ID</th>
                    <th  class="col-md-1">Profile</th>
                    <th  class="col-md-1">Title</th>
                    <th  class="col-md-1">Background Title</th>
                    <th  class="col-md-1">Date of Birth</th>
                    <th  class="col-md-1">Nationality</th>
                    <th  class="col-md-1">Religion</th>
                    <th  class="col-md-1">Language</th>
                    <th  class="col-md-1">Expert In</th>
                    <th  class="col-md-1">Freelance</th>
                    <th  class="col-md-1">Objectives</th>
                    <th  class="col-md-1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr class="row">
                        <td class="col-md-1">{{ $about->id }}</td>
                        <td class="col-md-1">
                            <img src="{{ asset('assets/images/my_profile') }}/{{ $about->profile }}" alt="{{ $about->profile }}" width="70px">

                        </td>
                        <td class="col-md-1">{{ $about->title }}</td>
                        <td class="col-md-1">{{ $about->bgtitle }}</td>
                        <td class="col-md-1">{{ $about->date_of_birth }}</td>
                        <td class="col-md-1">{{ $about->nationality }}</td>
                        <td class="col-md-1">{{ $about->religion }}</td>
                        <td class="col-md-1">{{ $about->language }}</td>
                        <td class="col-md-1">{{ Str::limit($about->expert_in, 10) }}</td>
                        <td class="col-md-1">{{ $about->freelance }}</td>
                        <td class="col-md-1">
                            {{ Str::limit($about->objective, 20) }}
                        </td>
                        <td class="col-md-1" class="text-center">
                            <a href="{{ route('admin.editabout',['id'=>$about->id]) }}" class="btn btn-edit editBtn">
                                <i class="fa fa-edit edit-btn-icon"></i></a>
                            <a href="#" class="btn btn-delete" wire:click.prevent="deleteAbout({{ $about->id }})" onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
