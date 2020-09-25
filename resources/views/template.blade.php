<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Orideli</title>

    <link rel="icon" href="{{ asset('assets/image/icon.png')}}" type="image/png" sizes="16x16">
    <!-- Bootstrap CSS CDN -->
    <link href="//db.onlinewebfonts.com/c/3dd6e9888191722420f62dd54664bc94?family=Myriad+Pro" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style type="text/css">
        .hidden {
            margin-top: 0px;
            height: 0px;
            -webkit-transition: height 0.5s linear;
               -moz-transition: height 0.5s linear;
                -ms-transition: height 0.5s linear;
                 -o-transition: height 0.5s linear;
                    transition: height 0.5s linear;
        }

        .hidden.open {
             height: 500px;
             -webkit-transition: height 0.5s linear;
                -moz-transition: height 0.5s linear;
                 -ms-transition: height 0.5s linear;
                  -o-transition: height 0.5s linear;
                     transition: height 0.5s linear;
        }
        .scroll { 
                /*height: 500px; */
                overflow-x: hidden; 
                overflow-y: auto; 
                text-align:justify; 
            } 
        .proses_to_chart_slide{
            position:fixed;
            bottom: 10px;
            padding: 10px;
            display: none;
        }
        @media screen and (max-width: 600px) {
            .nav-center {
                position: absolute;
                left: 40%;
            }
        }
        @media screen and (min-width: 768px) {
            .nav-center {
                position: absolute;
                left: 45%;
            }
        }

        @media screen and (min-width: 1920px) {
            .nav-center {
                position: absolute;
                left: 50%;
            }
        }
    </style>

