@php
    $isRendered = false;
    $advertisementFour = null;
    $isLazyLoad = ! isset($lazyload) ? true : ( $lazyload ? true : false );
@endphp

@if ($velocityMetaData && $velocityMetaData->advertisement)
    @php
        $advertisement = json_decode($velocityMetaData->advertisement, true);

        if (isset($advertisement[4]) && is_array($advertisement[4])) {
            $advertisementFour = array_values(array_filter($advertisement[4]));
        }
    @endphp

    @if ($advertisementFour)

        @php
            $isRendered = true;
            $images_texts = json_decode($velocityMetaData->images_texts, true);
            $images_urls = json_decode($velocityMetaData->images_urls, true);
        @endphp

        <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">

        <div class="container-fluid advertisement-four-container">
            <div class="row">

                <div style="position: relative;" class="col-lg-4 col-12 advertisement-container-block no-padding">
                    
                    @if (isset($advertisementFour[0]))
                        <a @if (isset($one)) href="{{ $one }}" @endif aria-label="Advertisement">
                            <img
                                class="{{ $isLazyLoad ? 'lazyload' : '' }}"
                                @if (! $isLazyLoad) src="{{ asset('/storage/' . $advertisementFour[0]) }}" @endif
                                data-src="{{ asset('/storage/' . $advertisementFour[0]) }}" alt="" />
                        </a>

                        @if($images_texts[0])

                            <a style="position: absolute;bottom: 0;left: 0;width: 100%;color: black;text-decoration: none !important;" href="{{ $images_urls[0] ? $images_urls[0] : url('/') }}">
                            
                                <div style="width: 100%;height: 50px;display: flex;justify-content: center;">
                                    <div style="width: 80%;height: 50px;background-color: white;box-shadow: 0px 0px 6px 2px #8d8d8d52;padding: 10px;display: flex;align-items: center;justify-content: center;">
                                        <div><span style="font-size: 20px;font-weight: 600;">{{ $images_texts[0] }}</span> <i style="font-size: 14px;margin-left: 5px;" class="fas fa-chevron-right"></i></div>
                                    </div>
                                </div>

                            </a>

                        @endif

                    @endif

                </div>

                <div class="col-lg-4 col-12 advertisement-container-block offers-ct-panel">
                    
                    @if (isset($advertisementFour[1]))

                        <div style="position: relative;">

                            <a @if (isset($two)) href="{{ $two }}" @endif class="row col-12 remove-padding-margin" aria-label="Advertisement">
                                <img
                                    class="offers-ct-top {{ $isLazyLoad ? 'lazyload' : '' }}"
                                    @if (! $isLazyLoad) src="{{ asset('/storage/' . $advertisementFour[1]) }}" @endif
                                    data-src="{{ asset('/storage/' . $advertisementFour[1]) }}" alt="" />
                            </a>

                            @if($images_texts[1])

                                <a style="position: absolute;bottom: 0;left: 0;width: 100%;color: black;text-decoration: none !important;" href="{{ $images_urls[1] ? $images_urls[1] : url('/') }}">
                            
                                    <div style="width: 100%;height: 50px;display: flex;justify-content: center;">
                                        <div style="width: 80%;height: 50px;background-color: white;box-shadow: 0px 0px 6px 2px #8d8d8d52;padding: 10px;display: flex;align-items: center;justify-content: center;">
                                            <div><span style="font-size: 20px;font-weight: 600;">{{ $images_texts[1] }}</span> <i style="font-size: 14px;margin-left: 5px;" class="fas fa-chevron-right"></i></div>
                                        </div>
                                    </div>

                                </a>

                            @endif

                        </div>

                    @endif

                    <div style="height: 10px;"></div>

                    @if (isset($advertisementFour[2]))

                        <div style="position: relative;">

                            <a @if (isset($three)) href="{{ $three }}" @endif class="row col-12 remove-padding-margin" aria-label="Advertisement">
                                <img
                                    class="offers-ct-bottom {{ $isLazyLoad ? 'lazyload' : '' }}"
                                    @if (! $isLazyLoad) src="{{ asset('/storage/' . $advertisementFour[2]) }}" @endif
                                    data-src="{{ asset('/storage/' . $advertisementFour[2]) }}" alt="" />
                            </a>

                            @if($images_texts[2])

                                <a style="position: absolute;bottom: 0;left: 0;width: 100%;color: black;text-decoration: none !important;" href="{{ $images_urls[2] ? $images_urls[2] : url('/') }}">
                            
                                    <div style="width: 100%;height: 50px;display: flex;justify-content: center;">
                                        <div style="width: 80%;height: 50px;background-color: white;box-shadow: 0px 0px 6px 2px #8d8d8d52;padding: 10px;display: flex;align-items: center;justify-content: center;">
                                            <div><span style="font-size: 20px;font-weight: 600;">{{ $images_texts[2] }}</span> <i style="font-size: 14px;margin-left: 5px;" class="fas fa-chevron-right"></i></div>
                                        </div>
                                    </div>

                                </a>

                            @endif

                        </div>
                    
                    @endif

                </div>

                <div style="position: relative;" class="col-lg-4 col-12 advertisement-container-block no-padding">

                    @if (isset($advertisementFour[3]))
                        
                        <a @if (isset($four)) href="{{ $four }}" @endif aria-label="Advertisement">
                            <img
                                class="{{ $isLazyLoad ? 'lazyload' : '' }}"
                                @if (! $isLazyLoad) src="{{ asset('/storage/' . $advertisementFour[3]) }}" @endif
                                data-src="{{ asset('/storage/' . $advertisementFour[3]) }}" alt="" />
                        </a>
                        
                        @if($images_texts[3])

                            <a style="position: absolute;bottom: 0;left: 0;width: 100%;color: black;text-decoration: none !important;" href="{{ $images_urls[3] ? $images_urls[3] : url('/') }}">
                            
                                <div style="width: 100%;height: 50px;display: flex;justify-content: center;">
                                    <div style="width: 80%;height: 50px;background-color: white;box-shadow: 0px 0px 6px 2px #8d8d8d52;padding: 10px;display: flex;align-items: center;justify-content: center;">
                                        <div><span style="font-size: 20px;font-weight: 600;">{{ $images_texts[3] }}</span> <i style="font-size: 14px;margin-left: 5px;" class="fas fa-chevron-right"></i></div>
                                    </div>
                                </div>

                            </a>

                        @endif

                    @endif

                </div>
            </div>
        </div>
    @endif
