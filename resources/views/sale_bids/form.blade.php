
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="">User</label>

        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($saleBid)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($saleBid)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('sale_id') ? 'has-error' : '' }}">
    <label for="sale_id" class="">Sale</label>

        <select class="form-control" id="sale_id" name="sale_id">
        	    <option value="" style="display: none;" {{ old('sale_id', optional($saleBid)->sale_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select sale</option>
        	@foreach ($sales as $key => $sale)
			    <option value="{{ $key }}" {{ old('sale_id', optional($saleBid)->sale_id) == $key ? 'selected' : '' }}>
			    	{{ $sale }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sale_id', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('bid') ? 'has-error' : '' }}">
    <label for="bid" class="">Bid</label>

        <input class="form-control" name="bid" type="number" id="bid" value="{{ old('bid', optional($saleBid)->bid) }}" min="1" max="2147483647" placeholder="Enter bid here...">
        {!! $errors->first('bid', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('reason') ? 'has-error' : '' }}">
    <label for="reason" class="">Reason</label>

        <input class="form-control" name="reason" type="text" id="reason" value="{{ old('reason', optional($saleBid)->reason) }}" minlength="1" placeholder="Enter reason here...">
        {!! $errors->first('reason', '<p class="help-block">:message</p>') !!}

</div>

