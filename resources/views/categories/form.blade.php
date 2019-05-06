
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="">Name</label>

        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($category)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="">Slug</label>

        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($category)->slug) }}" minlength="1" placeholder="Enter slug here...">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}

</div>

