
<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($user)->name) }}" minlength="1" maxlength="191" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="191" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="password" id="password" value="" minlength="1" maxlength="191" required="true" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('role_id') ? 'has-error' : '' }}">
    <label for="account_id" class="col-md-2 col-form-label text-md-right">Role</label>
    <div class="col-md-6">
        <select class="form-control" id="role_id" name="role_id">
            {{--<option value="" style="display: none;" disabled selected>Enter account here...</option>--}}
            <option value="" style="display: none;" {{ old('role_id' ?: '') == '' ? 'selected' : '' }} disabled selected>Select Role...</option>
            @foreach ($roles as $key => $role)
                <option value="{{ $key }}" {{ old('role_id') == $key ? 'selected' : '' }}>
                    {{ $role }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="col-md-2 col-form-label text-md-right">Status</label>
    <div class="col-md-6">
        <div class="checkbox">
            <label for="is_active_1">
                <input id="is_active_1" class="" name="status" type="checkbox" value="1" {{ old('status', optional($user)->status) == '1' ? 'checked' : '' }}>
                Active
            </label>
        </div>

        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>


