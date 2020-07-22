@extends('admin.master')

@section('main-content')
    <!--message Start-->
    @if (Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Message: </strong> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    @if (Session::get('error_message'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Error: </strong> {{ Session::get('error_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
<!--message end -->

<!--Slider Start-->
<section class="container-fluid">
    <div class="row">
        <div class="col-12 pl-0 pr-0">
            <div class="owl-carousel">
              @foreach ($slides as $slide)
              <div class="item">
                <img src="{{ asset('/')}}{{ $slide->silde_image}}" alt="">
              
                <div class="slide-caption">
                <h2 class="stitle">{{ $slide->silde_title}}</h2>
                <p>{{ $slide->silde_description}}</p>
              </div>
            </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
<!--Slider End-->
@endsection

<style>
.item{
    position: relative;
}
.item .slide-caption {
    position: absolute;
    bottom: 5%;
    width: 70%;
    overflow: hidden;
    left: 50%;
    background: rgba(0,0,0,0.4);
    transform: translateX(-50%);
    text-align: center;
    border-radius: 10px;
    margin-bottom: 25px;
    color: #fff;
    padding-top: 15px;
}
@media (max-width: 1024px) {
  .item .slide-caption{
    width: 60%;
    height: 20%;
    margin-bottom: 25px;
    }
    .stitle{
      font-size: 18px;
    }
    p{
      font-size: 12px;
    }
}

@media (max-width: 768px) {
  .item .slide-caption{
    width: 50%;
    height: 20%;
    margin-bottom: 25px;
    }
    .stitle{
      font-size: 20px;
    }
    p{
      visibility: hidden;
    }
}

@media (max-width: 425px) {
  .item .slide-caption{
    visibility: hidden;
    }
}
</style>
