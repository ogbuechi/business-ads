<div class="row">
    <div class="col-md-6">
        <div class="p-20">
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

<div class="form-group m-b-20 {{ $errors->has('brand_name') ? 'has-error' : '' }}">
    <label for="brand_name" class="">Brand Name</label>
    <div class="">
        <input class="form-control" name="brand_name" type="text" id="brand_name" value="{{ old('brand_name', optional($invest)->brand_name) }}" minlength="1" placeholder="Enter brand name here...">
        {!! $errors->first('brand_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group m-b-20 {{ $errors->has('profile_summary') ? 'has-error' : '' }}">
    <label for="profile_summary" class="">Profile Summary</label>
    <div class="">
        <input class="form-control" name="profile_summary" type="text" id="profile_summary" value="{{ old('profile_summary', optional($invest)->profile_summary) }}" minlength="1" placeholder="Enter profile summary here...">
        {!! $errors->first('profile_summary', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group m-b-20 {{ $errors->has('maximum_capital') ? 'has-error' : '' }}">
    <label for="maximum_capital" class="">Maximum Capital</label>
    <div class="">
        <input class="form-control" name="maximum_capital" type="text" id="maximum_capital" value="{{ old('maximum_capital', optional($invest)->maximum_capital) }}" minlength="1" placeholder="Enter maximum capital here...">
        {!! $errors->first('maximum_capital', '<p class="help-block">:message</p>') !!}
    </div>
</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="p-20">
            <div class="form-group m-b-20 {{ $errors->has('business_type') ? 'has-error' : '' }}">
                <label for="business_type" class="">Business Type</label>
                <div class="">
                    {{--        <div class="checkbox">--}}
                    {{--            <label for="business_type_no">--}}
                    {{--            	<input id="business_type_no" class="required" name="business_type[]" type="checkbox" value="no" {{ in_array('no', old('business_type', optional($invest)->business_type) ?: []) ? 'checked' : '' }}>--}}
                    {{--                no--}}
                    {{--            </label>--}}
                    {{--        </div>--}}
                    {{--        <div class="checkbox">--}}
                    {{--            <label for="business_type_yes">--}}
                    {{--            	<input id="business_type_yes" class="required" name="business_type[]" type="checkbox" value="yes" {{ in_array('yes', old('business_type', optional($invest)->business_type) ?: []) ? 'checked' : '' }}>--}}
                    {{--                yes--}}
                    {{--            </label>--}}
                    {{--        </div>--}}

                    @foreach($categories as $item )

                        {{--            <option value="{{ $item->id }}">{{ $item->name }}</option>--}}
                        <div class="checkbox checkbox-primary">
                            <input value="{{ $item->name }}"  name="business_type[]" id="business_type_{{ $item->id }}" type="checkbox" {{ in_array($item->name, old('business_type', optional($invest)->business_type) ?: []) ? 'checked' : '' }}>
                            <label for="business_type_{{ $item->id }}">
                                {{ $item->name }}
                            </label>
                        </div>

                    @endforeach




                    {!! $errors->first('business_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group m-b-20">
                <label>File Uploads</label>
                <input type="file" class="dropify" data-height="210" />

            </div>
        </div>
        <!-- end class p-20 -->
    </div> <!-- end col -->
</div>



