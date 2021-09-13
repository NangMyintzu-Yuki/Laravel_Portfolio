<main>
    <div class="container-fluid px-4">
        <h1 class="mt-2">Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.admincontact') }}">Admin Contact</a></li>
                    <li class="breadcrumb-item active"><a href="#" class="text-success">Edit Admin Contact</a></li>
                </ol>
            </div>
        </div>

        <hr class="horizontal-line">
        <div class="row">
            <div class="col-md-7 mx-auto">
                @if(Session::has('success'))
                    <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                @endif
                <form action="" wire:submit.prevent="updateAdminContact">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="phone" class="form-control"
                                wire:model="phone">
                                @error('phone')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="email" class="form-control"
                                wire:model="email">
                                @error('email')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="address" class="form-control"
                                wire:model="address">
                                @error('address')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="facebook">Facebook</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="facebook" class="form-control" wire:model="facebook">
                                @error('facebook')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="twitter">Twitter</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="twitter" class="form-control" wire:model="twitter">
                                @error('twitter')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="telegram">telegram</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="telegram" class="form-control" wire:model="telegram">
                                @error('telegram')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-2 float-left">
                                <label for="github">Github</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="github" class="form-control" wire:model="github">
                                @error('github')
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
                                <button class="btn btn-sm add-new" type="submit">Update</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>


