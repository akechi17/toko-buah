@extends('layout.home')
@section('title', 'Checkout')
@section('content')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Checkout</strong>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">Billing Details</h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group">
            <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
            <select id="c_country" class="form-control">
              <option value="1">Select a country</option>
              <option value="2">bangladesh</option>
              <option value="3">Algeria</option>
              <option value="4">Afghanistan</option>
              <option value="5">Ghana</option>
              <option value="6">Albania</option>
              <option value="7">Bahrain</option>
              <option value="8">Colombia</option>
              <option value="9">Dominican Republic</option>
            </select>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="c_fname">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="c_lname">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_companyname" class="text-black">Company Name </label>
              <input type="text" class="form-control" id="c_companyname" name="c_companyname">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_state_country" name="c_state_country">
            </div>
            <div class="col-md-6">
              <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-6">
              <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_email_address" name="c_email_address">
            </div>
            <div class="col-md-6">
              <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
            </div>
          </div>

          <div class="form-group">
            <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account"
              role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1"
                id="c_create_account"> Create an account?</label>
            <div class="collapse" id="create_an_account">
              <div class="py-2">
                <p class="mb-3">Create an account by entering the information below. If you are a returning customer
                  please login at the top of the page.</p>
                <div class="form-group">
                  <label for="c_account_password" class="text-black">Account Password</label>
                  <input type="email" class="form-control" id="c_account_password" name="c_account_password"
                    placeholder="">
                </div>
              </div>
            </div>
          </div>


          <div class="form-group">
            <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
              href="#ship_different_address" role="button" aria-expanded="false"
              aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
              Ship To A Different Address?</label>
            <div class="collapse" id="ship_different_address">
              <div class="py-2">

                <div class="form-group">
                  <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                  <select id="c_diff_country" class="form-control">
                    <option value="1">Select a country</option>
                    <option value="2">bangladesh</option>
                    <option value="3">Algeria</option>
                    <option value="4">Afghanistan</option>
                    <option value="5">Ghana</option>
                    <option value="6">Albania</option>
                    <option value="7">Bahrain</option>
                    <option value="8">Colombia</option>
                    <option value="9">Dominican Republic</option>
                  </select>
                </div>


                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_diff_companyname" class="text-black">Company Name </label>
                    <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_address" name="c_diff_address"
                      placeholder="Street address">
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_diff_state_country" class="text-black">State / Country <span
                        class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                        class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                  </div>
                </div>

                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_diff_email_address" class="text-black">Email Address <span
                        class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone"
                      placeholder="Phone Number">
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="c_order_notes" class="text-black">Order Notes</label>
            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
              placeholder="Write your notes here..."></textarea>
          </div>

        </div>
      </div>
      <div class="col-md-6">

        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Your Order</h2>
            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>Product</th>
                  <th>Total</th>
                </thead>
                <tbody>
                  @php
                    $checkoutTotal = 0;
                  @endphp
                  @foreach ($carts as $cart)
                  @php
                    $checkoutTotal += $cart->total;
                  @endphp
                  <tr>
                    <td>{{ $cart->product->product_name }} <strong class="mx-2">x</strong> {{ $cart->jumlah }}</td>
                    <td>{{ "Rp ". number_format($cart->total) }}</td>
                  </tr>
                  @endforeach
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                    <td class="text-black font-weight-bold"><strong>{{ "Rp ". number_format($checkoutTotal) }}</strong></td>
                  </tr>
                </tbody>
              </table>

              <div class="border mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                    aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                <div class="collapse" id="collapsebank">
                  <div class="py-2 px-4">
                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                      payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                </div>
              </div>

              <div class="border mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                    aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                <div class="collapse" id="collapsecheque">
                  <div class="py-2 px-4">
                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                      payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                </div>
              </div>

              <div class="border mb-5">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                    aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                <div class="collapse" id="collapsepaypal">
                  <div class="py-2 px-4">
                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                      payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">Place
                  Order</button>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- </form> -->
  </div>
</div>



{{-- <section class="section-wrap checkout pb-70">
  <div class="container relative">
    <div class="row">

      <div class="ecommerce col-xs-12">
        <form name="checkout" class="checkout ecommerce-checkout row" method="POST" action="/payments">
          @csrf
          <input type="hidden" name="id_order" value="{{ $orders->id }}">
          <div class="col-md-8" id="customer_details">
            <div>
              <h2 class="heading uppercase bottom-line full-grey mb-30">billing address</h2>

              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">Provinsi
                  <abbr class="required" title="required">*</abbr>
                </label>
                <select name="provinsi" id="provinsi" class="country_to_state provinsi"   rel="calc_shipping_state">
                  <option value="">Pilih Provinsi</option>
                  @foreach($provinsi->rajaongkir->results as $provinsi)
                  <option value="{{ $provinsi->province_id }}">{{ $provinsi->province }}</option>
                  @endforeach
                </select>
              </p>
              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">Kota
                  <abbr class="required" title="required">*</abbr>
                </label>
                <select name="kabupaten" id="kota" class="country_to_state kota" rel="calc_shipping_state"></select>
              </p>
              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">Detail Alamat
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder value name="detail_alamat" id="billing_first_name">
              </p>
              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">Atas Nama
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder value name="atas_nama" id="billing_first_name">
              </p>
              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">No Rekening
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder value name="no_rekening" id="billing_first_name">
              </p>
              <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                <label for="billing_first_name">Nominal Transfer
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder value name="jumlah" id="billing_first_name">
              </p>
              <div class="clear"></div>

            </div>
            <div class="clear"></div>

          </div> <!-- end col -->

          <!-- Your Order -->
          <div class="col-md-4">
            <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
              <h2 class="heading uppercase bottom-line full-grey">Your Order</h2>
              <table class="table shop_table ecommerce-checkout-review-order-table">
                <tbody>
                  <tr class="order-total">
                    <th><strong>Order Total</strong></th>
                    <td>
                      <strong><span class="amount">Rp. {{ number_format($orders->grand_total) }}</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

              <div id="payment" class="ecommerce-checkout-payment">
                <h2 class="heading uppercase bottom-line full-grey">Payment Method</h2>
                <ul class="payment_methods methods">

                  <li class="payment_method_bacs">
                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                    <label for="payment_method_bacs">Direct Bank Transfer</label>
                    <div class="payment_box payment_method_bacs">
                      <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
                      <p>Atas Nama : {{ $about->atas_nama }}</p>
                      <p>No Rekening : {{ $about->no_rekening }}</p>
                    </div>
                  </li>
                </ul>
                <div class="form-row place-order">
                  <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg btn-dark" id="place_order" value="Place order">
                </div>
              </div>
            </div>
          </div> <!-- end order review -->
        </form>

      </div> <!-- end ecommerce -->

    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end checkout --> --}}
@endsection