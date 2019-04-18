
<div class="form-group {{ $errors->has('company_cat_id') ? 'has-error' : '' }}">
    <label for="company_cat_id" class="col-md-2 control-label">Company Category</label>
    <div class="col-md-10">
        <select class="form-control" id="company_cat_id" name="company_cat_id">
        	    <option value="" style="display: none;" {{ old('company_cat_id', optional($companySubCat)->company_cat_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select company category</option>
        	@foreach ($companyCats as $key => $companyCat)
			    <option value="{{ $key }}" {{ old('company_cat_id', optional($companySubCat)->company_cat_id) == $key ? 'selected' : '' }}>
			    	{{ $companyCat }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('company_cat_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($companySubCat)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

