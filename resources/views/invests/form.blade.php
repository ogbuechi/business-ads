<input type="hidden" value="{{ Auth::id() }}" name="user_id">

<div class="form-group {{ $errors->has('brand_name') ? 'has-error' : '' }}">
    <label for="brand_name" class="col-md-2 control-label">Brand Name</label>
    <div class="col-md-10">
        <input class="form-control" name="brand_name" type="text" id="brand_name" value="{{ old('brand_name', optional($invest)->brand_name) }}" minlength="1" placeholder="Enter brand name here...">
        {!! $errors->first('brand_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--<div class="form-group {{ $errors->has('business_type') ? 'has-error' : '' }}">--}}
    {{--<div class="col-md-10">--}}
        {{--<input class="form-control" name="business_type" type="text" id="business_type" value="{{ old('business_type', optional($invest)->business_type) }}" minlength="1" placeholder="Enter business type here...">--}}
        {{--{!! $errors->first('business_type', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group">
    <label for="business_type" class="col-md-2 control-label">Business Type</label>

    <select multiple="multiple" name="business_type[]" id="business_type" class="select form-control">

        {{--<option value="all">All</option>--}}
        @foreach($categories as $item )

            <option value="{{ $item->id }}">{{ $item->name }}</option>

        @endforeach
    </select>

</div>

<div class="form-group {{ $errors->has('profile_summary') ? 'has-error' : '' }}">
    <label for="profile_summary" class="col-md-2 control-label">Profile Summary</label>
    <div class="col-md-10">
        <input class="form-control" name="profile_summary" type="text" id="profile_summary" value="{{ old('profile_summary', optional($invest)->profile_summary) }}" minlength="1" placeholder="Enter profile summary here...">
        {!! $errors->first('profile_summary', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('maximum_capital') ? 'has-error' : '' }}">
    <label for="maximum_capital" class="col-md-2 control-label">Maximum Capital</label>
    <div class="col-md-10">
        <input class="form-control" name="maximum_capital" type="text" id="maximum_capital" value="{{ old('maximum_capital', optional($invest)->maximum_capital) }}" minlength="1" placeholder="Enter maximum capital here...">
        {!! $errors->first('maximum_capital', '<p class="help-block">:message</p>') !!}
    </div>
</div>

