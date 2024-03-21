@extends("layouts.index2")
@section("content")
    <header>
        <div class="bgBanner" style="background-image: url(/img/country-brazilie.jpg);">
            <h3 class="bgBanner-first">koffiegurator uitslag</h3>
            <h2 class="bgBanner-second">Jouw ultieme koffie:</h2>
            <h2 class="bgBanner-third">Colombia - Brasil</h2>
            <h4 class="bgBanner-fourth">
                karamel, anijs en donkere chocolade
            </h4>
            <span class="bgBanner-layer"></span>
        </div>
    </header>
    <div class="detailPages">
        <main class="mainOfLagarantaCoff">
            <section class="sectionOfLagarantaCoff">
                <aside>
                    <div class="pageImgParent">
                        <img src="/img/coff-colombia-brasil.png" alt="colombia brasil" loading="lazy"/>
                        <p>sadd</p>
                        <a data-fancybox="gallery" data-src="./img/coff-colombia-brasil" class="resizeImg">
                            <img src="/img/resize-expand.png" alt="lagaranta resize" loading="lazy">
                        </a>
                    </div>
                </aside>
                <aside class="lagarantaCoffContent">
                    <h2>
                        Lagaranta Yellow Bourbon <br />
                        Brasil - koffiebonen 1kg
                    </h2>
                    <h4>Regio Cerrado Mineiro</h4>
                    <h5>± 1000 gram</h5>
                    <p>
                        Heerlijk zacht, smaakvol en uiterst stijlvol. Deze heerlijke
                        single origin laat u intens genieten van de perfecte combinatie
                        van melkchocolade en zoete tomaten, met een subtiel zuurtje voor
                        de beste beleving. Een heerlijk zachte koffie voor ieder moment
                        van de dag.
                    </p>
                    <div>
                        <button onclick="submitLike('Bekijk prijzen', '6')">Bekijk prijzen</button>
                    </div>
                </aside>
            </section>
        </main>
        <main class="mainOfLagarantaBG">
            <section>
                <aside class="mainOfLagarantaBG-aside1">
                    <div class="mainOfLagarantaBG-aside1InnerDiv">
                        <h3>Lorem</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            debitis, beatae smnis magnam.
                        </p>
                    </div>

                    <div class="mainOfLagarantaBG-aside1InnerDiv">
                        <h3>Lorem</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            debitis, beatae sed minus assumenda laboriosam at ducimus natus.
                            Ad perspiciatis minus dolore, totam tempore e uaerat debitis,
                            beatae sed minus assumenda laboriosam at ducimus natus. Ad
                            perspiciatis minus dolore, totam tempore excepturi sunt nobis
                            perferendis omnis magnam.
                        </p>
                        <div>
                            <button onclick="submitLike('Lorem, ipsum dolor.', '6')">Lorem, ipsum dolor.</button>
                        </div>
                    </div>
                </aside>
                <aside class="mainOfLagarantaBG-aside2">
                    <div class="pageImgParent">
                        <img src="/img/coff-colombia-brasil" alt="Coffee colombia" loading="lazy" />
                    </div>
                </aside>
            </section>
        </main>
        <main class="mainOfProducts">
            <h2>Ontdek meer Specialty Coffees</h2>
            <aside>
                <div class="eachProduct">
                    <div class="productImgParent">
                        <img src="/img/coff-colombia-brasil.png" alt="coffee colombia brasil" loading="lazy" />
                    </div>
                    <div class="productInfo">
                        <h3>Yellow Bourbon</h3>
                        <h5>
                            Yellow Bourbon koffie bonen, meerdere jaren op rij winnaar van de Cup of Excellence Brazillië.

                        </h5>
                        <button onclick="submitLike('Ontdek meer', '6')">Ontdek meer</button>
                    </div>
                </div>
                <div class="eachProduct">
                    <div class="productImgParent">
                        <img src="/img/Oost-timor.png" alt="Oost timor" loading="lazy" />
                    </div>
                    <div class="productInfo">
                        <h3>East-Timor Lacau Village</h3>
                        <h5>
                            Een gewone koffie én een espresso, met een heerlijk zachte afdronk
                        </h5>
                        <button onclick="submitLike('Ontdek meer', '6')">Ontdek meer</button>
                    </div>
                </div>
                <div class="eachProduct">
                    <div class="productImgParent">

                        <img src="/img/coff-uganda.png" alt="coffee uganda" loading="lazy" />

                    </div>
                    <div class="productInfo">
                        <h3>Uganda Bugisu</h3>
                        <h5>
                            Uganda Bugisu koffie is aromatisch en zoet, met een accent van frisheid. Kan als gewone koffie en als espresso gedronken worden.
                        </h5>
                        <button onclick="submitLike('Ontdek meer', '6')">Ontdek meer</button>
                    </div>
                </div>
            </aside>
        </main>

    </div>
@endsection
