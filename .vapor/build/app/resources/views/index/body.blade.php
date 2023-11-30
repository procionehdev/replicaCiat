<div class="w-full bg-primaryBackground px-4 lg:pl-11">

    <div class="w-full h-[506px] lg:h-[610px] lg:px-0 lg:py-0 mx-auto">
        <div class="lg:grid lg:grid-cols-5 lg:grid-rows-1 bg-kartellSecondary lg:mr-7">
            <div class="mx-auto w-full h-[176px] lg:h-[610px] lg:col-start-3 lg:col-span-3 lg:row-start-1 bg-center bg-cover bg-[url('{{ asset('assets/images/collectionPlaceholder1.jpg') }}')]">
            </div>
                <div class="px-4 pt-2 lg:max-w-[450px] lg:h-[310px] lg:m-auto lg:px-2 lg:py-0 lg:col-start-1 lg:col-span-2 lg:row-start-1">
                <p class="text-[12px] text-kartellMain font-din">MY KARTEL 2023</p>
                <p class="text-[28px] lg:text-[46px] text-kartellMain font-switzer font-bold leading-9 lg:leading-[60px] mt-1">Il nostro progetto per il futuro</p>
                <p class="text-[14px] text-kartellMain font-switzer font-light leading-5 mt-1.5 lg:mt-4">La collezione 2023 di Kartell è un’espressione di design contemporaneo, caratterizzata da forme audaci, materiali innovativi e colori vivaci.</p>
                <button class="bg-kartellMain text-kartellSecondary mt-6 mb-10 lg:mb-0 lg:mt-8 h-[50px] w-[166px] font-switzer">Esplora la collezione</button>
            </div>
        </div>
    </div>

    <div class="carouselContainer">
        <div class="carouselGrid">
            <p class="carouselCategory">SALONE DEL MOBILE 2023</p>
            <p class="carouselTitle">Future design</p>
            <p class="carouselParagraph leading-4.5">
                Esplora le affascinanti novità presentate al Salone del Mobile,
                l’evento di riferimento per scoprire le ultime tendenze nel design.
            </p>
            <div class="carouselMore">
                <p class="carouselMoreText">Scopri di più</p>
                <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
            </div>
        </div>
        <div class="carouselScroll">
            @foreach($carousels[0]->products()->get()  as $product)
                <div class="w-[140px] lg:w-[292px] h-[286px] lg:h-[440px] mr-1.5 lg:mr-4 shrink-0">
                    <div class="w-full h-[172px] lg:h-[360px] flex bg-cover bg-center bg-[url('{{ asset($product->img) }}')]">
                        <img class="mr-[13px] lg:mr-[22px] ml-auto mb-2 lg:mb-7 mt-auto w-[25px] h-[25px]" src="{{ asset('assets/icons/heart.svg') }}">
                    </div>
                    <p class="text-[10px] font-din text-navText uppercase mt-2">{{  $product->designer }}</p>
                    <div class="lg:flex mt-1">
                        <p class="text-[13px] lg:text-[14px] font-switzer font-medium">{{  $product->name }}</p>
                        <p class="text-[14px] font-switzer font-light mt-2 lg:mt-0 lg:mr-0 lg:ml-auto">{{  $product->price }} €</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>  <!-- Future Design -->

    <div class="carouselContainer">
        <div class="lg:flex lg:mx-auto lg:ml-0">
            <div class="collectionPanel flex lg:w-[600px] lg:h-[420px] lg:max-w-[600px] lg:mr-4 bg-[url({{ asset('assets/images/flos.jpg') }})]">
                <div class="self-end pb-2 pl-1">
                    <p class="text-[10px] text-white font-din">FLOS</p>
                    <p class="text-[20px] text-white font-switzer font-medium leading-9">Almendra Organic</p>
                </div>
            </div>
            <div class="collectionPanel flex mt-2 lg:mt-8 lg:w-[908px] lg:h-[420px] lg:max-w-[908px] bg-[url({{ asset('assets/images/design.jpg') }})]">
                <div class="self-end pb-2 pl-1">
                    <p class="text-[10px] text-white font-din">ICONE DI DESIGN</p>
                    <p class="text-[20px] text-white font-switzer font-medium leading-9">Design’s Creative Essence</p>
                </div>
            </div>
        </div>
    </div>
    <div class="carouselContainer">
        <div class="carouselGrid lg:grid-rows-2 mb-4">
            <p class="carouselCategory">COLLEZIONI</p>
            <p class="carouselTitle">Summer dreams</p>
            <div class="carouselMore">
                <p class="carouselMoreText">Esplora la collezione</p>
                <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
            </div>
        </div>
        <div class="lg:grid lg:grid-cols-6 lg:grid-rows-1">
            <div class="mx-auto lg:mx-0 w-[288px] h-[264px] lg:col-start-1 lg:col-span-2 lg:w-full lg:h-[550px]
            bg-cover bg-right bg-[url('{{asset('assets/images/estate.jpg')}}')]">
        </div>
            <div class="carouselScroll lg:ml-4 lg:col-start-3 lg:col-span-4">
                @foreach($carousels[1]->products()->get()  as $product)
                    <div class="w-[214px] h-[353px] lg:w-[446px] lg:h-[610px] mr-1.5 shrink-0">
                        <div class="w-full h-[264px] lg:h-[550px] flex bg-cover bg-center bg-[url('{{ asset($product->img) }}')]">
                            <img class="mr-[13px] lg:mr-[22px] ml-auto mb-2 lg:mb-7 mt-auto w-[25px] h-[25px]" src="{{ asset('assets/icons/heart.svg') }}">
                        </div>
                        <p class="text-[10px] font-din text-navText uppercase mt-2">{{  $product->designer }}</p>
                        <div class="lg:flex mt-1">
                            <p class="text-[13px] lg:text-[14px] font-switzer font-medium">{{  $product->name }}</p>
                            <p class="text-[14px] font-switzer font-light mt-2 lg:mt-0 lg:mr-1 lg:ml-auto">{{  $product->price }} €</p>
                        </div>
                    </div>
                @endforeach

            </div> <!-- QUI VANNO I PRODOTTI RICORDA -->
        </div>
    </div> <!-- Summer dreams -->

    <div class="carouselContainer">
        <div class="carouselGrid lg:grid-rows-2 mb-4">
            <p class="carouselCategory">MAESTRI DEL DESIGN</p>
            <p class="carouselTitle">Top designer</p>
            <div class="carouselMore">
                <p class="carouselMoreText">Vedi tutti</p>
                <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
            </div>
        </div>
        <div class="carouselScroll">
            @foreach($carousels[2]->products()->get()  as $product)
                <div class="w-[214px] h-[322px] lg:w-[292px] lg:h-[440px] mr-1.5 shrink-0">
                    <div class="w-full h-[322px] lg:h-[440px] flex bg-cover bg-center bg-[url('{{ asset($product->img) }}')]">
                        <div class="w-full h-full bg-gradient-to-t from-gray-600 to-40% flex">
                            <div class="mb-4 ml-3 mt-auto">
                                <p class="text-[18px] lg:text-[24px] text-white font-switzer font-medium">{{  $product->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div> <!-- Top Designer -->

    <div class="carouselContainer lg:pl-0">
        <div class="lg:flex lg:mx-[110px]">
            <div class="lg:max-w-[552px]">
                <p class="carouselCategory">CHI SIAMO</p>
                <p class="carouselTitle">La nostra storia</p>
                <p class="text-[13px] text-navText font-switzer font-light leading-5 mt-1">
                    Da oltre 40 anni, Ciat è sinonimo di qualità e professionalità nel campo dell’arredamento.
                    Un’azienda nata in Campania che ha saputo crescere e consolidarsi affidandosi alla grande
                    passione che guida il nostro team di esperti, architetti ed interior designer per un unico scopo:
                    realizzare i tuoi progetti con i migliori prodotti di design.</p>
                <div class="flex mt-6 lg:mt-8">
                    <button class="bg-[#0C24FB] text-white mr-6 h-[50px] w-[112px] lg:w-[144px] font-switzer">Scopri di più</button>
                    <p class="text-[14px] self-center font-switzer font-medium leading-9">Lavora con noi</p>
                    <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
                </div>
            </div>
            <div class="mt-6 w-full h-[140px] lg:h-[438px] lg:ml-[65px] self-end bg-cover bg-right bg-[url('{{ asset('assets/images/ciatSede.jpg') }}')]">
            </div>
        </div>
    </div> <!-- Chi siamo -->

    <div class="carouselContainer">
        <div class="carouselGrid lg:grid-rows-2 mb-4">
            <p class="carouselCategory">MARCHI ICONICI</p>
            <p class="carouselTitle">Top brand</p>
            <div class="carouselMore">
                <p class="carouselMoreText">Vedi tutti</p>
                <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
            </div>
        </div>
        <div class="carouselScroll">
            @foreach($carousels[3]->products()->get()  as $product)
                <div class="w-[214px] h-[322px] lg:w-[292px] lg:h-[440px] mr-1.5 shrink-0">
                    <div class="w-full h-[322px] lg:h-[440px] flex bg-cover bg-center bg-[url('{{ asset($product->img) }}')]">
                        <div class="mb-4 ml-3 mt-auto">
                            <p class="text-[18px] lg:text-[24px] text-white font-switzer font-medium">{{  $product->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div> <!-- Top Brand -->

    <div class="carouselContainer">
        <div class="carouselGrid">
            <p class="carouselCategory self-end">OUTLET</p>
            <p class="carouselTitle self-center">The showroom affairs</p>
            <p class="carouselParagraph leading-4.5">
                The Showroom Affairs è la nostra area dedicata alle incredibili offerte dei
                prodotti provenienti dal nostro showroom, messi a vostra disposizione
                in una sorta di visita virtuale del nostro spazio espositivo.
                Solo qui potrete trovare il meglio del design made in Italy a
                <b class="font-bold text-black">prezzi scontati</b> ed in <b class="font-bold text-black">pronta consegna.</b>
            </p>
            <div class="carouselMore">
                <p class="carouselMoreText">Esplora la collezione</p>
                <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
            </div>
        </div>
        <div class="lg:grid lg:grid-cols-6 lg:grid-rows-1 lg:mt-2">
            <div class="mx-auto lg:justify-self-stretch lg:col-span-3 lg:mx-0 w-[288px] h-[260px]  lg:w-full lg:h-[760px] flex-shrink-0
            bg-cover bg-center bg-[url('{{asset('/assets/images/showroom.jpg')}}')]"></div>
            <div class="flex flex-wrap justify-center lg:justify-start lg:gap-x-3 mt-6 lg:mt-0 pb-4 lg:col-span-3 lg:ml-6 lg:max-h-[920px] overflow-y-auto">
                @foreach($carousels[4]->products()->get()  as $product)
                    <div class="w-[130px] max-h-[286px] lg:max-h-[440px] lg:w-[282px] lg:h-[440px] mr-1.5 lg:mr-0 shrink-0 mb-2">
                        <div class="w-full h-[172px] lg:h-[360px] flex bg-cover bg-center bg-[url('{{ asset($product->img) }}')]">
                            <div class="ml-2 mt-2 w-[108px] h-[21px] bg-[#F50514] flex"><p class="text-[10px] font-switzer text-white text-center mx-auto self-center text-center">Showroom Affairs</p></div>
                            <img class="mr-[13px] lg:mr-[22px] ml-auto mb-2 lg:mb-7 mt-auto w-[25px] h-[25px]" src="{{ asset('assets/icons/heart.svg') }}">
                        </div>
                        <p class="text-[10px] font-din text-navText uppercase mt-2">{{  $product->designer }}</p>
                        <div class="lg:flex mt-1">
                            <p class="text-[13px] lg:text-[14px] font-switzer font-medium">{{  $product->name }}</p>
                            <p class="text-[14px] font-switzer font-light mt-2 lg:mt-0 lg:mr-1 lg:ml-auto">{{  $product->price }} €</p>
                        </div>
                    </div>
                @endforeach
            </div> <!-- QUI VANNO I PRODOTTI RICORDA -->
        </div>
    </div> <!-- Showroom affairs -->

    <div class="carouselContainer lg:px-[110px]">
        <div class="w-full lg:w-auto h-auto pb-6 lg:h-[740px] lg:py-0 mx-auto bg-interiorSecondary">
            <div class="lg:grid lg:grid-cols-6 lg:grid-rows-1">
                <div class="mx-auto w-full h-[176px] lg:h-[740px] lg:col-start-4 lg:col-span-3 lg:row-start-1 bg-center bg-cover bg-[url('{{ asset('assets/images/collectionPlaceholder1.jpg') }}')]">
                </div>
                <div class="px-4 pt-2 lg:max-w-[450px] lg:h-[310px] lg:m-auto lg:my-[64px] lg:px-2 lg:py-0 lg:col-start-1 lg:col-span-3 lg:row-start-1">
                    <p class="text-[12px] text-interiorMain font-din">INTERIOR DESIGN SERVICE</p>
                    <p class="text-[28px] lg:text-[34px] text-interiorMain font-switzer font-bold leading-9 mt-1">Personal design shopper</p>
                    <p class="text-[13px] lg:text-[14px] text-interiorMain font-switzer font-light leading-5 mt-1.5 lg:mt-0.5">
                        Il Personal Design Shopper offre un supporto professionale nella selezione
                        e nell’acquisto di arredi e accessori per la tua casa o ufficio.
                        Insieme, comprenderemo le tue preferenze, esigenze e budget. Ti guiderò nella scelta degli arredi,
                        offrendoti consigli sul design e selezionando prodotti di qualità. Analizzeremo lo spazio disponibile
                        per creare un ambiente accogliente e funzionale, tenendo conto delle tendenze attuali.
                        Sfruttando la mia competenza nel design e la conoscenza delle ultime tendenze, creeremo un ambiente unico e di classe.
                        Sarò al tuo fianco durante il processo di acquisto e consegna per rendere il tuo progetto di arredamento senza stress.
                    </p>
                    <div class="flex mt-5">
                        <p class="text-[14px] text-interiorMain self-center font-switzer font-medium leading-9">Prenota un appuntamento</p>
                        <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="carouselContainer lg:px-[110px]">
        <p class="carouselCategory">BLOG</p>
        <p class="carouselTitle">Ciat magazine</p>
        <div class="lg:grid lg:grid-cols-3 lg:grid-rows-1 lg:gap-x-4">
            <div>
                <div class="mx-auto mt-6 w-full h-[140px] lg:h-[320px]
                bg-center bg-cover bg-[url('{{ asset('assets/images/ciatSede.jpg') }}')]"></div>
                <div class="flex mt-2">
                    <p class="carouselCategory mr-2">1 GIUGNO 2023</p>
                    <p class="text-[12px] font-zodiak font-italic">∙ brand</p>
                </div>
                <p class="text-[18px] lg:text-[24px] font-switzer font-medium leading-6 mt-1">
                    Miyazaki Chair Factory: L’Arte Giapponese del Fare Incontra lo Stile Nordeuropeo</p>
                <div class="flex mt-3">
                    <p class="text-[14px] self-center font-switzer font-medium leading-9">Leggi articolo</p>
                    <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="mx-auto mt-6 w-full h-[140px] lg:h-[320px]
                bg-center bg-cover bg-[url('{{ asset('assets/images/showroom.jpg') }}')]"></div>
                <div class="flex mt-2">
                    <p class="carouselCategory mr-2">11 APRILE 2023</p>
                    <p class="text-[12px] font-zodiak font-italic">∙ designer</p>
                </div>
                <p class="text-[18px] lg:text-[24px] font-switzer font-medium leading-6 mt-1">
                    La Poliedrica Genialità di Bruno Munari: Un Creativo Eclettico</p>
                <div class="flex mt-3">
                    <p class="text-[14px] self-center font-switzer font-medium leading-9">Leggi articolo</p>
                    <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="mx-auto mt-6 w-full h-[140px] lg:h-[320px]
                bg-center bg-cover bg-[url('{{ asset('assets/images/estate.jpg') }}')]"></div>
                <div class="flex mt-2">
                    <p class="carouselCategory mr-2">20 LUGLIO 2023</p>
                    <p class="text-[12px] font-zodiak font-italic">∙ brand</p>
                </div>
                <p class="text-[18px] text-[24px] font-switzer font-medium leading-6 mt-1">
                    Pedrali: 60 Anni di Eccellenza nel Design con una Collezione Tributo alle Radici</p>
                <div class="flex mt-3">
                    <p class="text-[14px] self-center font-switzer font-medium leading-9">Leggi articolo</p>
                    <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="Arrow Right" class="w-[40px] h-[20px] self-center"/>
                </div>
            </div>
        </div>
        <button class="bg-[#0C24FB] mt-6 text-white h-[50px] w-full lg:w-[196px] lg:mx-auto lg:flex lg:justify-center font-switzer">
            <p class="lg:self-center">Leggi tutti gli articoli</p></button>

    </div> <!-- Ciat Magazine -->

    <div class="pb-10"></div>
</div>
