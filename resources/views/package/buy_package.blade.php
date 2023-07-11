@extends('layouts.app')
@section('title')
    شراء باقة
@endsection
@section('content')
<div class=" bg-body mt-16 py-8  px-6 md:px-12">

    <!-- <a href="index.html" class=" text-md text-primaryTextColor underline underline-offset-4 ">الرئيسية</a> -->
    <!-- <h2 class="text-gray-800  text-lg md:text-2xl my-4">ميثاق الاخلاق المهنية</h2> -->
    <form x-data="{activeType:'payment_card'}" class="bg-white py-8 md:py-12 px-8 md:px-20 mt-4 text-smd max-w-screen-lg mx-auto" id="buy_offer_form">
      <h2 class="text-primaryTextColor text-center  text-lg md:text-2xl  mb-10">شراء الباقة</h2>

      <div class="header  bg-body flex justify-start items-center w-full border">
        <div @click="activeType='payment_card'" class="header-tab-item "  :class="activeType=='payment_card' && 'active'">
          <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="5" width="18" height="14" rx="3" />  <line x1="3" y1="10" x2="21" y2="10" />  <line x1="7" y1="15" x2="7.01" y2="15" />  <line x1="11" y1="15" x2="13" y2="15" /></svg>
          <span>بطاقة ائتمانية</span>
        </div>
        <div @click="activeType='paypal'" class="header-tab-item " :class="activeType=='paypal' && 'active'">
          <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 13l2.538-.003c2.46 0 4.962-2.497 4.962-4.997 0-3-1.89-5-4.962-5H7c-.5 0-1 .5-1 1L4 18c0 .5.5 1 1 1h2.846L9 14c.089-.564.43-1 1-1zm7.467-5.837C19.204 8.153 20 10 20 12c0 2.467-2.54 4.505-5 4.505h.021-2.629l-.576 3.65a.998.998 0 01-.988.844l-2.712-.002a.5.5 0 01-.494-.578L7.846 19" /></svg>
          <span>PayPal</span>
        </div>
        <div @click="activeType='check'" class="header-tab-item " :class="activeType=='check' && 'active'">
          <svg class="h-5 w-5 text-gray-700"   width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 3L20 12a1.5 1.5 0 0 1 0 2L14 20a1.5 1.5 0 0 1 -2 0L3 11v-4a4 4 0 0 1 4 -4h4" />  <circle cx="9" cy="9" r="2" /></svg>
          <span>قسيمة</span>
        </div>
      </div>
      <div class="body border border-t-0">
        <div  x-show="activeType=='payment_card'" class=" text-gray-500 " >
          <div class="form-group">
            <label for="card-element">Credit Card</label>
            <div id="card-element">
              <!-- a Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display form errors -->
          <div id="card-errors" role="alert"></div>
        </div>

        <div class="spacer"></div>

        <button type="submit" class="btn btn-success">Submit Payment</button>
          <div class="w-ful  p-5  bg-white rounded">
            <div class="w-full md:w-1/2">
              <label for="withdrow-ballance" class=" my-2 flex">
                <span>المبلغ </span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <div class="flex itmes-center">
                <input type="number" class="white-input-theme w-10/12" id="withdrow-ballance" type="button" value="">
                <span class="bg-body w-2/12 text-sm text-center leading-[2rem] border-l border-y border-gray-400 pt-1">الأورو</span>

              </div>

            </div>
            <div class="flex justify-start items-center gap-3 mt-5">
              <div class=" mb-5 md:mb-0 w-full md:w-1/2">
                <label for="card_holder_name" class=" my-2 flex" style="margin-bottom: 11px;">
                  <span>الاسم الكامل على البطاقة</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="text" class="white-input-theme w-10/12" id="card_holder_name"  value="">
                </div>
              </div>
              <div class=" mb-5 md:mb-0 w-full md:w-1/2">
                <label for="card-number" class=" my-2 flex" style="margin-bottom: 11px;">
                  <span>رقم البطاقة</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="number" class="white-input-theme w-10/12" id="card-number" placeholder="0000 0000 0000 0000"  value="">
                </div>
              </div>
            </div>
            <div class="flex justify-start items-center gap-3 mt-5">
              <div class=" mb-5 md:mb-0 w-full md:w-1/2">
                <label for="card_expiration" class=" my-2 flex" style="margin-bottom: 11px;">
                  <span>تاريخ انتهاء الصلاحية</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="text" class="white-input-theme w-10/12" id="card_expiration" placeholder="MM / YY"  value="">
                </div>
              </div>
              <div class=" mb-5 md:mb-0 w-full md:w-1/2">
                <label for="card-cvv" class=" my-2 flex" style="margin-bottom: 11px;">
                  <span>CVC/CVV</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="number" class="white-input-theme w-10/12" id="card-cvv" placeholder="000" value="">
                </div>
              </div>
            </div>
            <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
              <input type="checkbox" name="save_card" id="save_card" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
              <label for="save_card">احفظ البطاقة لتسهيل الدفع في المستقبل       </label>
            </div>
            <hr class="my-8 border">
            <h6 class=" my-4 text-base mt-7 text-gray-900">
              المبلغ النهائي بعد إضافة رسوم إجرائية بنسبة 2.75% على عملية الدفع 
              <span class="block text-center my-7 text-lg md:text-[1.8rem] leading-8 text-green-600">102.2 €</span>
            </h6>
            <span class="block mb-7 text-[13px]">*رسوم الدفع تقتطعها البوابات الالكترونية مثل PayPal والبطاقات الإئتمانية</span>
            <div class="flex justify-between items-center gap border-t mt-12 py-5 ">
              <button type="submit" class="w-auto md-button bg-green-600 hover:bg-green-500">
                شراء الباقة
              </button>
              <h6 class="text-sm text-green-700 flex  items-center justify-start gap-2">
                <span class="rounded-full bg-green-600 p-1">
                  <svg class="h-4 w-4 "  viewBox="0 0 24 24"  fill="white"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg>
                  
                </span>
                <span>
                  ادفع بأمان، اتصالك مشفر 
                </span>
              </h6>
            </div>
          </div>   
        </div>
        <div  x-show="activeType=='paypal'" class=" text-gray-500 " >
          <div class="w-ful  p-5  bg-white rounded">
            <div class="w-full md:w-1/2">
              <label for="withdrow-ballance" class=" my-2 flex">
                <span>المبلغ </span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <div class="flex itmes-center">
                <input type="number" class="white-input-theme w-10/12" id="withdrow-ballance" type="button" value="">
                <span class="bg-body w-2/12 text-sm text-center leading-[2rem] border-l border-y border-gray-400 pt-1">الأورو</span>

              </div>

            </div>
            <hr class="my-8 border">
            <h6 class=" my-4 text-base mt-7 text-gray-900">
              المبلغ النهائي بعد إضافة رسوم إجرائية بنسبة 2.75% على عملية الدفع 
              <span class="block text-center my-7 text-lg md:text-[1.8rem] leading-8 text-green-600 ">10.2 €</span>
            </h6>
            <span class="block mb-7 text-[13px]">*رسوم الدفع تقتطعها البوابات الالكترونية مثل PayPal والبطاقات الإئتمانية</span>
            <div class="flex justify-between items-center gap border-t mt-12 py-5 ">
              <button type="submit" class="w-auto md-button bg-green-600 hover:bg-green-500">
                شراء الباقة
              </button>
              <h6 class="text-sm text-green-700 flex  items-center justify-start gap-2">
                <span class="rounded-full bg-green-600 p-1">
                  <svg class="h-4 w-4 "  viewBox="0 0 24 24"  fill="white"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg>
                  
                </span>
                <span>
                  ادفع بأمان، اتصالك مشفر 
                </span>
              </h6>
            </div>
          </div>   
        </div>
        <div  x-show="activeType=='check'" class=" text-gray-500 " >
          <div class="w-ful  p-5  bg-white rounded">
            <div class="w-full md:w-1/2">
              <label for="withdrow-ballance" class=" my-2 flex">
                <span>رمز القسيمة </span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <div class="flex itmes-center">
                <input type="text" class="white-input-theme w-10/12" id="check-code" type="button" value="">
                <span class="bg-body w-2/12 text-sm text-center leading-[2rem] border-l border-y border-gray-400 pt-1">الأورو</span>

              </div>

            </div>
            <div class="flex justify-between items-center gap border-t mt-12 py-5 ">
              <button type="submit" class="w-auto md-button bg-green-600 hover:bg-green-500">
                شراء الباقة
              </button>
              <h6 class="text-sm text-green-700 flex  items-center justify-start gap-2">
                <span class="rounded-full bg-green-600 p-1">
                  <svg class="h-4 w-4 "  viewBox="0 0 24 24"  fill="white"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />  <path d="M7 11V7a5 5 0 0 1 10 0v4" /></svg>
                  
                </span>
                <span>
                  ادفع بأمان، اتصالك مشفر 
                </span>
              </h6>
            </div>
          </div>   
        </div>
      </div>
    </form>
    
  </div>
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
{{-- <script>
  const stripe = Stripe("pk_test_51NQVuVK4VEEmdMbdZMeWrx4DW9EOEgmuExsImCN41uLXVflp3kVFi1epYHJqbPvq9CgJLkdpWQ6wYzg3MzQCBJ8P00ntKFt7ch");

  const elements = stripe.elements();
  const cardElement = elements.create('card');

  cardElement.mount('#card-element');
</script> --}}
<script>
  (function(){
      // Create a Stripe client
      var stripe = Stripe('pk_test_51NQVuVK4VEEmdMbdZMeWrx4DW9EOEgmuExsImCN41uLXVflp3kVFi1epYHJqbPvq9CgJLkdpWQ6wYzg3MzQCBJ8P00ntKFt7ch');

      // Create an instance of Elements
      var elements = stripe.elements();

      // Custom styling can be passed to options when creating an Element.
      // (Note that this demo uses a wider set of styles than the guide below.)
      var style = {
        base: {
          color: '#32325d',
          lineHeight: '18px',
          fontFamily: '"Raleway", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
          '::placeholder': {
            color: '#aab7c4'
          }
        },
        invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
        }
      };

      // Create an instance of the card Element
      var card = elements.create('card', {
          style: style,
          hidePostalCode: true
      });

      // Add an instance of the card Element into the `card-element` <div>
      card.mount('#card-element');

      // Handle real-time validation errors from the card Element.
      card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });

      // Handle form submission
      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        var options = {
          name: document.getElementById('name_on_card').value,
        }

        stripe.createToken(card, options).then(function(result) {
          if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
          } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
          }
        });
      });

      function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
      }
  })();
</script>
@endsection