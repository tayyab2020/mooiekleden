@inject ('productViewHelper', 'Webkul\Product\Helpers\View')

{!! view_render_event('bagisto.shop.products.view.attributes.before', ['product' => $product]) !!}

<div style="display: flex;">
                                        
                                        <div class="col-lg-4">
                                        
                                            @if ($product->getTypeInstance()->showQuantityBox())
                                                <quantity-changer quantity-text="{{ __('shop::app.products.quantity') }}"></quantity-changer>
                                            @else
                                                <input type="hidden" name="quantity" value="1">
                                            @endif

                                        </div>

                                        <div style="display: flex;flex-flow: wrap;" class="col-lg-8">

                                            <div style="padding: 0;margin-bottom: 10px;" class="col-12 price">
                                                @include ('shop::products.price', ['product' => $product])

                                                @if (Webkul\Tax\Helpers\Tax::isTaxInclusive() && $product->getTypeInstance()->getTaxCategory())
                                                    <span>
                                                        {{ __('velocity::app.products.tax-inclusive') }}
                                                    </span>
                                                @endif
                                            </div>

                                            @if (count($product->getTypeInstance()->getCustomerGroupPricingOffers()) > 0)
                                                <div class="col-12">
                                                    @foreach ($product->getTypeInstance()->getCustomerGroupPricingOffers() as $offers)
                                                        {{ $offers }} </br>
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div class="product-actions">
                                                @if (core()->getConfigData('catalog.products.storefront.buy_now_button_display'))
                                                    @include ('shop::products.buy-now', [
                                                        'product' => $product,
                                                    ])
                                                @endif

                                                @include ('shop::products.add-to-cart', [
                                                    'form' => false,
                                                    'product' => $product,
                                                    'showCartIcon' => false,
                                                    'showCompare' => core()->getConfigData('general.content.shop.compare_option') == "1"
                                                                ? true : false,
                                                ])
                                            </div>

                                        </div>

                                    </div>

@if ($customAttributeValues = $productViewHelper->getAdditionalData($product))
    <accordian :title="'{{ __('shop::app.products.specification') }}'" :active="false">
        <div slot="header">
            {{ __('shop::app.products.specification') }}
            <i class="icon expand-icon right"></i>
        </div>

        <div slot="body">
            <table class="full-specifications">

                @foreach ($customAttributeValues as $attribute)
                    <tr>
                        @if ($attribute['label'])
                            <td>{{ $attribute['label'] }}</td>
                        @else
                            <td>{{ $attribute['admin_name'] }}</td>
                        @endif
                        @if ($attribute['type'] == 'file' && $attribute['value'])
                            <td>
                                <a  href="{{ route('shop.product.file.download', [$product->product_id, $attribute['id']])}}">
                                    <i class="icon sort-down-icon download"></i>
                                </a>
                            </td>
                        @elseif ($attribute['type'] == 'image' && $attribute['value'])
                            <td>
                                <a href="{{ route('shop.product.file.download', [$product->product_id, $attribute['id']])}}">
                                    <img src="{{ Storage::url($attribute['value']) }}" style="height: 20px; width: 20px;" alt=""/>
                                </a>
                            </td>
                        @else
                            <td>{{ $attribute['value'] }}</td>
                        @endif
                    </tr>
                @endforeach

            </table>
        </div>
    </accordian>
@endif

{!! view_render_event('bagisto.shop.products.view.attributes.after', ['product' => $product]) !!}