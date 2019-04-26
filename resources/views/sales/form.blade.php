<div class="row">
    <div class="col-md-6">
        <div class="p-20">
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="">Name Of Deal</label>

        <input required class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($sale)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('summary') ? 'has-error' : '' }}">
    <label for="summary" class="">Summary Of Deal</label>
        <textarea class="form-contro" name="summary" cols="50" rows="3" id="summary" placeholder="Please include contents below:
- Business Segment/Trade Volume
- Company History (Year of Establishment)
- Target Market
- Unique Characteristic/Strength
- Financial Outlook (Revenue etc.)">{{ old('summary', optional($sale)->summary) }}</textarea>
        {!! $errors->first('summary', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('business_type') ? 'has-error' : '' }}">
    <label for="business_type" class="">Business Categories</label>

    @foreach($categories as $item )

        <div class="checkbox checkbox-primary">
            <input value="{{ $item->name }}"  name="business_type[]" id="business_type_{{ $item->id }}" type="checkbox" {{ in_array($item->name, old('business_type', optional($sale)->business_type) ?: []) ? 'checked' : '' }}>
            <label for="business_type_{{ $item->id }}">
                {{ $item->name }}
            </label>
        </div>

    @endforeach

        {!! $errors->first('business_type', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('shareholders') ? 'has-error' : '' }}">
    <label for="shareholders" class="">Shareholders</label>

        <select required class="form-control" id="shareholders" name="shareholders">
        	    <option value="" style="display: none;" {{ old('shareholders', optional($sale)->shareholders ?: '') == '' ? 'selected' : '' }} disabled selected>Enter shareholders here...</option>
        	@foreach (['1-10' => '1-10',
'11-50' => '11-50',
'51-100' => '51-100',
'Less than 1000' => 'Less Than 1000',
'over 1000' => 'Over 1000'] as $key => $text)
			    <option value="{{ $key }}" {{ old('shareholders', optional($sale)->shareholders) == $key ? 'selected' : '' }}>
			    <option value="{{ $key }}" {{ old('shareholders', optional($sale)->shareholders) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('shareholders', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('employees') ? 'has-error' : '' }}">
    <label for="employees" class="">Employees</label>

        <input required class="form-control" name="employees" type="number" id="employees" value="{{ old('employees', optional($sale)->employees) }}" min="1" max="2147483647" placeholder="Enter employees here...">
        {!! $errors->first('employees', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
    <label for="value" class="">Value</label>

        <input required class="form-control" name="value" type="number" id="value" value="{{ old('value', optional($sale)->value) }}" min="1" max="2147483647" placeholder="Enter value here...">
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}

</div>




<div class="form-group {{ $errors->has('listed') ? 'has-error' : '' }}">
    <label for="listed" class="">Listed on NSE(Nigerian stock exchange)</label>


        <div class="radi">
            <label for="listed_listed">
            	<input id="listed_listed" class="" name="listed" type="radio" value="listed" {{ old('listed', optional($sale)->listed) == 'listed' ? 'checked' : '' }}>
                Listed
            </label>
        </div>
        <div class="radi radio-primary">
            <label for="listed_unlisted">
            	<input id="listed_unlisted" class="" name="listed" type="radio" value="unlisted" {{ old('listed', optional($sale)->listed) == 'unlisted' ? 'checked' : '' }}>
                Unlisted
            </label>
        </div>

        {!! $errors->first('listed', '<p class="help-block">:message</p>') !!}

</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-20">
            <div class="form-group {{ $errors->has('selling_conditions') ? 'has-error' : '' }}">
                <label for="selling_conditions" class="">Selling Conditions</label>

                <textarea class="form-control" name="selling_conditions" cols="50" rows="3" id="selling_conditions" placeholder="Enter selling conditions here...">{{ old('selling_conditions', optional($sale)->selling_conditions) }}</textarea>
                {!! $errors->first('selling_conditions', '<p class="help-block">:message</p>') !!}

            </div>

            <div class="form-group {{ $errors->has('selling_reasons') ? 'has-error' : '' }}">
                <label for="selling_reasons" class="">Selling Reasons</label>

                <textarea class="form-control" name="selling_reasons" cols="50" rows="3" id="selling_reasons" placeholder="Enter selling reasons here...">{{ old('selling_reasons', optional($sale)->selling_reasons) }}</textarea>
                {!! $errors->first('selling_reasons', '<p class="help-block">:message</p>') !!}

            </div>

            <div class="form-group {{ $errors->has('sales_authorization') ? 'has-error' : '' }}">
                <label for="sales_authorization" class="">Sales Authorization</label>

                <select class="form-control" id="sales_authorization" name="sales_authorization">
                    <option value="" style="display: none;" {{ old('sales_authorization', optional($sale)->sales_authorization ?: '') == '' ? 'selected' : '' }} disabled selected>Enter sales authorization here...</option>
                    @foreach (['By business owner' => 'By business owner',
        'By partners or authorized personnel' => 'By partners or authorized personnel'] as $key => $text)
                        <option value="{{ $key }}" {{ old('sales_authorization', optional($sale)->sales_authorization) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>

                {!! $errors->first('sales_authorization', '<p class="help-block">:message</p>') !!}

            </div>

            <div class="form-group m-b-20 {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="">
                    <label for="image" class="">Business Image</label>

                    <input type="file" name="image" class="dropify" data-height="210" />
                </div>


                @if (isset($sale->image) && !empty($sale->image))
                    <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_image" class="custom-delete-file" value="1" {{ old('custom_delete_image', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                        <span class="input-group-addon custom-delete-file-name">
                    {{ $sale->image }}
                </span>
                    </div>
                @endif
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}

            </div>
        </div>
    </div>
</div>


{{--<div id="fileupload" class="dropzone form-group {{ $errors->has('listed') ? 'has-error' : '' }}">--}}
{{--    <label for="listed" class="">Upload Business Images (At least 5)</label>--}}
{{--    <div class="fallback">--}}
{{--        <input name="file" type="files" multiple accept="image/jpeg, image/png, image/jpg" />--}}
{{--    </div>--}}
{{--</div>--}}






<input type="hidden" value="{{ Auth::user()->id }}" name="user_id">


