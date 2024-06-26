@extends('frontend.partial-frontend.app')

@section('content')
<div class="page-title page-title-fixed">
    <h3>Keranjang Belanja</h3>
</div>
<div class="page-title-clear"></div>
<div class="page-content">
        
    <div class="card card-style">
        <div class="content">
            <p class="font-600 color-highlight mb-n1">Your Cart</p>
            <h3>Order Details</h3>
            <h5 class="color-green-dark">
               Order ID #123456789011
            </h5>
            
            <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
                <thead>
                    <tr class="bg-red-dark">
                        <th scope="col" class="color-white py-3 font-14">Barang</th>
                        <th scope="col" class="color-white py-3 font-14">Item</th>
                        <th scope="col" class="color-white py-3 font-14">Harga</th>
                        <th scope="col" class="color-white py-3 font-14">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Apple</th>
                        <td class="">$500</td>
                        <td class="">$500</td>
                        <td class="">$500</td>
                    </tr>
                    <tr>
                        <th scope="row">Android</th>
                        <td class="">$400</td>
                        <td class="">$500</td>
                        <td class="">$500</td>
                    </tr>
                    <tr>
                        <th scope="row">Nope</th>
                        <td class="">$300</td>
                        <td class="">$500</td>
                        <td class="">$500</td>
                    </tr>
                </tbody>
                    <tr class="bg-yellow-dark">
                        <th colspan="3" scope="col" class="color-white py-3 font-14">Total</th>
                        <th scope="col" class="color-white py-3 font-14">$500</th>
                </thead>
            </table>
        </div>
    </div>
        
    <div class="card card-style">
        <div class="content">
            <p class="font-600 color-highlight mb-n1">Please select</p>
            <h3>Payment Type</h3>
            <p>
                Enter some information here for your payment gateway messages. This is just a demo page.
            </p>
            <div class="fac fac-radio fac-highlight"><span></span>
                <input id="box1-fac-radio" type="radio" name="rad" value="1">
                <label for="box1-fac-radio">PayPal</label>
            </div>
            <div class="fac fac-radio fac-highlight"><span></span>
                <input id="box2-fac-radio" type="radio" name="rad" value="1" checked>
                <label for="box2-fac-radio">Credit Card</label>
            </div>
            <div class="fac fac-radio fac-highlight"><span></span>
                <input id="box3-fac-radio" type="radio" name="rad" value="1">
                <label for="box3-fac-radio">Bank Transfer</label>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <p class="mb-n1 color-highlight font-600">Select your Image and</p>
            <h1>Upload Here</h1>
            <p>
                Upload an image and get all the data inside it placed nicely and with a preview of the image above it all.
            </p>
            <div class="file-data pb-5">
                <input type="file" id="file-upload" class="upload-file bg-highlight shadow-s rounded-s " accept="image/*">
                <p class="upload-file-text color-white">Upload Image</p>
            </div>
        </div>
    </div>
        
    <div class="card card-style">
        <div class="content">
            <p class="font-600 color-highlight mb-n1">Extra Information</p>
            <h3>Order Notes</h3>
            <p>
                Tell us if there's something you don't want us to forget
            </p>
            <div class="input-style has-borders input-style-always-active no-icon mb-4">
                <textarea id="form7" placeholder="" style="height:150px;"></textarea>
                <label for="form7" class="color-highlight">Enter your Message</label>
                <em class="mt-n3">(required)</em>
            </div>
        </div>
    </div>
        
                     
    <a href="#" class="close-menu btn btn-margins btn-full gradient-blue font-13 btn-l font-600 mt-3 rounded-sm">Place Order</a>

</div>
@endsection