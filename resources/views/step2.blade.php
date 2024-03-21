@extends("layouts.index")
@section("content")
        <div >
            <!--! Vraag start -->
            <div class="vraagParent">
                <p>Vraag 1/3</p>
                <div class="vraagCoff">
                    <div class="vraagImg">
                        <img src="{{asset("img/coffee-bean.svg")}}" alt="coffee bean" loading="lazy">
                    </div>
                    <div class="vraagImg">
                        <img src="{{asset("img/coffee-bean-white.svg")}}" alt="coffee bean" loading="lazy">
                    </div>
                    <div class="vraagImg">
                        <img src="{{asset("img/coffee-bean-white.svg")}}" alt="coffee bean" loading="lazy">
                    </div>
                </div>
            </div>
            <!--! Vraag end -->
            <!--! multi coff cards start-->
            <div class="multiCardsParent">
                <h2 style="margin-bottom: 10px;">Welke omschrijving past bij jou?</h2>
                <h4>Kies de kaart die bij je past</h4>
                <div class="multiCards">

                    <a onclick="submitLike('Ik ga vaak op zoek naar unieke en exclusieve smaken', '2')" style="text-decoration: none">
                        <div class="coffCard">
                            <div class="coffCardImgParent" >
                                <img class="coffImg" src="{{asset("img/Vraag 1-3/Sol.jpg")}}" loading="lazy" alt="Vraag Sol">
                            </div>
                            <p class="coffCardInfo">Ik ga vaak op zoek naar unieke en exclusieve smaken</p>
                            <div class="coffHeart firstLike">
                                <img style="width: 100%;padding: 10px;" src="{{asset("img/like.svg")}}" alt="like" loading="lazy">
                            </div>
                        </div>
                    </a>

                    <a onclick="submitLike('Ik ben een fijnproever en drink mijn koffie bijna altijd op dezelfde manier', '2')" style="text-decoration: none">
                        <div class="coffCard">
                            <div class="coffCardImgParent">
                                <img class="coffImg" src="{{asset("img/Vraag 1-3/sag.jpg")}}" alt="Vraag sag" loading="lazy">
                            </div>
                            <p class="coffCardInfo">Ik ben een fijnproever en drink mijn koffie bijna altijd op dezelfde manier</p>
                            <div class="coffHeart secLike">
                                <img style="width: 100%;padding: 10px;" src="{{asset("img/like.svg")}}" alt="like" loading="lazy">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--! multi coff cards end-->

            <!--! absolutes start-->
            <img class="coffTwoBean" src="{{asset("img/coffTwoBean.png")}}" alt="coffee Two Bean" loading="lazy">
            <img class="cupOfCoff" src="{{asset("img/cupOfCoff.png")}}" alt="cup Of Coffee" loading="lazy">
            <!--! absolutes end-->
        </div>


@endsection
