
<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="type" class="col-md-2 control-label">Business Type</label>
    <div class="col-md-10">
        <select class="form-control" id="type" name="type" required>
        	    <option value="" style="display: none;" {{ old('type', optional($category)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Select Business Type...</option>
        	@foreach (['invest' => 'Business to business Invest',
'sales' => 'Business to Business Sales',
'partnership' => 'Business Partnership'] as $key => $text)
			    <option value="{{ $key }}" {{ old('type', optional($category)->type) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" required value="{{ old('name', optional($category)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


