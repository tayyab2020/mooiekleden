<div>
    <sidebar-header heading= "{{ __('velocity::app.menu-navbar.text-category') }}">

        {{-- this is default content if js is not loaded --}}
        <div class="main-category fs16 unselectable fw6 left">
            <i class="rango-view-list text-down-4 align-vertical-top fs18"></i>

            <span class="pl5">{{ __('velocity::app.menu-navbar.text-category') }}</span>
        </div>

    </sidebar-header>
</div>

<div class="content-list right">
    <?php dd($slicedCategories); ?>
    <ul type="none" class="no-margin">
        <li><a href="https://demo.bagisto.com/bagisto-2400adc515cd100e89f5e863d4d3043/women" target="_self">Demo Store</a></li>
    </ul>
    <!--<right-side-header :header-content="{{ json_encode(app('Webkul\Velocity\Repositories\ContentRepository')->getAllContents()) }}">

        {{-- this is default content if js is not loaded --}}
        <ul type="none" class="no-margin">
        </ul>

    </right-side-header>-->
</div>