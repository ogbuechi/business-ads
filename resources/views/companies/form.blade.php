<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-12 control-label">Company Name</label>
    <div class="col-md-12">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($company)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-12 control-label">Description</label>
    <div class="col-md-12">
        <textarea class="form-control" name="description" cols="20" rows="10" id="description">{{ old('description', optional($company)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-12 control-label">Country</label>
    <div class="col-md-12">
        <select required class="form-control" id="country" name="country">
            <option value="" style="display: none;" {{ old('country') == '' ? 'selected' : '' }} disabled selected>Select Country</option>
            @foreach ($countries as $key => $country)
                <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>
                    {{ $country }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">--}}
{{--    <label for="state" class="col-md-12 control-label">State</label>--}}
{{--    <div class="col-md-12">--}}
{{--        <select required class="form-control" id="state" name="state">--}}
{{--            <option value="" style="display: none;" {{ old('state') == '' ? 'selected' : '' }} disabled selected>Select State</option>--}}
{{--            @foreach ($states as $key => $state)--}}
{{--                <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>--}}
{{--                    {{ $state }}--}}
{{--                </option>--}}
{{--            @endforeach--}}
{{--        </select>--}}

{{--        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">--}}
{{--    <label for="city" class="col-md-12 control-label">City</label>--}}
{{--    <div class="col-md-12">--}}
{{--        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($company)->city) }}" minlength="1" required="true" placeholder="Enter city here...">--}}
{{--        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}--}}
{{--    </div>--}}
{{--</div>--}}

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    <label for="address" class="col-md-12 control-label">Address</label>
    <div class="col-md-12">
        <input class="form-control" name="address" type="text" id="address" value="{{ old('address', optional($company)->address) }}" minlength="1" required="true" placeholder="Enter address here...">
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('rep_phone') ? 'has-error' : '' }}">
    <label for="rep_phone" class="col-md-12 control-label">Representative Phone Number</label>
    <div class="col-md-12">
        <input class="form-control" name="rep_phone" type="text" id="rep_phone" value="{{ old('rep_phone', optional($company)->rep_phone) }}" placeholder="Enter rep phone here...">
        {!! $errors->first('rep_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('rep_name') ? 'has-error' : '' }}">
    <label for="rep_name" class="col-md-12 control-label">Representative Name</label>
    <div class="col-md-12">
        <input class="form-control" name="rep_name" type="text" id="rep_name" value="{{ old('rep_name', optional($company)->rep_name) }}" minlength="1" required="true" placeholder="Enter rep name here...">
        {!! $errors->first('rep_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
    <label for="website" class="col-md-12 control-label">Website Url</label>
    <div class="col-md-12">
        <input class="form-control" name="website" type="text" id="website" value="{{ old('website', optional($company)->website) }}" placeholder="Enter website here...">
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class=" {{ $errors->has('categories') ? 'has-error' : '' }}">
    <label for="categories" class="row col-md-12 control-label">Category(multiple choice) </label>
        @foreach($categories as $category)
            <div>
                <fieldset>
                    <legend>{{ $category->name }}</legend>
                    @foreach($sub_categories as $cat)
                        @if($cat->company_cat_id == $category->id)
                            <label for="{{ $cat->id }}">{{ $cat->name }}</label>
                            <input type="checkbox" name="categories[]" value="{{ $cat->name }}"   id="{{ $cat->id }}" {{ in_array($cat->name, old('categories', optional($company)->categories) ?: []) ? 'checked' : '' }}>
                        @endif
                    @endforeach
                </fieldset>
            </div>

        @endforeach


</div>


<div class="form-group {{ $errors->has('employees') ? 'has-error' : '' }}">
    <label for="employees" class="col-md-12 control-label">Number of Employees</label>
    <div class="col-md-12">
        <input class="form-control" name="employees" type="number" id="employees" value="{{ old('employees', optional($company)->employees) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter employees here...">
        {!! $errors->first('employees', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('years') ? 'has-error' : '' }}">
    <label for="years" class="col-md-12 control-label">Years of existence</label>
    <div class="col-md-12">
        <input class="form-control" name="years" type="text" id="years" value="{{ old('years', optional($company)->years) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter years here...">
        {!! $errors->first('years', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--<div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">--}}
{{--    <label for="is_active" class="col-md-12 control-label">Is Active</label>--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="checkbox">--}}
{{--            <label for="is_active_1">--}}
{{--            	<input id="is_active_1" class="" name="is_active" type="checkbox" value="1" {{ old('is_active', optional($company)->is_active) == '1' ? 'checked' : '' }}>--}}
{{--                Yes--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}--}}
{{--    </div>--}}
{{--</div>--}}

