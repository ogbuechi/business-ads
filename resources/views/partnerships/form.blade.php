
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="">Name of project</label>

        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($partnership)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('summary') ? 'has-error' : '' }}">
    <label for="summary" class="">Summary</label>

        <textarea class="form-contro" name="summary" cols="50" rows="10" id="summary" minlength="1" required="true" placeholder="Please include contents below:
- Business Segment/Trade Volume
- Company History (Year of Establishment)
- Target Market
- Unique Characteristic/Strength
- Financial Outlook (Revenue etc.)">{{ old('summary', optional($partnership)->summary) }}</textarea>
        {!! $errors->first('summary', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('partnership') ? 'has-error' : '' }}">
    <label for="partnership" class="">Type of Partnership Expected</label>

        <textarea class="form-control" name="partnership" cols="50" rows="10" id="partnership" minlength="1" required="true" placeholder="Enter partnership here...">{{ old('partnership', optional($partnership)->partnership) }}</textarea>
        {!! $errors->first('partnership', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('expected_profit') ? 'has-error' : '' }}">
    <label for="expected_profit" class="">Minimum expected monthly profit</label>

        <input class="form-control" name="expected_profit" type="number" id="expected_profit" value="{{ old('expected_profit', optional($partnership)->expected_profit) }}" min="1" max="2147483647" required="true" placeholder="Enter expected profit here...">
        {!! $errors->first('expected_profit', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('project_stage') ? 'has-error' : '' }}">
    <label for="project_stage" class="">Project Stage</label>

        <div >
            <label for="project_stage_start">
            	<input id="project_stage_start" class="" name="project_stage" type="radio" value="start" required="true" {{ old('project_stage', optional($partnership)->project_stage) == 'start' ? 'checked' : '' }}>
                Start
            </label>
        </div>
        <div >
            <label for="project_stage_mid">
            	<input id="project_stage_mid" class="" name="project_stage" type="radio" value="mid" required="true" {{ old('project_stage', optional($partnership)->project_stage) == 'mid' ? 'checked' : '' }}>
                Mid
            </label>
        </div>
        <div >
            <label for="project_stage_end_of_prototype">
            	<input id="project_stage_end_of_prototype" class="" name="project_stage" type="radio" value="end_of_prototype" required="true" {{ old('project_stage', optional($partnership)->project_stage) == 'end_of_prototype' ? 'checked' : '' }}>
                End of prototype
            </label>
        </div>

        {!! $errors->first('project_stage', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('company_type') ? 'has-error' : '' }}">
    <label for="company_type" class="">Company Type</label>

        <div >
            <label for="company_type_registered_company">
            	<input id="company_type_registered_company" class="" name="company_type" type="radio" value="registered company" required="true" {{ old('company_type', optional($partnership)->company_type) == 'registered company' ? 'checked' : '' }}>
                Registered Company
            </label>
        </div>
        <div >
            <label for="company_type_individual_company">
            	<input id="company_type_individual_company" class="" name="company_type" type="radio" value="individual company" required="true" {{ old('company_type', optional($partnership)->company_type) == 'individual company' ? 'checked' : '' }}>
                Individual
            </label>
        </div>

        {!! $errors->first('company_type', '<p class="help-block">:message</p>') !!}

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

<input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
