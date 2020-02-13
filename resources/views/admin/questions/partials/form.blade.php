<div class="form-group">
    <label for="question">Title</label>
    <input type="text" name="question[question]" class="form-control" id="question" aria-describedby="questionHelp" value="{{old('question.question')}}" placeholder="Enter Question here">
    <small id="questionHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('question.question')
    <small class="text-danger">{{$message}}</small>
    @enderror
    <div class="valid-feedback">
        Looks good!
    </div>
</div>

<h3>Answers</h3>

<div class="form-group">
    <label for="answer">Answer 1</label>
    <input type="text" name="answer[][answer]" class="form-control" id="answer" aria-describedby="answerHelp" placeholder="Enter answer here">
    <small id="answerHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answer[][0]')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer2">Answer 2</label>
    <input type="text" name="answer[][answer]" class="form-control" id="answer2" aria-describedby="answer2Help" placeholder="Enter answer2 here">
    <small id="answer2Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answer[][1]')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer3">Answer 3</label>
    <input type="text" name="answer[][answer]" class="form-control" id="answer3" aria-describedby="answer3Help" placeholder="Enter answer3 here">
    <small id="answer3Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answer[][2]')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer4">Answer 4</label>
    <input type="text" name="answer[][answer]" class="form-control" id="answer4" aria-describedby="answer4Help" placeholder="Enter answer4 here">
    <small id="answer4Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answer[][3]')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
