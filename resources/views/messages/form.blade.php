
<div class="form-group {{ $errors->has('sender_id') ? 'has-error' : '' }}">
    <label for="sender_id" class="">Sender</label>

        <select class="form-control" id="sender_id" name="sender_id">
        	    <option value="" style="display: none;" {{ old('sender_id', optional($message)->sender_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select sender</option>
        	@foreach ($senders as $key => $sender)
			    <option value="{{ $key }}" {{ old('sender_id', optional($message)->sender_id) == $key ? 'selected' : '' }}>
			    	{{ $sender }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sender_id', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('receiver_id') ? 'has-error' : '' }}">
    <label for="receiver_id" class="">Receiver</label>

        <select class="form-control" id="receiver_id" name="receiver_id" required="true">
        	    <option value="" style="display: none;" {{ old('receiver_id', optional($message)->receiver_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select receiver</option>
        	@foreach ($receivers as $key => $receiver)
			    <option value="{{ $key }}" {{ old('receiver_id', optional($message)->receiver_id) == $key ? 'selected' : '' }}>
			    	{{ $receiver }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('receiver_id', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
    <label for="text" class="">Text</label>

        <input class="form-control" name="text" type="text" id="text" value="{{ old('text', optional($message)->text) }}" minlength="1" placeholder="Enter text here...">
        {!! $errors->first('text', '<p class="help-block">:message</p>') !!}

</div>

