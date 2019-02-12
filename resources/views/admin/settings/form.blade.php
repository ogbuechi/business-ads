
<div class="form-group {{ $errors->has('key') ? 'has-error' : '' }}">
    <label for="key" class="col-md-2 control-label">Key</label>
    <div class="col-md-10">
        <input class="form-control" @if($setting) disabled="" name="" @else name="key" @endif type="text" id="key" value="{{ old('key', optional($setting)->key) }}" minlength="1" maxlength="191" required="true" placeholder="Enter key here...">
        {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
    <label for="value" class="col-md-2 control-label">Value</label>
    <div class="col-md-10">
        <input class="form-control" name="value" type="text" id="value" value="{{ old('value', optional($setting)->value) }}" maxlength="191" placeholder="Enter value here...">
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('locale') ? 'has-error' : '' }}">
    <label for="locale" class="col-md-2 control-label">Locale (If Applicable)</label>
    <div class="col-md-10">
        <input class="form-control" name="locale" type="text" id="locale" value="{{ old('locale', optional($setting)->locale) }}" maxlength="191" placeholder="Enter locale here...">
        {!! $errors->first('locale', '<p class="help-block">:message</p>') !!}
    </div>
</div>

