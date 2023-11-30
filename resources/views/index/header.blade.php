<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header class="w-full h-[179px] md:h-[166px] bg-primaryBackground">
    <div class="w-full h-[50px] md:h-[34px] bg-black flex">
        <div class="grid grid-cols-6 md:grid-cols-12 grid-rows-1 grid-flow-row md:mx-11 justify-items-center w-full" >
            <div class="text-white ml-[44px] font-switzer text-xs font-medium self-center text-center col-span-5 grow md:col-span-11">
                <p>Entra nel mondo Ciat! <a href="#" class="underline font-bold">Registrati</a> per te <b class="font-bold text-sm">-15%</b>  sul tuo primo acquisto</p>
            </div>
            <div class="my-2 shrink justify-items-end md:my-auto md:col-start-12 md:justify-self-end">
                <a href="#"><img src="{{ asset('assets/icons/x-close.svg') }}" alt="Close prompt" class=" w-[17px] h-[17px] md:w-[20px] md:h-[20px]"/></a>
            </div>
        </div>
    </div>

    <div class="grid grid-flow-row grid-cols-4 md:grid-cols-12 md:gap-x-4 grid-rows-3 h-[129px] mx-4 md:mx-11">
        <div class="md:row-start-2 md:col-start-11 self-center md:justify-self-end flex md:block md:mr-2.5 md:mt-1.5">
            <a href="#"><img src="{{ asset('assets/icons/Flag_of_Italy.svg') }}" alt="Language Selector" class="w-[14px] h-[14px] mx-1 md:mx-auto md:w-[22px] md:h-[22px]"/></a>
            <p class="text-[10px] text-navText"> ITA / EUR</p>
        </div>
        <div class="hidden md:block md:col-span-5 md:col-start-1 md:row-start-1 self-center align-self-center text-navText">
            <p class="text-[10px]">SPEDIZIONE GRATUITA PER ORDINI SUPERIORI AI 250€</p>
        </div>
        <div class="col-span-3 md:col-span-5 md:col-start-8 justify-self-end self-center flex text-navText">
            <a href="#"><p class="text-[10px] mx-auto pr-1">PROGETTA</p></a>
            <a href="#"><p class="text-[10px] mx-auto px-1">MAGAZINE</p></a>
            <a href="#"><p class="text-[10px] mx-auto pl-1 md:pr-1">CHI SIAMO</p></a>
            <a href="#"><p class="text-[10px] mx-auto pl-1 hidden md:block">LAVORA CON NOI</p></a>
        </div>
        <div class="col-span-2 md:col-start-1 md:col-span-4 md:row-start-2 self-center">
            <img src="{{ asset('assets/images/ciatLogo.png') }}" class="w-[84px] h-[40px] md:hidden">
            <img src="{{ asset('assets/images/ciatLogoFull.png') }}" class="w-[220px] h-[30px] hidden md:block">
        </div>
        <div class="col-span-2 md:col-span-2 md:col-start-11 md:row-start-2 justify-self-end md:justify-end self-center grid grid-flow-row grid-cols-3 grid-rows-1 md:gap-x-2">
                <a href="#"><div class="w-[34px] h-[37px] mr-1 md:w-auto md:h-auto">
                    <img src="{{ asset('assets/icons/heart.svg') }}" alt="Favourites" class="mx-auto w-[20px] h-[20px] md:w-[30px] md:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Preferiti</p>
                </div></a>
                <a href="#" class="md:text-center"><div class="w-[34px] h-[37px] mx-1 md:w-auto md:h-auto">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="User" class="mx-auto w-[20px] h-[20px] md:w-[30px] md:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Accedi</p>
                </div></a>
        <a href="#"><div class="w-[34px] h-[37px] ml-1 md:w-auto md:h-auto">
                    <img src="{{ asset('assets/icons/shopping-bag.svg') }}" alt="Shopping Bag" class="mx-auto w-[20px] h-[20px] md:w-[30px] md:h-[30px]"/>
                    <p class="font-switzer text-[10px]">Carrello</p>
                </div></a>
        </div>

        <div class="md:row-start-3 self-end my-1.5 md:ml-0 md:hidden">
            <a href="#"><img src="{{ asset('assets/icons/menu.svg') }}" alt="Menu" class="w-[20px] h-[20px]"/></a>
        </div>
        <div class="col-span-3 md:row-start-3 md:col-start-10 justify-self-end md:justify-self-start self-end md:w-full">
            <form action="#" class="my-0 h-[30px] md:w-full">
                <input type="text" id="searchname" name="searchname" placeholder="Cerca nel catalogo" class="pr-8 pl-1 md:pr-1 md:pl-8 h-[30px] w-[210px] md:w-full font-switzer text-s border-b-2 border-black">
                <img src="{{ asset('assets/icons/search-lg.svg') }}" alt="Search Icon" class="pointer-events-none w-[22px] h-[22px] relative transform -translate-y-7 right-[-180px] md:right-[-5px]"/>
                </input>
            </form>
        </div>

        <div class="hidden md:flex col-start-1 col-span-8 row-start-3 self-end text-center align-text-bottom">
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
