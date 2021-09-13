<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.about') }}">About</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.addabout') }}" class="text-success">Add About</a></li>
                </ol>
            </div>
        </div>

        <hr class="horizontal-line">
        <div class="row">
            <div class="col-md-7 mx-auto">
                @if(Session::has('success'))
                    <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                @endif
                <form action="" wire:submit.prevent="createAbout" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="date_of_birth">Date of Birth</label>
                            </div>
                            <div class="col-md-7" wire:ignore>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" wire:model="date_of_birth">
                                @error('date_of_birth')
                                  <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
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
                                <label for="nationality">Nationality</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="nationality" class="form-control"
                                wire:model="nationality">
                                @error('nationality')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="religion">religion</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="religion" class="form-control" wire:model="religion">
                                @error('religion')
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
                                <label for="expert_in">Expert In</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="expert_in" class="form-control" wire:model="expert_in">
                                @error('expert_in')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="freelance">Freelance</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="freelance" class="form-control" wire:model="freelance">
                                @error('freelance')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="objective">Objective</label>
                            </div>
                            <div class="col-md-7">
                                <textarea name="objective" rows="3" class="form-control" wire:model="objective"></textarea>
                                @error('objective')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="profile">Profile</label>
                            </div>
                            <div class="col-md-7">
                                <input type="file" name="profile" class="form-control" wire:model="profile">
                                @if($profile)
                                 <img src="{{ $profile->temporaryUrl() }}" width="80px" alt="">
                                @endif
                                @error('profile')
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


