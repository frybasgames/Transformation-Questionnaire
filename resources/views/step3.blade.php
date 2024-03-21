@extends("layouts.index")
@section("content")

    <div>
        <!--! Vraag start -->
        <div class="vraagParent">
            <p>Vraag 2/3</p>
            <div class="vraagCoff">
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                </div>
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                </div>
                <div class="vraagImg">
                    <img src="{{asset("img/coffee-bean-white.svg")}}" alt="coffee bean" loading="lazy">
                </div>
            </div>
        </div>
        <!--! Vraag end -->
        <!--! multi coff cards start-->
        <div class="multiCardsParent">
            <h2 style="margin-bottom: 10px;">Welke smaken vind jij lekker?</h2>
            <h4>Kies de kaart die bij je past</h4>
            <div class="multiCards">

                <a onclick="submitLike('Ik hou van sterk en donker', '3')"
                   style="text-decoration: none">
                    <div class="coffCard">
                        <div class="coffCardImgParent">
                            <img class="coffImg" src="{{asset("img/Vraag 2-3/sol.jpg")}}" alt="vragg" loading="lazy">
                        </div>
                        <p class="coffCardInfo">Ik hou van sterk en donker</p>
                        <div class="coffHeart firstLike">
                            <img style="width: 100%;padding: 10px;" src="{{asset("img/like.svg")}}" alt="vragg"
                                 loading="lazy">
                        </div>
                    </div>
                </a>
                <a onclick="submitLike('Ik hou van licht en zoet', '3')"
                   style="text-decoration: none">
                    <div class="coffCard">
                        <div class="coffCardImgParent">
                            <img class="coffImg" src="{{asset("img/Vraag 2-3/sag.jpg")}}" alt="vragg" loading="lazy">
                        </div>
                        <p class="coffCardInfo">Ik hou van licht en zoet</p>
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
