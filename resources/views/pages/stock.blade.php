@vite(['resources/js/stock.js'])
@vite(['resources/js/selic.js'])


<x-layout.app>
    <div class="body">
    <div class="stock-hero">
        <div class="stock-hero-text">
            <h1 class="stock-hero-title">Ações</h1>
            <p class="stock-hero-subtitle">Acompanhe o mercado de ações e a taxa SELIC</p>
        </div>
        <div class="stock-hero-below">
            <div class="stock-hero-img"> <img src="assets/stockart.svg" alt="stockhero"></div>
            <div class="stock-hero-content">Essa é a área que você irá ver os diversos gráficos da bolsa de valores, aprendendo seus significados.</div>
        </div>
    </div>
        <div class="stockbox">
            <div id="stockInfo">
                <svg
                    class="svgstair"
                    width="229.74008mm"
                    height="226.87686mm"
                    viewBox="0 0 229.74008 226.87686"
                    version="1.1"
                    id="svg5"
                    sodipodi:docname="mockup.svg"
                    inkscape:export-filename="logowhite.svg"
                    inkscape:export-xdpi="96"
                    inkscape:export-ydpi="96"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:svg="http://www.w3.org/2000/svg">
                    <sodipodi:namedview
                        id="namedview721"
                        pagecolor="#ffffff"
                        bordercolor="#000000"
                        borderopacity="0.25"
                        inkscape:showpageshadow="2"
                        inkscape:pageopacity="0.0"
                        inkscape:pagecheckerboard="0"
                        inkscape:deskcolor="#d1d1d1"
                        inkscape:document-units="mm"
                        showgrid="false"
                        inkscape:lockguides="true" />
                    <defs
                        id="defs2" />
                    <g
                        id="layer1"
                        transform="translate(-520.24433,-339.94151)">
                        <g
                        id="g3390"
                        transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                        <path
                            id="path3454"
                            d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                        </g>
                    </g>
                </svg>
                <div id="selicInfotxt">
                    <h3 id="selicTitle">Taxa SELIC</h3>
                    <p id="selicPrice" class="stockText">
                    </p>
                    <p id="selicDay" class="stockText">Atualizado em: <span id="currentDateTime"></span></p>
                </div>
            </div>
        </div>
        <form id="stockForm" class="form" method="get">
            <h2 class="sTitle">Ações</h2>
            <div id="stockSearch">
                <div class="actions">
                <label class="label" id="stockSearchAc" for="tickers">Pesquise por ações</label>
                    <input type="text" id="tickers" name="tickers" class="input" placeholder="Exemplo: PETR4">
                </div>
                <div class="time">
                <label class="label" for="period">Período</label>
                <select id="period">
                    <option value="3mo">3 meses</option>
                    <option value="6mo">6 meses</option>
                    <option value="1mo">1 mês</option>
                    <option value="1y">1 ano</option>
                </select>
                </div>
                <button type="submit" class="button" disabled><i
                    class="fa-solid fa-arrow-right fa-beat-fade"></i></button>
            </div>
            <label class="label" id="recommendationLabel"></label>
            <br>
            <div class="recommendation-section">
                @foreach ($recommendedInvestments as $investment)
                    </button>
                    <button class="recommendation-card" type="submit" data-ticker="{{ $investment->cod_investment }}">
                        <h4>{{ $investment->name_investment }}</h4>
                    </button>
                @endforeach    
            </div>
        </form>
        <div id="stockDiv">
            <div id="stockInfo">
                <svg id="stockImg" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg"
                    inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <g transform="translate(-520.24433,-339.94151)">
                        <g transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                            <path class="stockPath"
                                d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                        </g>
                    </g>
                </svg>
                <div class="stockInfoPrice">
                    <div id="stockInfotxt">
                        <h3 id="stockTitle"></h3>
                        <p id="stockPriceProfit" class="stockText"></p>
                        <p id="stockDay" class="stockText"></p>
                    </div>
                    <div class="smooth"></div>
                </div>
            </div>
            <canvas id="stockChart" class="chart-canvas"></canvas>
            <a class="stockLearn" href="./education">Aprenda mais sobre o gráfico</a>
            <br>


        </div>
        <svg id="stockLogoSm" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
        </svg>
    </div>

</x-layout.app>