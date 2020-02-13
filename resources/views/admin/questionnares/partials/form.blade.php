<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" value="{{old('title')}}" placeholder="Enter Title here">
    <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
    <div class="valid-feedback">
        Looks good!
    </div>
</div>

<div class="form-group">
    <label for="purpose">Purpose</label>
    <input type="text" name="purpose" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose here">
    <small id="purposeHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('purpose')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
