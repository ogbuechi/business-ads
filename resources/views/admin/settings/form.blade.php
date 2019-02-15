
<div class="form-group {{ $errors->has('key') ? 'has-error' : '' }}">
    <label for="key" class="col-md-2 control-label">Key</label>
    <div class="col-md-10">
        <input class="form-control" @if($setting) disabled="" @endif name="key" type="text" id="key" value="{{ old('key', optional($setting)->key) }}" minlength="1" maxlength="191" required="true" placeholder="Enter key here...">
        {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if($setting)
    @if (in_array($setting->key,['site_logo','admin_logo']))
        <div class="input-group col-md-10">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose Image
     </a>
   </span>

            <input value="{{ old('image', optional($setting)->value) }}" placeholder="Select Image" id="thumbnail" class="form-control" type="text" name="value">
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-12">
            <img id="holder" style="margin-top:0px;max-height:100px;">
        </div>
    @else
        <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
            <label for="value" class="col-md-2 control-label">Value</label>
            <div class="col-md-10">
                <input class="form-control" name="value" type="text" id="value" value="{{ old('value', optional($setting)->value) }}" maxlength="191" placeholder="Enter value here...">
                {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

    @endif

@else


<div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
    <label for="value" class="col-md-2 control-label">Value</label>
    <div class="col-md-10">
        <input class="form-control" name="value" type="text" id="value" value="{{ old('value', optional($setting)->value) }}" maxlength="191" placeholder="Enter value here...">
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@endif

<div class="form-group {{ $errors->has('locale') ? 'has-error' : '' }}">
    <label for="locale" class="col-md-2 control-label">Locale (If Applicable)</label>
    <div class="col-md-10">
        <input class="form-control" name="locale" type="text" id="locale" value="{{ old('locale', optional($setting)->locale) }}" maxlength="191" placeholder="Enter locale here...">
        {!! $errors->first('locale', '<p class="help-block">:message</p>') !!}
    </div>
</div>

