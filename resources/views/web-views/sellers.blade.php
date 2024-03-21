@extends('layouts.front-end.app')

@section('title', \App\CPU\translate('All Seller Page'))

@push('css_or_js')
    <meta property="og:image" content="{{ asset('storage/company') }}/{{ $web_config['web_logo']->value }}" />
    <meta property="og:title" content="Brands of {{ $web_config['name']->value }} " />
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">

    <meta property="twitter:card" content="{{ asset('storage/company') }}/{{ $web_config['web_logo']->value }}" />
    <meta property="twitter:title" content="Brands of {{ $web_config['name']->value }}" />
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value, 0, 100) !!}">
    <style>
        .page-item.active .page-link {
            background-color: {{ $web_config['primary_color'] }} !important;
        }
    </style>
@endpush

@section('content')

    <!-- Page Content-->
    <div class="container mb-md-4 {{ Session::get('direction') === 'rtl' ? 'rtl' : '' }} __inline-65">
        <div class="row mt-3 mb-3 border-bottom">
            <div class="col-md-8">
                <h4 class="mt-2 text-start">{{ \App\CPU\translate('All_Sellers') }}</h4>
            </div>
            <div class="col-md-4">
                <form action="{{ route('search-shop') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="{{ \App\CPU\translate('Shop name') }}"
                            name="shop_name" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary"
                                type="submit">{{ \App\CPU\translate('Search') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <!-- Content  -->
            <section class="col-lg-12">
                <!-- Products grid-->
                <div class="row mx-n2 __min-h-200px">
                    @foreach ($sellers as $shop)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 px-2 pb-4 text-center">
                            <div class="card-body shadow">
<div class="owl-item active" style="width: 285px; margin-right: 26px;"
                                                    bis_skin_checked="1"><a
                                                        href="{{ route('shopView', ['id' => $shop['seller_id']]) }}"
                                                        class="others-store-card text-capitalize">
                                                        <div class="overflow-hidden other-store-banner"
                                                            bis_skin_checked="1">
                                                            <img class="w-100 h-100 object-cover" alt=""
                                                                src="{{ asset("storage/shop/$shop->image") }}">
                                                        </div>
                                                        <div class="name-area" bis_skin_checked="1">
                                                            <div class="position-relative" bis_skin_checked="1">
                                                                <div class="overflow-hidden other-store-logo rounded-full"
                                                                    bis_skin_checked="1">

                                                                    <img class="rounded-full" alt="Store"
                                                                        src="{{ asset("storage/shop/$shop->image") }}">
                                                                </div>
                                                            </div>
                                                            <div class="info pt-2" bis_skin_checked="1">
                                                                <h5>{{ Str::limit($shop->name, 14) }}</h5>
                                                                <div class="d-flex align-items-center" bis_skin_checked="1">
                                                                    <h6 class="web-text-primary">0.0</h6>
                                                                    <i class="tio-star text-star mx-1"></i>
                                                                    <small>Rating</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="info-area" bis_skin_checked="1">
                                                            <div class="info-item" bis_skin_checked="1">
                                                                <h6 class="web-text-primary">
                                                                    0
                                                                </h6>
                                                                <span>Reviews</span>
                                                            </div>
                                                            <div class="info-item" bis_skin_checked="1">
                                                                <h6 class="web-text-primary">
                                                                    {{ \App\Model\Product::where('added_by', 'seller')->where('user_id', $shop->id)->count() }}
                                                                </h6>
                                                                <span>Products</span>
                                                            </div>
                                                        </div>
                                                    </a></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mx-n2">
                    <div class="col-md-12">
                        <center>
                            {{ $sellers->links() }}
                        </center>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('script')
@endpush
