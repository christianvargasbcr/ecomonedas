@extends('layouts.master')
@section('titulo','Principal')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active shadow" data-toggle="tab" href="#home" style="color: #1c7430">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" style="color: #1c7430">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#other" style="color: #1c7430">Other</a>
                    </li>
                </ul>
                <br>
                <div id="myTabContent" class="tab-content" style="color: #1c7430">
                    <div class="tab-pane fade active show" id="home">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin</p>
                        <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                        <p>Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                        <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                        <p>Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                        <p>Aliquip placeat salvia cillum iphone.</p>
                        <p>Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                    </div>
                    <div class="tab-pane fade" id="other">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h6 style="color: #1c7430">Lista de Comercios</h6>
                <br>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <span class="badge badge-pill badge-success">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge badge-pill badge-success">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge badge-pill badge-success">1</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>

@endsection
