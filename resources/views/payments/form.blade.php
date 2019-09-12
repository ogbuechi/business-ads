
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="">User</label>

        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($payment)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($payment)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('plan_level') ? 'has-error' : '' }}">
    <label for="plan_level" class="">Plan Level</label>

        <input class="form-control" name="plan_level" type="text" id="plan_level" value="{{ old('plan_level', optional($payment)->plan_level) }}" minlength="1" placeholder="Enter plan level here...">
        {!! $errors->first('plan_level', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('valid_till') ? 'has-error' : '' }}">
    <label for="valid_till" class="">Valid Till</label>

        <input class="form-control" name="valid_till" type="text" id="valid_till" value="{{ old('valid_till', optional($payment)->valid_till) }}" minlength="1" placeholder="Enter valid till here...">
        {!! $errors->first('valid_till', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
    <label for="amount" class="">Amount</label>

        <input class="form-control" name="amount" type="text" id="amount" value="{{ old('amount', optional($payment)->amount) }}" minlength="1" placeholder="Enter amount here...">
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('rrr') ? 'has-error' : '' }}">
    <label for="rrr" class="">Rrr</label>

        <input class="form-control" name="rrr" type="text" id="rrr" value="{{ old('rrr', optional($payment)->rrr) }}" minlength="1" placeholder="Enter rrr here...">
        {!! $errors->first('rrr', '<p class="help-block">:message</p>') !!}

</div>

