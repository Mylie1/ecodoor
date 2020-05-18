@extends('layouts.website')

@section('main')
    <!-- Home -->
    <section class="bg-green">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0 text-center">
                    <img class="img-fluid home-img text-center" src="{{ asset('img/fundo-3.png') }}" alt="imagem de fundo">
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre -->
    <section class="container py-5">
        <div class="row mb-3">
            <div class="col text-center">
                <h2 class="section-title">Sobre</h2>
            </div>
        </div>
        <div class="row">
            <!-- Img -->
            <div class="col-12 col-md-6 text-center my-auto">
                <img class="img-fluid " src="https://via.placeholder.com/500x350" alt="imagem de fundo">
            </div>
            <!-- Texto -->
            <div class="col-12 col-md-5 offset-md-1">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae, interdum imperdiet quam. Morbi suscipit diam sit amet purus faucibus posuere.
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae, interdum imperdiet quam. Morbi suscipit diam sit amet purus faucibus posuere.
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae, interdum imperdiet quam.
                </p>
            </div>
        </div>
    </section>

    <!-- Objetivos -->
    <section class="bg-blue">
        <div class="container py-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section-title">Objetivos</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 text-center my-auto">
                    <h4 class="section-subtitle">Preservar o ambiente para as gerações futuras</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae
                    </p>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <img class="img-fluid text-right" src="{{ asset('img/preservar.png') }}" alt="Preservar o ambiente">
                </div>
            </div>
            <!-- Coleta Seletiva -->
            <div class="row mt-5">
                <div class="col-12 col-md-5">
                    <img class="img-fluid" src="{{ asset('img/coleta-seletiva.png') }}" alt="coleta seletiva">
                </div>
                <div class="col-12 col-md-5 offset-md-1 text-center my-auto ml-auto">
                    <h4 class="section-subtitle">Coleta Seletiva</h4>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 text-center my-auto">
                    <h4 class="section-subtitle">Educação ambiental</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis lobortis risus eget aliquam. Proin molestie tortor vel lectus viverra, sit amet interdum erat rutrum. Nulla vel dui massa. Proin iaculis ornare tempus. Etiam felis massa, interdum vitae lectus vitae
                    </p>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <img class="img-fluid text-right" src="{{ asset('img/educacao-ambiental.png') }}" alt="Educação ambiental">
                </div>
            </div>
        </div>
    </section>

    <!-- Vantagens -->
    <section class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="section-title">Vantagens</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 py-2">
                <div class="card card-benefits">
                    <div class="card-body text-center">
                        <img class="img-fluid card-img" src="{{ asset('img/sustentabilidade.png') }}" alt="tecnologia">
                        <h6 class="card-title">Sustentabilidade</h6>
                        <span class="card-text">
                            Utilização da tecnologia permitindo identificar os pontos em que há lixo abandonado para conseguir retirá-lo do local.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-2">
                <div class="card card-benefits">
                    <div class="card-body text-center">
                        <img class="img-fluid card-img" src="{{ asset('img/carro.png') }}" alt="tecnologia">
                        <h6 class="card-title">Tecnologia</h6>
                        <span class="card-text">
                            Utilização da tecnologia permitindo identificar os pontos em que há lixo abandonado para conseguir retirá-lo do local.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-2">
                <div class="card card-benefits">
                    <div class="card-body text-center">
                        <img class="img-fluid card-img" src="{{ asset('img/mundo.png') }}" alt="tecnologia">
                        <h6 class="card-title">Abrangência</h6>
                        <span class="card-text">
                            Utilização da tecnologia permitindo identificar os pontos em que há lixo abandonado para conseguir retirá-lo do local.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection