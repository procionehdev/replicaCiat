<footer class="w-full h-[1390px] md:h-[768px] bg-primaryBackground px-4 md:px-11">

    <div class="w-full h-[360px] px-4 md:pl-[152px] py-3 md:py-[65px] mx-auto bg-center bg-cover bg-[url({{ asset('assets/images/newsletter.jpg') }})] md:bg-[url({{ asset('assets/images/newsletterDesktop.jpg') }})]">
        <p class="text-[12px] text-navText font-bold">ISCRIVITI ALLA NEWSLETTER</p>
        <p class="text-[28px] font-switzer font-medium leading-9 mt-1">Non perderti <br class="md:hidden">le nostre offerte!</p>
        <div class="flex w-full">
            <form action="#" class="mt-4 h-auto md:w-full">
                <input required type="text" id="newsletterEmail" name="newsletterEmail" placeholder="Inserisci e-mail *" class="pr-1 md:mr-4 pl-1 h-[46px] w-[165px] md:w-[480px] font-switzer text-navText text-s border-b-2 border-black">
                <button class="bg-black text-white h-[46px] w-[70px] md:w-[104px] font-switzer">Iscriviti</button>
                <div class="flex w-full  mt-3">
                    <input required type="checkbox" class="w-[28px] h-[28px] md:w-[24px] md:h-[24px] mr-2 self-start"/>
                    <p class="text-[12px] font-switzer font-light mt-1.5 md:mt-0.5">Ho letto <a href="#" class="underline">informativa sulla privacy</a> e accetto il trattamento dei miei dati *</p>
                </div>
            </form>
        </div>
    </div>
    <div class="md:grid md:h-[379px] md:grid-cols-12 md:grid-rows-5 md:gap-x-4">
        <div class="w-full h-auto mx-auto mt-6 md:mt-4 md:col-span-3 md:row-span-3 md:col-start-1">
            <p class="text-[16px] font-switzer font-medium">Sede operativa & Showroom</p>
            <p class="footerItem mt-2">Via S. Francesco a Patria 168 <br>80014 Giugliano in Campania - Napoli</p>
            <div class="flex w-full mt-4">
                <p class="text-[13px] text-navText font-zodiak font-italic pr-7">tel:</p>
                <p class="footerItem">(+39) 081 8196364</p>
            </div>
            <div class="flex w-full mt-[7px]">
                <p class="text-[13px] text-navText font-zodiak font-italic pr-2.5">email:</p>
                <a href="mailto:shop@ciatdesign.com"><p class="footerItem underline">shop@ciatdesign.com</p></a>
            </div>
            <div class="flex w-full mt-[7px]">
                <p class="text-[13px] text-navText font-zodiak font-italic pr-3.5">orari:</p>
                <p class="footerItem">dal lunedì al venerdì 09:00 - 13:30 / 15:30 - 20:00</p>
            </div>
        </div>
        <div class="w-full h-auto mx-auto mt-6 md:mt-0 md:col-span-3 md:row-span-2 md:col-start-1 md:row-start-4">
            <p class="text-[16px] font-switzer font-medium">Showroom Napoli Chiaia</p>
            <p class="footerItem mt-2">Via Del Parco Margherita 25, 80121 - Napoli</p>
            <div class="flex w-full mt-[7px]">
                <p class="text-[13px] text-navText font-zodiak font-italic pr-2.5">email:</p>
                <a href="mailto:napoli@ciatdesign.com"><p class="footerItem underline">napoli@ciatdesign.com</p></a>
            </div>
            <div class="flex w-full mt-[7px]">
                <p class="text-[13px] text-navText font-zodiak font-italic pr-3.5">orari:</p>
                <p class="footerItem">dal lunedì al venerdì 10:00 - 19:30</p>
            </div>
        </div>

        <div class="w-full h-auto mx-auto mt-6 md:mt-0 border-b-2 md:border-b-0 border-t-2 md:border-t-0 md:col-start-4 md:col-span-2  md:row-start-1 md:row-span-2">
            <div class="flex mt-4">
                <p class="text-[16px] font-switzer font-medium">About</p>
                <a href="#" class="ml-auto mr-2 md:hidden"><img src="{{ asset('assets/icons/minus.svg') }}" alt="Close About" class="w-[22px] h-[22px]"/></a>
            </div>
            <div class="mt-4 mb-6">
                <a href="#"><p class="footerItem">La nostra storia</p></a>
                <a href="#"><p class="footerItem mt-1.5">Lavora con noi</p></a>
                <a href="#"><p class="footerItem mt-1.5">Punti vendita</p></a>
            </div>
        </div>
        <div class="footerCategory md:col-start-4 md:col-span-2 md:row-start-3 md:row-span-3">
            <div class="flex mt-4 mb-4">
                <p class="text-[16px] font-switzer font-medium">Services</p>
                <a href="#" class="ml-auto mr-2 md:hidden"><img src="{{ asset('assets/icons/plus.svg') }}" alt="Open Services" class="w-[22px] h-[22px]"/></a>
            </div>
            <div class="mt-4 mb-6 hidden md:block">
                <a href="#"><p class="footerItem">The showroom affairs</p></a>
                <a href="#"><p class="footerItem mt-1.5">Personal design shopper</p></a>
                <a href="#"><p class="footerItem mt-1.5">Promozioni</p></a>
                <a href="#"><p class="footerItem mt-1.5">Liste Nozze</p></a>
            </div>
        </div>
        <div class="footerCategory md:col-start-6 md:col-span-2  md:row-start-1 md:row-span-2">
            <div class="flex mt-4 mb-4">
                <p class="text-[16px] font-switzer font-medium">Assistenza Clienti</p>
                <a href="#" class="ml-auto mr-2 md:hidden"><img src="{{ asset('assets/icons/plus.svg') }}" alt="Open Customer Service" class="w-[22px] h-[22px]"/></a>
            </div>
            <div class="mt-4 mb-6 hidden md:block">
                <a href="#"><p class="footerItem">Contatti</p></a>
                <a href="#"><p class="footerItem mt-1.5">Controlla il tuo ordine</p></a>
                <a href="#"><p class="footerItem mt-1.5">Domande Frequenti</p></a>
                <a href="#"><p class="footerItem mt-1.5">Bonus Mobili 2023</p></a>
                <a href="#"><p class="footerItem mt-1.5">Metodi di pagamento</p></a>
                <a href="#"><p class="footerItem mt-1.5">Resi</p></a>
                <a href="#"><p class="footerItem mt-1.5">Spedizioni</p></a>
            </div>
        </div>
        <div class="footerCategory md:col-start-8 md:col-span-2  md:row-start-1 md:row-span-3">
            <div class="flex mt-4 mb-4">
                <p class="text-[16px] font-switzer font-medium">Ispirazione</p>
                <a href="#" class="ml-auto mr-2 md:hidden"><img src="{{ asset('assets/icons/plus.svg') }}" alt="Open Inspiration" class="w-[22px] h-[22px]"/></a>
            </div>
            <div class="mt-4 mb-6 hidden md:block">
                <a href="#"><p class="footerItem">Magazine</p></a>
                <a href="#"><p class="footerItem mt-1.5">Top designer</p></a>
                <a href="#"><p class="footerItem mt-1.5">Top brand</p></a>
                <a href="#"><p class="footerItem mt-1.5">Lookbook</p></a>
                <a href="#"><p class="footerItem mt-1.5">Shop by look</p></a>
                <a href="#"><p class="footerItem mt-1.5">Ambienti</p></a>
            </div>
        </div>

        <div class="w-full h-auto mx-auto mt-6 md:mt-4 md:col-start-10 md:col-span-3  md:row-start-1 md:row-span-2">
            <div class="md:grid md:grid-cols-3 md:grid-rows-2 md:gap-y-4">
                <p class="text-[16px] font-switzer font-medium md:col-start-1 md:col-span-2">Pagamento sicuro</p>
                <div class="flex w-full mt-4 md:mt-0 md:col-start-1 md:col-span-3 md:row-start-2 overflow-x-auto">
                    <img src="{{ asset('assets/icons/Paypal-card-light.svg') }}" class="w-[40px] h-[24px] mr-2">
                    <img src="{{ asset('assets/icons/Visa-card-light.svg') }}" class="w-[40px] h-[24px] mr-2">
                    <img src="{{ asset('assets/icons/MasterCard-light.svg') }}" class="w-[40px] h-[24px] mr-2">
                    <img src="{{ asset('assets/icons/AmericanExpress-light.svg') }}" class="w-[40px] h-[24px] mr-2">
                    <img src="{{ asset('assets/icons/Klarna-card-light.svg') }}" class="w-[40px] h-[24px]">
                </div>
                <div class="flex w-full mt-6 md:mt-0 md:col-start-3 md:justify-self-end md:justify-end">
                    <a href="https://www.instagram.com" class=" mr-4"><img src="{{ asset('assets/icons/instagram.svg') }}" class="w-[22px] h-[22px]"></a>
                    <a href="https://www.facebook.com" class=" mr-4"><img src="{{ asset('assets/icons/facebook.svg') }}" class="w-[22px] h-[22px]"></a>
                    <a href="https://www.pinterest.it"><img src="{{ asset('assets/icons/pinterest.svg') }}" class="w-[22px] h-[22px]"></a>
                </div>
            </div>
        </div>

        <div class="w-full h-auto mx-auto mt-6 md:col-start-10 md:col-span-3  md:row-start-2 md:row-span-4 md:flex">
                <img src="{{ asset('assets/images/trustpilot.png') }}" class="w-[143px] h-[78px]">
                <div class="flex w-full mt-6 pb-6 border-b-2 md:border-b-0 md:ml-2 md:flex-wrap">
                    <img src="{{ asset('assets/images/netcom.png') }}" class="w-[88px] h-[40px] mr-4">
                    <img src="{{ asset('assets/images/aeo.png') }}" class="w-[99px] h-[40px]">
                </div>
            </div>
        </div>
    </div>

</footer>
