
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">Patient</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($caseNote)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select Patient</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($caseNote)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<input type="hidden" name="nurse_id" value="{{ Auth::id()  }}">

<div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
    <label for="note" class="col-md-2 control-label">Note</label>
    <div class="col-md-10">
        <textarea class="form-control" name="note" cols="50" rows="10" id="textarea" minlength="1" maxlength="1000">{{ old('note', optional($caseNote)->note) }}</textarea>
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div>

