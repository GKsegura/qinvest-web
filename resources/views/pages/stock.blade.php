@vite(['resources/js/stock.js'])
@vite(['resources/js/selic.js'])


<x-layout.app>
    <div class="page-stock">
        <div class="section-header-page">
            <h1 class="section-title">Ações</h1>

            <div class="stock-hero">
                <div class="stock-hero-below">
                    <div class="stock-hero-img"> <img src="assets/stockart.svg" alt="stockhero"></div>
                    <div class="stock-hero-content">
                        <div class="section-subtitle">
                            <p>Essa é a área que você irá ver os diversos gráficos da bolsa de valores,
                                aprendendo seus significados.</p>
                            <p>Acompanhe o mercado de ações e a taxa SELIC.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="body">
            <div class="stockbox">
                <div id="stockInfo">
                    <svg class="svgstair" width="229.74008mm" height="226.87686mm" viewBox="0 0 229.74008 226.87686"
                        version="1.1" id="svg5" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg"
                        inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000"
                            borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0"
                            inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm"
                            showgrid="false" inkscape:lockguides="true" />
                        <defs id="defs2" />
                        <g id="layer1" transform="translate(-520.24433,-339.94151)">
                            <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                                <path id="path3454"
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
                    <div class="field-group">
                        <div class="field">
                            <label class="label" id="stockSearchAc" for="tickers">Pesquise por ações</label>
                            <input type="text" id="tickers" name="tickers" class="input" placeholder="Exemplo: PETR4">
                        </div>
                        <div class="field">
                            <label class="label" for="period">Período</label>
                            <select id="period">
                                <option value="3mo">3 meses</option>
                                <option value="6mo">6 meses</option>
                                <option value="1mo">1 mês</option>
                                <option value="1y">1 ano</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="button" disabled><i
                                class="fa-solid fa-arrow-right fa-beat-fade"></i></button>
                    </div>
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
                    <svg id="stockImg" class="svgstair" width="229.74008mm" height="226.87686mm"
                        viewBox="0 0 229.74008 226.87686" version="1.1" id="svg5" sodipodi:docname="mockup.svg"
                        inkscape:export-filename="logowhite.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000"
                            borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0"
                            inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm"
                            showgrid="false" inkscape:lockguides="true" />
                        <defs id="defs2" />
                        <g id="layer1" transform="translate(-520.24433,-339.94151)">
                            <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                                <path id="path3454"
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
                <a class="stockLearn" href="./variable">Aprenda mais sobre o gráfico</a>
                <br>


            </div>
        </div>
        <div class="icon-stair-mother">
            <svg class="svg-icon-stair" width="229.74008mm" height="226.87686mm" viewBox="0 0 229.74008 226.87686"
                version="1.1" id="svg5" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg"
                inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
                xmlns:svg="http://www.w3.org/2000/svg">
                <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                    inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                    inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false"
                    inkscape:lockguides="true" />
                <defs id="defs2" />
                <g id="layer1" transform="translate(-520.24433,-339.94151)">
                    <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                        <path fill="currentColor" id="path3454"
                            d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>

</x-layout.app>