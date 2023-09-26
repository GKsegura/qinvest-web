    @vite(['resources/utils/alpine.js'])

    @if (session('success'))
    <div class="option" class="alert alert-success">
        {{ session('success') }}
    </div class="option">
    @endif

    @if (session('error'))
    <div class="option" class="alert alert-danger">
        {{ session('error') }}
    </div class="option">
    @endif

    <form action="{{ route('formulary') }}" method="POST">
        @csrf
        <label>{{ $question1->text_question }}< /label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 1) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer1" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <label>{{ $question2->text_question }}</label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 2) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer2" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <label>{{ $question3->text_question }}</label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 3) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer3" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <label>{{ $question4->text_question }}</label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 5) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer5" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <label>{{ $question5->text_question }}</label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 4) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer4" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <label>{{ $question6->text_question }}</label><br>
        <div class="fieldgroup">
            @foreach($answers->where('question_id', 6) as $answer)
            <div class="option">
                <label>
                    <input type="radio" name="selected_answer6" value="{{ $answer->id }}">
                    {{ $answer->text_answer }}
                </label><br>
            </div class="option">
            @endforeach
        </div class="fieldgroup">
        <br>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <button type="submit">Enviar</button>
    </form>
