<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.team') }}">Team</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('admin.addteam') }}" class="text-success">Add Member</a></li>
                </ol>
            </div>
        </div>

        <hr class="horizontal-line">
        <div class="row">
            <div class="col-md-7 mx-auto">
                @if(Session::has('success'))
                    <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                @endif
                <form action="" wire:submit.prevent="createMember" enctype="multipart/form-data">
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
                                <label for="member_name">Name</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="member_name" class="form-control" wire:model="member_name">
                                @error('member_name')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="post">Post</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="post" class="form-control" wire:model="post" multiple>
                                @error('post')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="member_obj">Objectives</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="member_obj" class="form-control" wire:model="member_obj" multiple>
                                @error('member_obj')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="author_profile">Profile</label>
                            </div>
                            <div class="col-md-7">
                                <input type="file" name="author_profile" class="form-control" wire:model="author_profile">
                                @if($author_profile)
                                 <img src="{{ $author_profile->temporaryUrl() }}" width="80px" alt="">
                                @endif
                                @error('author_profile')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for=""></label>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-sm add-new">Create</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>

