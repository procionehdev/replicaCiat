<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header class="w-full h-[179px] lg:h-[166px] bg-primaryBackground">
    <div class="w-full h-[50px] lg:h-[34px] bg-black flex">
        <div class="grid grid-cols-6 lg:grid-cols-12 grid-rows-1 grid-flow-row lg:mx-11 justify-items-center w-full" >
            <div class="text-white ml-[44px] font-switzer text-xs font-medium self-center text-center col-span-5 grow lg:col-span-11">
                <p>Entra nel mondo Ciat! <a href="#" class="underline font-bold">Registrati</a> per te <b class="font-bold text-sm">-15%</b>  sul tuo primo acquisto</p>
            </div>
            <div class="my-2 shrink justify-items-end lg:my-auto lg:col-start-12 lg:justify-self-end">
                <a href="#"><img src="{{ asset('assets/icons/x-close.svg') }}" alt="Close prompt" class=" w-[17px] h-[17px] lg:w-[20px] lg:h-[20px]"/></a>
            </div>
        </div>
    </div>

    <div class="grid grid-flow-row grid-cols-4 lg:grid-cols-12 lg:gap-x-4 grid-rows-3 h-[129px] mx-4 lg:mx-11">
        <div class="lg:row-start-2 lg:col-start-11 self-center lg:justify-self-end flex lg:block lg:mr-2.5 lg:mt-1.5">
            <a href="#"><img src="{{ asset('assets/icons/Flag_of_Italy.svg') }}" alt="Language Selector" class="w-[14px] h-[14px] mx-1 lg:mx-auto lg:w-[22px] lg:h-[22px]"/></a>
            <p class="text-[10px] text-navText"> ITA / EUR</p>
        </div>
        <div class="hidden lg:block lg:col-span-5 lg:col-start-1 lg:row-start-1 self-center align-self-center text-navText">
            <p class="text-[10px]">SPEDIZIONE GRATUITA PER ORDINI SUPERIORI AI 250€</p>
        </div>
        <div class="col-span-3 lg:col-span-5 lg:col-start-8 justify-self-end self-center flex text-navText">
            <a href="#"><p class="text-[10px] mx-auto pr-1">PROGETTA</p></a>
            <a href="#"><p class="text-[10px] mx-auto px-1">MAGAZINE</p></a>
            <a href="#"><p class="text-[10px] mx-auto pl-1 lg:pr-1">CHI SIAMO</p></a>
            <a href="#"><p class="text-[10px] mx-auto pl-1 hidden lg:block">LAVORA CON NOI</p></a>
        </div>
        <div class="col-span-2 lg:col-start-1 lg:col-span-4 lg:row-start-2 self-center">
            <img src="{{ asset('assets/images/ciatLogo.png') }}" class="w-[84px] h-[40px] lg:hidden">
            <img src="{{ asset('assets/images/ciatLogoFull.png') }}" class="w-[220px] h-[30px] hidden lg:block">
        </div>
        <div class="col-span-2 lg:col-span-2 lg:col-start-11 lg:row-start-2 justify-self-end lg:justify-end self-center grid grid-flow-row grid-cols-3 grid-rows-1 lg:gap-x-2">
                <a href="#"><div class="w-[34px] h-[37px] mr-1 lg:w-auto lg:h-auto">
                    <img src="{{ asset('assets/icons/heart.svg') }}" alt="Favourites" class="mx-auto w-[20px] h-[20px] lg:w-[30px] lg:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Preferiti</p>
                </div></a>
                <a href="#" class="lg:text-center"><div class="w-[34px] h-[37px] mx-1 lg:w-auto lg:h-auto">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="User" class="mx-auto w-[20px] h-[20px] lg:w-[30px] lg:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Accedi</p>
                </div></a>
        <a href="#"><div class="w-[34px] h-[37px] ml-1 lg:w-auto lg:h-auto">
                    <img src="{{ asset('assets/icons/shopping-bag.svg') }}" alt="Shopping Bag" class="mx-auto w-[20px] h-[20px] lg:w-[30px] lg:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Carrello</p>
                </div></a>
        </div>

        <div class="lg:row-start-3 self-end my-1.5 lg:ml-0 lg:hidden">
            <a href="#"><img src="{{ asset('assets/icons/menu.svg') }}" alt="Menu" class="w-[20px] h-[20px]"/></a>
        </div>
        <div class="col-span-3 lg:row-start-3 lg:col-start-10 justify-self-end lg:justify-self-start self-end lg:w-full">
            <form action="#" class="my-0 h-[30px] lg:w-full">
                <input type="text" id="searchname" name="searchname" placeholder="Cerca nel catalogo" class="pr-8 pl-1 lg:pr-1 lg:pl-8 h-[30px] w-[210px] lg:w-full font-switzer text-s border-b-2 border-black">
                <img src="{{ asset('assets/icons/search-lg.svg') }}" alt="Search Icon" class="pointer-events-none w-[22px] h-[22px] relative transform -translate-y-7 right-[-180px] lg:right-[-5px]"/>
                </input>
            </form>
        </div>

        <div class="hidden lg:flex col-start-1 col-span-8 row-start-3 self-end text-center align-text-bottom">
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Arredamento</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Illuminazione</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Accessori</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Idee Regalo</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Promozioni</a>
            <a href="#" class="font-switzer font-bold text-[13px] text-navHighlight">Showroom Affairs</a>
            <p class="font-zodiak font-italic font-bold text-[13px] pl-6 pr-3">Shop By</p>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Brand</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Ambienti</a>
            <a href="#" class="font-switzer font-medium text-[13px] pr-3">Designer</a>
        </div>
    </div>

</header>
