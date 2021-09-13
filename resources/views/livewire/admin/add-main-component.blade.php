<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.main') }}" class="text-success">Main</a></li>
                    {{--  <a href="{{ route('admin.main') }}" class="ps-3">
                        <i class="fas fa-undo-alt"></i>
                    </a>  --}}
                </ol>
            </div>
        </div>

        <hr class="horizontal-line">
        <div class="row">
            <div class="col-md-7 mx-auto">
                @if(Session::has('success'))
                    <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                @endif
                <form action="" wire:submit.prevent="createMain" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="title" class="form-control" wire:model="title">
                                @error('title')
                                  <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="subtitle">Subtitle</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="subtitle" class="form-control"
                                wire:model="subtitle">
                                @error('subtitle')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="intro">Intro</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="intro" class="form-control" wire:model="intro">
                                @error('intro')
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
                                <input type="file" name="image" class="form-control" wire:model="image">
                                @if($image)
                                 <img src="{{ $image->temporaryUrl() }}" width="80px" alt="">
                                @endif
                                @error('image')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="resume">Resume</label>
                            </div>
                            <div class="col-md-7">
                                <input type="file" name="resume" class="form-control" wire:model="resume">
                                @error('resume')
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
