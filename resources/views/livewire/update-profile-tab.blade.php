<div class="active tab-pane" id="addUser">
    <form wire:submit.prevent="updateUser" class="form-horizontal">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="inputName" placeholder="Name" name="user"
                    wire:model.defer="name">
                @error('name') <span class="error error__msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control form-control-sm" id="inputEmail" placeholder="Email"
                    name="email" value="{{ Auth::user()->email }}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputPhone" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-md-8">
                <input type="number" class="form-control form-control-sm" id="exampleInputPhone" name="phone">
                @error('phone') <span class="error error__msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-8">
                <select name="gender" class="form-control form-control-sm">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="nonBinary">Non Binary</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="website" class="col-sm-2 col-form-label">Website</label>
            <div class="input-group mb-1 col-md-8">
                <div class="input-group-prepend inputWebsite">
                  <span class="input-group-text">www.</span>
                </div>
                <input type="url" class="form-control form-control-sm" name="website" id="website">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">User type</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="inputUtype" placeholder="User type"
                    name="utype" value="{{ Auth::user()->userType->name }}" disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-from-label">Preview</label>
            @if ($photo)
            <div class="col-sm-8">
                <img src="{{ $photo->temporaryUrl() }}" width="130px" class="rounded-circle">
            </div>
            @else
            <div class="col-sm-8">
                <img src="{{ Auth::user()->profile_url?asset('storage/'.Auth::user()->profile_url.''):generateAvatar(Auth::user()->name) }}"
                    width="70px" class="rounded-circle">
            </div>
            @endif
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-from-label">Profile Pic</label>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" wire:model="photo">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="folrm-group row">
            <div class="offset-sm-2 col-sm-8">
                <button class="btn btn-warning btn-sm float-right"><i class="fas fa-edit mr-1"></i> Update</button>
            </div>
        </div>
    </form>
</div>