<!--=====================================
BANNER
======================================-->

<div class="banner container-fluid p-0">

    <div class="jd-slider fade-slider">

        <div class="slide-inner">

            <ul class="slide-area">
                @foreach ($banner as $item)
                <li> <img src="{{url('img/'.$item->img)}}" width="100%"></li>
                @endforeach

            </ul>

        </div>

        <div class="controller d-none">

            <a class="auto" href="#">

                <i class="fas fa-play fa-xs"></i>
                <i class="fas fa-pause fa-xs"></i>

            </a>

            <div class="indicate-area"></div>

        </div>

        <div class="verMas text-center bg-white rounded-circle d-none d-lg-block" vinculo="#planes">

            <i class="fas fa-chevron-down"></i>

        </div>

    </div>

</div>
