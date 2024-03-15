@extends('site.app1')
@section('title')
@section('content')
    <section>
        <div style="background: url('/frontend/img/ffd.jpg');background-size:cover;height:100vh">
{{--            <img alt="First slide" class="d-block w-100 vh-100" src="/frontend/img/ffd.jpg">--}}
        </div>
    </section>
    <section class = "mt-5">
        <div class="container">
            <div class="row font-all">
                <div class="col-4 p-5">
                    <div>
                        <h5>EXPERIENCE THE ART OF WRAPPING</h5>
                    </div>
                    <br>
                    <div class = "p-3">
                        <div>
                            <span class = " cursor-pointer hover-span" onclick="wrapper('wr')">GIFT WRAPPING</span>
                        </div>
                        <br>
                        <br>
                        <div>

                            <span class = " cursor-pointer hover-span" onclick="wrapper('sel')">GIFT SELECTIONS</span>
                        </div>
                    </div>
                </div>
                <div class="col-8 p-5">
                    <div>
                        <h5>EXPERIENCE THE ART OF WRAPPING</h5>

                    </div>
                    <br>
                    <div class = "p-3">
                        <div>
                            <span style = "opacity: 0.8;" id = "wrapping">
                                All Cartier designs are beautifully wrapped in signature Cartier packaging.
                                <br>
                                <br>
                                GIFT SELECTIONS
                                GIFT WRAPPING
                                All Cartier designs are beautifully wrapped in signature Cartier packaging.
                                Gift wrapping is not available for select items including refills and watch straps.
                                Visit your local boutique or contact the Cartier Client Relations Center to learn more.
                                <br>
                                <br>
                                You can accompany your purchase with a personalised message on a signature Cartier card.
                            </span>

                            <span style = "opacity: 0.8;" id = "selection" class = "d-none">
                            Celebrate or commemorate a special occasion with our thoughtfully curated gift selections. Visit your local boutique or contact your Cartier Client Relations Center for inspiration in finding the perfect gift.
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop

@push('scripts')
    <script>
        function wrapper(param){
            console.log(param);
            if(param == "wr"){
                console.log(777)
                document.getElementById('wrapping').classList.remove('d-none')
                document.getElementById('selection').classList.add('d-none')
            }else{
                console.log(888)
                document.getElementById('wrapping').classList.add('d-none')
                document.getElementById('selection').classList.remove('d-none')
            }
        }
    </script>
@endpush
