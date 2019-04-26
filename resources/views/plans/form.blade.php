
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="">Name</label>

        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($plan)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <label for="price" class="">Price</label>

        <input class="form-control" name="price" type="number" id="price" value="{{ old('price', optional($plan)->price) }}" placeholder="Enter price here...">
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
    <label for="level" class="">Level</label>

        <input class="form-control" name="level" type="number" id="level" value="{{ old('level', optional($plan)->level) }}" max="2147483647" placeholder="Enter level here...">
        {!! $errors->first('level', '<p class="help-block">:message</p>') !!}

</div>

