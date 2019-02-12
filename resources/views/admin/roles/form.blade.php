
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($role)->name) }}" minlength="1" maxlength="191" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="col-md-2 control-label">Slug</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($role)->slug) }}" minlength="1" maxlength="191" placeholder="Enter slug here...">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($role)->description) }}" maxlength="191">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
    <label for="level" class="col-md-2 control-label">Level</label>
    <div class="col-md-10">
        <input class="form-control" name="level" type="number" id="level" value="{{ old('level', optional($role)->level) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter level here...">
        {!! $errors->first('level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

