
    @if (session('success')) <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <form action="{{ route('investment') }}" method="POST">
    @csrf
        <div class="page">
            <div class="user-data">
                <div class="field">
                    <label for="email" class="label-form">Código do Investimento</label>
                    <input id="email" class="field-input form-control" type="text" name="cod_investment" required minlength=4 maxlength=4>
                    <div class="invalid-input"> @error('cod_investment'){{$message}}@enderror</div>
                </div>

                <div class="field">
                    <label for="email" class="label-form">Nome do Investimento</label>
                    <input id="email" class="field-input form-control" type="text" name="name_investment" required>
                    <div class="invalid-input"> @error('name_investment'){{$message}}@enderror</div>
                </div>

                <div class="field">
                    <label for="email" class="label-form">Id do Investidor</label>
                    <input id="email" class="field-input form-control" type="number" name="investor_id" required max=9>
                    <div class="invalid-input"> @error('investor_id'){{$message}}@enderror</div>
                </div>

                <div class=" text-start">
                    <input id="newsletter" class="field-input form-check-input" type="checkbox" name="recomended" checked>
                    <label for="newsletter" class="form-check-label"> Recomendada para o atual mês </label>
                </div>
                
                <div class=" form-actions">
                    <button type="submit" class="submit-button">Finalizar cadastro</button>
                </div>
            </div>
        </div>
    </form>    