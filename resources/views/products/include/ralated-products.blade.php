

<div class="col-sm col-md-6 col-lg ftco-animate">
    <div class="product">
        <a href="{{route('catalog.product', ['productModel' => $product])}}" class="img-prod">
            <img class="img-fluid" src="/images/product-1.jpg" alt="Colorlib Template">
            <span class="status">30%</span>
            <div class="overlay"></div>
        </a>
        <div class="text py-3 px-3">
            <h3><a href="{{route('catalog.product', ['productModel' => $product])}}">{{$product->name}}</a></h3>
            <div class="d-flex">
                <div class="pricing">
                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                            class="price-sale">${{$product->price}}</span></p>
                </div>
                <div class="rating">
                    <p class="text-right">
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                </div>
            </div>
            <form>
            <p class="bottom-area d-flex px-3">
                <a href="{{ route('cart.addCart', ['productModel' => $product, 'quantity' => 1]) }}" class="add-to-cart text-center py-2 mr-1">
                    <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                </a>
                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
            </p>
            </form>
        </div>
    </div>
</div>
