<!--=====================================
HABITACIONES
======================================-->

<div class="habitaciones container-fluid bg-light" id="habitaciones">

    <div class="container">

        <h1 class="pt-4 text-center">HABITACIONES</h1>

        <div class="row p-4 text-center">

            @foreach ($categorias as $item)
            <div class="col-12 col-lg-4 pb-3 px-0 px-lg-3">

                <a href="{{ route('habitaciones', ['ruta' => $item->ruta]) }}">

                    <figure class="text-center">

                        <img src="{{url('img/'.$item->img)}}" class="img-fluid" width="100%">

                        <p class="small py-4 mb-0">{{$item->descripcion}}</p>

                        <h3 class="py-2 text-gray-dark mb-0">DESDE
                        ${{number_format($item->continental_baja)}}</h3>

                        <h5 class="py-2 text-gray-dark border">Ver detalles <i class="fas fa-chevron-right ml-2"></i>
                        </h5>

                        <h1 class="text-white p-3 mx-auto w-50 lead text-uppercase"
                            style="background:{{$item->color}}">{{$item->tipo}}</h1>

                    </figure>

                </a>

            </div>

            @endforeach

        </div>

    </div>

</div>
