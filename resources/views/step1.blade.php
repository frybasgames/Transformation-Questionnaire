@extends("layouts.index")
@section("content")
    @if(isset($data))
        @if(count($data) >7)
            <div class="img-hi-parent">
                <div class="img-hi-inner">
                    <div class="img-hi">
                        <div class="img-parent">
                            <img src="{{asset("img/coffies.png")}}" alt="coffies" loading="lazy"/>
                        </div>
                    </div>
                </div>
                <div class="big-info">
                    <p>
                        <strong>
                            Wij danken u.
                        </strong>
                    </p>
                </div>
            </div>
            <div class="non-animated-btn-div">
                <div class="non-animated-btn-ara-div">
                    <button class="non-animated-btn-btn" onclick="visitWebsite()">
                        <h4><strong>Visit our website 👉</strong></h4>
                    </button>
                </div>
            </div>
        @endif
    @else <!--! img and info div start -->
    <div class="img-hi-parent">
        <div class="img-hi-inner">
            <div class="img-hi">
                <div class="img-parent">
                    <img src="{{asset("img/coffies.png")}}" alt="coffies" loading="lazy"/>
                </div>
            </div>
        </div>
        <div class="big-info">
            <p>
                <strong>
                    De Koffiegurator: ontdek welke koffie bij jou past.
                </strong>
            </p>
        </div>
    </div>
    <!--! img and info div end -->
    <!--! NON animated button div start -->
    <div class="non-animated-btn-div">
        <div class="non-animated-btn-ara-div">
            <button class="non-animated-btn-btn" onclick="submitLike('Start the test', '1')">
                <h4><strong>Start the test 👉</strong></h4>
            </button>
        </div>
    </div>
    <!--! NON animated button div end -->

    <!--! countries start -->
    <h2 class="onzeH2">
        <span>//</span>
        <span style="text-transform: uppercase">onze herkomstgebieden</span>
    </h2>
    <div class="countries">
        <div class="eachCountry">
            <div class="countryimgParent">
                <img src="{{asset("img/country-brazilie.jpg")}}" alt="brazilie" loading="lazy">
            </div>
            <h3><span>BR</span> <span>Brazilië</span></h3>
        </div>
        <div class="eachCountry">
            <div class="countryimgParent">
                <img src="{{asset("img/Oost-timor.JPG")}}" alt="oost timor" loading="lazy">
            </div>
            <h3><span>TL</span> <span>Oost-Timor</span></h3>
        </div>
        <div class="eachCountry">
            <div class="countryimgParent">
                <img src="{{asset("img/Colombia.JPG")}}" alt="colombia" loading="lazy">
            </div>
            <h3><span>CL</span> <span>Colombia</span></h3>
        </div>
    </div>
    <!--! countries end -->
    <!--! NON animated button div start -->
    <div class="non-animated-btn-div">
        <div class="non-animated-btn-ara-div">
            <input type="hidden" name="step" value="1">
            <button class="non-animated-btn-btn" type="button" onclick="submitLike('Start de Koffigurator', '1')">
                <h4><strong>Start de Koffigurator 👉</strong></h4>
            </button>
        </div>
    </div>
    <!--! NON animated button div end -->
    <!--! button below info start -->
    <div class="button-below" style="padding-bottom: 20px;">
        <span class="stopwatch">
          <img src="{{asset("img/clock.svg")}}" alt="profmania" loading="lazy"/>
        </span>
        <span class="stopwatchText"> Het kost je maar 2 minuten </span>
    </div>

    @endif

    <script>
        function visitWebsite() {
            window.location.href = "https://conversiebot.nl/";
        }
    </script>
@endsection

