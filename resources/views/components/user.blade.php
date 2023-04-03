<div class="mb-3">
    <label for="" class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="" aria-describedby="helpId"
        placeholder="{{$placeholder}}" autocomplete="off" value="{{old($name)}}">
        <span class="text-danger">
            @error("$name")
                {{$message}}
            @enderror
        </span>
    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>