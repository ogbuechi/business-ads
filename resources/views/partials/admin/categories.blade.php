<div class="panel-group">
@foreach($categories as $category)

        <div class="panel panel-default">
            <a class="list-group-item" data-toggle="collapse" href="#{{ $category->slug }}">
                {{ $category->name }}
            </a>
            <div class="panel-collapse collapse" id="{{ $category->slug }}">
                <div class="panel-body" style="    border: 1px solid rgba(0,0,0,.125);">
                    @foreach($sub_categories as $cat)

                        @if($cat->category_id == $category->id)
                            <div class="checkbox checkbox-primary">
                                <div class="col-md-12">
                                    <input value="{{ $cat->name }}"  name="business_type[]" id="business_type_{{ $cat->id }}" type="checkbox" {{ in_array($cat->name, old('business_type', optional($data)->business_type) ?: []) ? 'checked' : '' }}>

                                    <label for="business_type_{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </label>
                                </div>
                            </div>

                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    @endforeach
</div>