</head>
<body>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
           
            <div class="sidebar-header mx-auto">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/image/baby-stardaz.jpg') }}" width="70" height="90" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
            </div>
            <ul class="list-unstyled components">
                <form class="d-md-none d-block px-3" action="{{route('product_search')}}">
                    <div class="input-group mb-4">
                        <input class="form-control text-center" type="search" name="keyword" placeholder="Search" aria-label="Search" aria-describedby="button-addon">
                        <!--<div class="input-group-append">
                            <button class="btn btn-ligth search-sidebar" type="submit" id="button-addon"><i class="fa fa-search"></i></button>
                        </div>-->
                    </div>
                </form>
                <li class="active">
                    <a href="{{ url('/') }}">Beranda</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategori Produk</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        @foreach($category as $key => $value)
                        <li>
                            <a href="{{URL::route('product_category', ['id'=>$value->id, 'category_name'=>$value->category_name] )}}" style="font-size: 1.1em !important;">{{$value->category_name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{URL::route('cara_belanja')}}">Cara Berbelanja</a>
                </li>
                <li>
                    <a href="{{URL::route('contact')}}">Kontak Kami</a>
                </li>
            </ul>

            <ul class="list-unstyled user-auth">
                <li>
                    <a href="{{route('login')}}" class="login">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="register">Register</a>
                </li>
            </ul>
        </nav>
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="z-index: 1.5;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success button-burger-menu">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <a class="navbar-brand nav-center" href="{{ url('/') }}">
                        <img src="{{ asset('assets/image/baby-stardaz.jpg') }}" width="100px" height="25px" class="p-0 m-0 d-inline-block align-top" alt="" loading="lazy">
                    </a>
                    <form action="{{route('product_search')}}" class="form-inline my-2 my-lg-0 ml-auto d-none d-md-inline-block">
                        <div class="input-group">
                            <input class="form-control d-inline-block m-100 search_input_navbar" name="keyword" type="text" placeholder="Search" aria-label="Search" aria-describedby="button-search-addon">
                            <!-- <div class="input-group-append">
                                <button class="btn btn-outline-success my-2 my-sm-0 search_botton_navbar" type="submit"id="button-search-addon"><i class="fa fa-search"></i></button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </nav>

            @isset($page)
                @if($page == 'home') {
                    <!-- BANNER -->
                    <div role="main" style="margin-top: -4px;">
                        <div id="bannerSlide" class="carousel slide" data-ride="carousel" >
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#bannerSlide" data-slide-to="0" class="active"></li>
                                <!-- <li data-target="#bannerSlide" data-slide-to="1"></li>
                                <li data-target="#bannerSlide" data-slide-to="2"></li> -->
                            </ul>
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/image/banner-4.jpg') }}" class="w-100 h-100">
                                </div><!-- 
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/image/banner-2.jpg') }}" class="w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/image/banner-3.jpg') }}" class="w-100">
                                </div> -->
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#bannerSlide" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#bannerSlide" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>    
                @endif
            @endisset
            
            <!-- Page Content  -->
            @yield('content')

            <footer class="footer fixed-bottom">
                <div class="row">
                    <div class="col-5 col-sm-4 my-auto" id="sosmed">
                        <!-- <a href="https://api.whatsapp.com/send?phone=&text=Halo" class="float-left mr-1 mr-md-3"> -->
                        <a href="https://api.whatsapp.com/send?phone=+6281776492873&text=Halo" class="float-left mr-1 mr-md-3">
                            <img src="{{ asset('assets/image/whatsapp_logo.png') }}" alt="" class="img-fluid" style="width: 30px;">
                        </a>
                        <a href="https://www.instagram.com/orideli.id/" class="float-left mr-1 mr-md-3">
                            <img src="{{ asset('assets/image/instagram_logo.png') }}" alt="" class="img-fluid" style="width: 30px;">
                        </a>
                        <a href="https://facebook.com/" class="float-left mr-1 mr-md-3">
                            <img src="{{ asset('assets/image/facebook_logo.png') }}" alt="" class="img-fluid" style="width: 30px;">
                        </a>
                    </div>
                    <div id="tombol_click" class="col-2">
                        <a href="#" id="clickme" class=" align-self-center" isi="true" style="color: #008000 !important">
                            <i class="fas fa-chevron-circle-up"></i>
                        </a>
                    </div>
                    <div class="col-5 col-sm-4 my-auto" id="cart_icon">
                        <?php
                            if(!empty($cart)) {
                                $total = 0;
                                foreach($cart as $key => $value) {
                                    $amount = $value->product_harga * $value->mount;
                                    $total += $amount;
                                }
                            
                        ?>
                            <div>
                                <p class="float-right" style="color: #fff; line-height: 50px;"><strong>Rp {{ number_format($total, 0, ',', '.') }}</strong></p>
                            </div>
                            <a href="#" class="float-right cart" style="position: relative;">
                                <?php
                                    if($count_cart < 10) {
                                ?>
                                    <p class="count-cart-one">{{ $count_cart }}</p>
                                    <img src="{{ asset('assets/image/bucket.png') }}" alt="" class="img-fluid" style="width: 45px;">
                                <?php
                                    }  elseif($count_cart < 100) {
                                ?>
                                    <p class="count-cart-two">{{ $count_cart }}</p>
                                    <img src="{{ asset('assets/image/bucket.png') }}" alt="" class="img-fluid" style="width: 45px;">
                                <?php
                                    } else {
                                ?>
                                    <p class="count-cart-three">{{ $count_cart }}</p>
                                    <img src="{{ asset('assets/image/bucket2.png') }}" alt="" class="img-fluid" style="width: 45px;">
                                <?php
                                    } 
                                ?>
                            </a>    
                        <?php
                            } else {
                        ?>
                            <p class="float-right p-0 my-auto" style="color: #fff;"><strong>Rp 0</strong></p>
                            <a href="{{route('cart')}}" class="float-right mr-1 mr-md-3 cart" style="position: relative;">
                                <p class="count-cart-one">{{ $count_cart }}</p>
                                <img src="{{ asset('assets/image/bucket.png') }}" alt="" class="img-fluid" style="width: 60px;">
                            </a>
                            {{-- <button type="button" class="btn btn-success button-pesan mb-0 float-right mr-3" data-toggle="modal" data-target="#modalCheckout">Pesan</button> --}}
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="hidden row" id="book">
                    <div class="scroll w-100 h-100" id="table_c" style="display: none;">
                        @php
                         $total = 0 ;
                        @endphp
                        @foreach($cart as $key => $value)
                        @php
                        $amount = $value->product_harga * $value->mount;
                        $total += $amount;
                        @endphp
                        <div class="row">
                            <div class="col-4">
                                <div class="float-left">
                                    <img class="img-thumbnail img-fluid" src="{{ asset('assets/image/product/'.(($value->image_link!='') ? $value->image_link : '20200621_184223_0016.jpg').'') }}" style="max-width: 100px;max-height: 100px;" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="float-left">
                                    <h5 class="product-name" style="color: #4db849 !important; font-weight: bold;">{{$value->product_name}}</h5>
                                    <span id="mount2_{{$value->id}}" style="color: #000 !important;">Rp {{ number_format($amount, 0, ',', '.') }}</span>
                                    <div class="text-left">
                                        <button type="button" class="btn btn-success button_minus" onclick="cart('{{$value->id}}','min')" style="padding: 0; text-align: center;">-</button>
                                        <span class="mr-1 ml-1" id="show_m2{{$value->id}}"> {{$value->mount}} </span>
                                        <button type="button" class="btn btn-success button_plus" onclick="cart('{{$value->id}}','plus')" style="padding: 0; text-align: center;">+</button>
                                        <input type="hidden" id="{{$value->id}}" value="{{$value->mount}}">
                                        <input type="hidden" id="harga_m{{$value->id}}" value="{{$amount}}">
                                        <input type="hidden" id="harga{{$value->id}}" value="{{$value->product_harga}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- <a class="btn btn-sm btn-danger" href="{{route('cart_delete',$value->id)}}" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini dari keranjang belanja Anda?');"><i class="fa fa-times"></i></a> -->
                                <a class="btn btn-sm btn-danger" onclick="valDel('{{$value->id}}')"><i class="fa fa-times" style="color: white;"></i></a>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-12">
                                <div class="float-left">
                                    <span style="background: #ffffff;font-size: 250%">&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="proses_to_chart_slide w-100"  style="background-color: white;">
                        {{ $count_cart }} Item | <span id="total_">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        <a href="{{route('cart')}}" class="btn btn-success align-self-right btn-sm">
                        <i class="fa fa-shopping-basket ml-1"></i>
                        <input type="hidden" id="total" value="{{$total}}">
                        Pesan Sekarang
                        </a>                                
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
            <h5 class="fa fa-trash"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="attachment-body-content">
            <form id="edit-form" class="form-horizontal" method="POST" action="">
              <div class="card text-white bg-dark mb-0">
                <div class="card-header">
                  <h2 class="m-0">Edit</h2>
                </div>
                <div class="card-body">
                  <!-- id -->
                  <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Id (just for reference not meant to be shown to the general public) </label>
                    <input type="text" name="modal-input-id" class="form-control" id="modal-input-id" required>
                  </div>
                  <!-- /id -->
                  <!-- name -->
                  <div class="form-group">
                    <label class="col-form-label" for="modal-input-name">Name</label>
                    <input type="text" name="modal-input-name" class="form-control" id="modal-input-name" required autofocus>
                  </div>
                  <!-- /name -->
                  <!-- description -->
                  <div class="form-group">
                    <label class="col-form-label" for="modal-input-description">Email</label>
                    <input type="text" name="modal-input-description" class="form-control" id="modal-input-description" required>
                  </div>
                  <!-- /description -->
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="btn-yes" type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        $(document).ready(function() {  
            /*$('#edit-modal').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
                var row = el.closest(".data-row");

                // get the data
                var id = el.data('item-id');
                var name = row.children(".name").text();
                var description = row.children(".description").text();

                // fill the data in the input fields
                $("#modal-input-id").val(id);
                $("#modal-input-name").val(name);
                $("#modal-input-description").val(description);

            }) */

            $('#btn-yes').on('click', function(){
                var id_modal = $("#modal-input-id").val();
                Swal.fire('Yes!');
            });
        });

        function valDel(id){
            // $('#edit-modal').modal('show');
            Swal.fire({
              title: 'Hapus barang ?',
              text: "Item ini akan di hapus dari keranjangmu",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#4db849',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus',
              cancelButtonText: "Batal"
            }).then((result) => {
              if (result.isConfirmed) {

                $.ajax({
                    type: "GET",
                    url: "{{url('/cart/delete')}}"+'/'+id,
                    data: {id:id},
                    success: function (data) {
                        Swal.fire({
                           title: 'Sukses',
                           text: 'Item ini berhasil di hapus',
                           icon: 'success'}).then(function(){ 
                        location.reload();
                        });
                    }         
                });
              }
              
            });
        }
       
    </script>


</body>

</html>