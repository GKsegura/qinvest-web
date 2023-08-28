@vite(['resources/utils/alpine.js'])
<form action="{{ route('test') }}" method="POST">
    @csrf
    
    <fieldset>
        <legend>Perguntas</legend>
        <label>{{ $question1->text_question }}</label><br>
    <br>
    </fieldset>
    <fieldset>
        @foreach($answers->where('question_id', 1) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <label>{{ $question2->text_question }}</label><br>
    <fieldset>
        @foreach($answers->where('question_id', 2) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <label>{{ $question3->text_question }}</label><br>
    <fieldset>
        @foreach($answers->where('question_id', 3) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <label>{{ $question4->text_question }}</label><br>
    <fieldset>
        @foreach($answers->where('question_id', 5) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <label>{{ $question5->text_question }}</label><br>
    <fieldset>
        @foreach($answers->where('question_id', 4) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <label>{{ $question6->text_question }}</label><br>
    <fieldset>
        @foreach($answers->where('question_id', 6) as $answer)
            <div>
                <label>
                    <input type="radio" name="selected_answer" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
        @endforeach
    </fieldset>
    <br>
    <button type="submit" class="submit-button">Enviar</button>
</form>
