@vite(['resources/utils/alpine.js'])
<form action="{{ route('viewformulary') }}" method="GET">
    @csrf
    
    <fieldset>
        <legend>Perguntas</legend>
        @foreach($questions->where('id', 1) as $question )
            <div>
                <label>{{ $question->text_question }}</label><br>
                {{ $question->observation }}
            </div>
        @endforeach
    </fieldset>
    <br>
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
    <button type="submit" class="submit-button">Enviar</button>
</form>
