    @vite(['resources/utils/alpine.js'])

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('formulary') }}" method="POST">
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
                    <input type="radio" name="selected_answer1" value="{{ $answer->id }}">
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
                    <input type="radio" name="selected_answer2" value="{{ $answer->id }}">
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
                    <input type="radio" name="selected_answer3" value="{{ $answer->id }}">
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
                    <input type="radio" name="selected_answer5" value="{{ $answer->id }}">
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
                    <input type="radio" name="selected_answer4" value="{{ $answer->id }}">
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
                    <input type="radio" name="selected_answer6" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div>
            @endforeach
        </fieldset>
        <br>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <button type="submit">Enviar</button>
    </form>