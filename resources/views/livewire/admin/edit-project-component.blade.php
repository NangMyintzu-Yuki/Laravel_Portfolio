<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.project') }}">Project</a></li>

                    <li class="breadcrumb-item active"><a href="#" class="text-success">Edit Project</a></li>
                </ol>
            </div>
        </div>

        <hr class="horizontal-line">
        <div class="row">
            <div class="col-md-7 mx-auto">
                @if(Session::has('success'))
                    <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                @endif
                <form action="" wire:submit.prevent="updateProject" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="title" class="form-control"
                                wire:model="title">
                                @error('title')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="bgtitle">Background Title</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="bgtitle" class="form-control"
                                wire:model="bgtitle">
                                @error('bgtitle')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="short_description">Short Description</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="short_description" class="form-control"
                                wire:model="short_description">
                                @error('short_description')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="pj_title">Project Title</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="pj_title" class="form-control" wire:model="pj_title">
                                @error('pj_title')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="language">language</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="language" class="form-control" wire:model="language" multiple>
                                @error('language')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="image">Image</label>
                            </div>
                            <div class="col-md-7">
                            
                                <input type="file" name="image" class="form-control" wire:model="newimage">
                                @if($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="80px" alt="">
                                @else
                                 <img src="{{ asset('assets/images/projects') }}/{{ $image }}" width="80px" alt="">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for=""></label>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-sm add-new">Update</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>

