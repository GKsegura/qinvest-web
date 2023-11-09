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
                    <input id="email" class="field-input form-control" type="text" name="cod_investment" required minlength=5 maxlength=5>
                    <div class="invalid-input"> @error('cod_investment'){{$message}}@enderror</div>
                </div>

                <div class="field">
                    <label for="email" class="label-form">Nome do Investimento</label>
                    <input id="email" class="field-input form-control" type="text" name="name_investment" required>
                    <div class="invalid-input"> @error('name_investment'){{$message}}@enderror</div>
                </div>

                <div class="text-start">
                    <input id="newsletter" class="field-input form-check-input" type="checkbox" name="recomended" checked>
                    <label for="newsletter" class="form-check-label"> Recomendada para o atual mês </label>
                </div>
            </div>

            <div class=" form-actions">
                <button type="submit" class="submit-button">Finalizar cadastro</button>
            </div>
        </form>
    </div>

    <div class="icon-stair-mother">
        <svg class="svg-icon-stair" width="229.74008mm" height="226.87686mm" viewBox="0 0 229.74008 226.87686" version="1.1" id="svg5" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
            <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false" inkscape:lockguides="true" />
            <defs id="defs2" />
            <g id="layer1" transform="translate(-520.24433,-339.94151)">
                <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                    <path fill="currentColor" id="path3454" d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                </g>
            </g>
        </svg>
    </div>
</div>