<div class="{{$viewClass['form-group']}} {!! !$errors->has($label) ?: 'has-error' !!}">
    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        @include('admin::form.error')
        <textarea class="{{$class}}" id="{{$id}}" name="{{$name}}" {!!$attributes!!}>{{old($column, $value)}}</textarea>
    </div>
</div>