@endif

@if (! $isRendered)
    <div class="container-fluid advertisement-four-container">
        <div class="row">
            <div class="col-lg-4 col-12 advertisement-container-block no-padding">
                <a @if (isset($one)) href="{{ $one }}" @endif aria-label="Advertisement">
                    <img
                        class="{{ $isLazyLoad ? 'lazyload' : '' }}"
                        @if (! $isLazyLoad) src="{{ asset('/themes/velocity/assets/images/big-sale-banner.webp') }}" @endif
                        data-src="{{ asset('/themes/velocity/assets/images/big-sale-banner.webp') }}" alt="" />
                </a>
            </div>

            <div class="col-lg-4 col-12 advertisement-container-block offers-ct-panel">
                <a @if (isset($two)) href="{{ $two }}" @endif aria-label="Advertisement">
                    <img
                        class="offers-ct-top {{ $isLazyLoad ? 'lazyload' : '' }}"
                        @if (! $isLazyLoad) src="{{ asset('/themes/velocity/assets/images/seasons.webp') }}" @endif
                        data-src="{{ asset('/themes/velocity/assets/images/seasons.webp') }}" alt="" />
                </a>

                <div style="height: 10px;"></div>

                <a @if (isset($three)) href="{{ $three }}" @endif aria-label="Advertisement">
                    <img
                        class="offers-ct-bottom {{ $isLazyLoad ? 'lazyload' : '' }}"
                        @if (! $isLazyLoad) src="{{ asset('/themes/velocity/assets/images/deals.webp') }}" @endif
                        data-src="{{ asset('/themes/velocity/assets/images/deals.webp') }}" alt="" />
                </a>
            </div>

            <div class="col-lg-4 col-12 advertisement-container-block no-padding">
                <a @if (isset($four)) href="{{ $four }}" @endif aria-label="Advertisement">
                    <img
                        class="{{ $isLazyLoad ? 'lazyload' : '' }}"
                        @if (! $isLazyLoad) src="{{ asset('/themes/velocity/assets/images/kids.webp') }}" @endif
                        data-src="{{ asset('/themes/velocity/assets/images/kids.webp') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
@endif