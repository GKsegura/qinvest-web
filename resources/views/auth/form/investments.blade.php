@if (session('success')) <div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="page-investment">

    <div class="section-header-page">
        <h1 class="section-title">Cadastro de Investimentos</h1>
    </div>
    <div class="investment-card">
        <form action="{{ route('investment') }}" method="POST">
            @csrf
            <div class="form-input">
                <div class="field">
                    <label for="email" class="label-form">Código do Investimento</label>
                    <input id="email" class="field-input form-control" type="text" name="cod_investment" required
                        minlength=5 maxlength=5>
                    <div class="invalid-input"> @error('cod_investment'){{$message}}@enderror</div>
                </div>

                <div class="field">
                    <label for="email" class="label-form">Nome do Investimento</label>
                    <input id="email" class="field-input form-control" type="text" name="name_investment" required>
                    <div class="invalid-input"> @error('name_investment'){{$message}}@enderror</div>
                </div>

                <div class="text-start">
                    <input id="newsletter" class="field-input form-check-input" type="checkbox" name="recomended"
                        checked>
                    <label for="newsletter" class="form-check-label"> Recomendada para o atual mês </label>
                </div>
            </div>

            <div class=" form-actions">
                <button type="submit" class="submit-button">Finalizar cadastro</button>
            </div>
        </form>
    </div>

    <svg id="qinvestLogoSmall" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
    </svg>
</div>