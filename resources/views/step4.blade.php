@extends("layouts.index")
@section("content")

    <div>
        <!--! Vraag start -->
        <div class="vraagParent">
            <p>Vraag 3/3</p>
            <div class="vraagCoff">
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                </div>
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                </div>
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                </div>
            </div>
        </div>
        <!--! Vraag end -->
        <!--! multi coff cards start-->
        <div class="multiCardsParent">
            <h2 style="margin-bottom: 10px;">Welke smaken vind jij lekker?</h2>
            <h4>Kies de kaart die bij je past</h4>
            <div class="multiCards">

                <a onclick="submitLike('Espresso / cappucino', '4')"
                   style="text-decoration: none">
                    <div class="coffCard">
                        <div class="coffCardImgParent">
                            <img class="coffImg" src="{{asset("img/Vraag 3-3/sol.jpg")}}" alt="vragg" loading="lazy">
                        </div>
                        <p class="coffCardInfo">Espresso / cappucino</p>
                        <div class="coffHeart firstLike">
                            <img style="width: 100%;padding: 10px;" src="{{asset("img/like.svg")}}" alt="vragg"
                                 loading="lazy">
                        </div>
                    </div>
                </a>
                <a onclick="submitLike('Lungo / normaal', '4')"
                   style="text-decoration: none">
                    <div class="coffCard">
                        <div class="coffCardImgParent">
                            <img class="coffImg" src="{{asset("img/Vraag 3-3/sag.jpg")}}" alt="vragg" loading="lazy">
                        </div>
                        <p class="coffCardInfo">Lungo / normaal</p>
                        <div class="coffHeart secLike">
                            <img style="width: 100%;padding: 10px;" src="{{asset("img/like.svg")}}" alt="vragg"
                                 loading="lazy">
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <!--! multi coff cards end-->

        <!--! absolutes start-->
        <img class="coffTwoBean" src="{{asset("img/coffTwoBean.png")}}" alt="" loading="lazy">
        <img class="cupOfCoff" src="{{asset("img/cupOfCoff.png")}}" alt="" loading="lazy">
        <!--! absolutes end-->
    </div>
@endsection
