
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($profile)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($profile)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
    <label for="first_name" class="col-md-2 control-label">First Name</label>
    <div class="col-md-10">
        <input class="form-control" name="first_name" type="text" id="first_name" value="{{ old('first_name', optional($profile)->first_name) }}" minlength="1" placeholder="Enter first name here...">
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
    <label for="last_name" class="col-md-2 control-label">Last Name</label>
    <div class="col-md-10">
        <input class="form-control" name="last_name" type="text" id="last_name" value="{{ old('last_name', optional($profile)->last_name) }}" minlength="1" placeholder="Enter last name here...">
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">Phone</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($profile)->phone) }}" minlength="1" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="number" id="country" value="{{ old('country', optional($profile)->country) }}" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
    <label for="state" class="col-md-2 control-label">State</label>
    <div class="col-md-10">
        <input class="form-control" name="state" type="text" id="state" value="{{ old('state', optional($profile)->state) }}" minlength="1" placeholder="Enter state here...">
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
    <label for="city" class="col-md-2 control-label">City</label>
    <div class="col-md-10">
        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($profile)->city) }}" minlength="1" placeholder="Enter city here...">
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('residential_address') ? 'has-error' : '' }}">
    <label for="residential_address" class="col-md-2 control-label">Residential Address</label>
    <div class="col-md-10">
        <input class="form-control" name="residential_address" type="text" id="residential_address" value="{{ old('residential_address', optional($profile)->residential_address) }}" minlength="1" placeholder="Enter residential address here...">
        {!! $errors->first('residential_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('parmenent_address') ? 'has-error' : '' }}">
    <label for="parmenent_address" class="col-md-2 control-label">Parmenent Address</label>
    <div class="col-md-10">
        <input class="form-control" name="parmenent_address" type="text" id="parmenent_address" value="{{ old('parmenent_address', optional($profile)->parmenent_address) }}" minlength="1" placeholder="Enter parmenent address here...">
        {!! $errors->first('parmenent_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('marital_status') ? 'has-error' : '' }}">
    <label for="marital_status" class="col-md-2 control-label">Marital Status</label>
    <div class="col-md-10">
        <input class="form-control" name="marital_status" type="text" id="marital_status" value="{{ old('marital_status', optional($profile)->marital_status) }}" minlength="1" placeholder="Enter marital status here...">
        {!! $errors->first('marital_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
    <label for="sex" class="col-md-2 control-label">Sex</label>
    <div class="col-md-10">
        <input class="form-control" name="sex" type="text" id="sex" value="{{ old('sex', optional($profile)->sex) }}" minlength="1" placeholder="Enter sex here...">
        {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
    <label for="date_of_birth" class="col-md-2 control-label">Date Of Birth</label>
    <div class="col-md-10">
        <input class="form-control" name="date_of_birth" type="text" id="date_of_birth" value="{{ old('date_of_birth', optional($profile)->date_of_birth) }}" placeholder="Enter date of birth here...">
        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
    </div>
</div>

