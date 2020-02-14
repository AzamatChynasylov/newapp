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
    <input type="text" name="answers[][answer]" class="form-control" id="answer" aria-describedby="answerHelp" placeholder="Enter answer here" value="{{old('answers.0.answer')}}">
    <small id="answerHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answers.0.answer')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer2">Answer 2</label>
    <input type="text" name="answers[][answer]" class="form-control" id="answer2" aria-describedby="answer2Help" placeholder="Enter answer2 here" value="{{old('answers.1.answer')}}">
    <small id="answer2Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answers.1.answer')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer3">Answer 3</label>
    <input type="text" name="answers[][answer]" class="form-control" id="answer3" aria-describedby="answer3Help" placeholder="Enter answer3 here" value="{{old('answers.2.answer')}}">
    <small id="answer3Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answers.2.answer')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="answer4">Answer 4</label>
    <input type="text" name="answers[][answer]" class="form-control" id="answer4" aria-describedby="answer4Help" placeholder="Enter answer4 here" value="{{old('answers.3.answer')}}">
    <small id="answer4Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @error('answers.3.answer')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
