@extends('layouts.layout')
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primaryBackground: '#F8F8F8',
                    navText: '#4D4D4D',
                    navHighlight: '#F50514',
                    kartellMain: '#591824',
                    kartellSecondary: '#F2CEAE',
                    interiorMain: '#261501',
                    interiorSecondary: '#F2D98D'
                },
                fontFamily: {
                    switzer: ['Switzer'],
                    din: ["DIN-2014"],
                    zodiak: ["Zodiak"],
                },
            }
        }
    }
</script>
<style type="text/tailwindcss">
    @layer base {
        @font-face {
            font-family: "Switzer", system-ui, sans-serif;
            src: url('{{ asset('fonts/Switzer/Switzer-Medium.otf') }}');
        }
        @font-face {
            font-family: "DIN-2014", system-ui, sans-serif;
            src: url('{{ asset('fonts/DIN-2014/DIN-2014_Regular.otf') }}') format('opentype');
        }
        @font-face {
            font-family: "Zodiak", system-ui, sans-serif;
            src: url('{{ asset('fonts/Zodiak/Zodiak-Italic.otf') }}') format('opentype');
        }
        .carouselTitle {
            @apply text-[28px];
            @apply lg:text-[36px];
            @apply font-switzer;
            @apply font-medium;
            @apply leading-9;
            @apply mt-1;
            @apply lg:col-start-1;
            @apply lg:row-start-2;
        }
        .carouselContainer {
            @apply w-full;
            @apply mx-auto;
            @apply mt-8;
            @apply lg:pl-[110px];
            @apply lg:mt-[58px];
        }
        .carouselGrid {
            @apply lg:grid;
            @apply lg:grid-cols-3;
            @apply lg:grid-rows-3;
        }
        .carouselCategory {
            @apply text-[12px];
            @apply text-navText;
            @apply font-din;
            @apply lg:col-start-1;
            @apply lg:row-start-1 lg:self-center;
        }
        .carouselParagraph {
            @apply text-[13px];
            @apply lg:text-[14px];
            @apply text-navText;
            @apply font-switzer;
            @apply font-light;
            @apply mt-1;
            @apply lg:mt-4;
            @apply lg:col-start-1;
            @apply lg:col-span-3;
            @apply lg:row-start-3;
        }
        .carouselMore {
            @apply flex;
            @apply mt-6;
            @apply lg:mt-0;
            @apply lg:col-start-3;
            @apply lg:row-start-2;
            @apply lg:justify-self-end;
            @apply lg:mr-[100px];
        }
        .carouselMoreText {
            @apply text-[14px];
            @apply font-switzer;
            @apply font-medium;
            @apply leading-9;
            @apply lg:self-center
        }
        .collectionPanel {
            @apply w-full;
            @apply px-4;
            @apply h-[200px];
            @apply mx-auto;
            @apply mt-8;
            @apply bg-cover;
        }
        .carouselScroll {
            @apply flex;
            @apply mt-6;
            @apply lg:mt-0;
            @apply flex-nowrap;
            @apply overflow-x-scroll;
            @apply pb-4;
        }
        body{
            @apply bg-primaryBackground;
        }
        .footerItem {
            @apply text-[13px];
            @apply font-switzer;
            @apply font-light;
        }
        .footerCategory {
            @apply w-full;
            @apply h-auto;
            @apply mx-auto;
            @apply mt-4;
            @apply lg:mt-0;
            @apply border-b-2;
            @apply lg:border-b-0
        }


        }
</style>

@section('header')
    @include('index.header')
@stop

@section('body')
    @include('index.body')
@stop

@section('footer')
    @include('index.footer')
@stop

@section('dna')
    @include('index.dna')
@stop
