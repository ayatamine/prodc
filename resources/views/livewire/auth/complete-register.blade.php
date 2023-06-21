    <!--main content  -->
    <div class=" bg-body p-6 py-16 md:py-16 px-8">

        <div class=" my-3 bg-white rounded shadow-lg overflow-hidden mx-auto max-w-5xl lg:max-w-7xl">
           
            <!-- component -->
            <!-- This is an example component -->
            <div class="" >
              <div x-data="app()" x-cloak>
                <div class="max-w-4xl mx-auto px-4 py-10 pb-0">
  
                  <div x-show.transition="step === 'complete'">
                    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-center">
                      <div>
                        <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
  
                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">تم التقديم</h2>
  
                        <div class="text-gray-600 mb-8">
                          شكرا لإضافة طلبك سيتم نشره بمجرد الموافقة
                        </div>
  
                        <a href="dashboard.html"
                          class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                        >الرجوع للرئيسية</a>
                      </div>
                    </div>
                  </div>
  
                  <div x-show.transition="step != 'complete'">	
                    <!-- Top Navigation -->
                    <div class="border-b-2 py-4">
                      <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`المرحلة: ${step} من 3`"></div>
                      <div class="flex flex-col md:flex-row md:items-center md:justify-between bg-white p-4">
                        <div class="flex-1">
                          <div x-show="step === 1">
                            <div class="text-lg font-bold text-gray-700 leading-tight">نوع الحساب</div>
                          </div>
                          
                          <div x-show="step === 2">
                            <div class="text-lg font-bold text-gray-700 leading-tight">المعلومات الأساسية</div>
                          </div>
  
                          <div x-show="step === 3">
                            <div class="text-lg font-bold text-gray-700 leading-tight">ممثل الشركة</div>
                          </div>
                                        
                        </div>
  
                        <div class="flex items-center md:w-64">
                          <div class="w-full bg-white rounded-full mr-2">
                            <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white" :style="'width: '+ parseInt(step / 3 * 100) +'%'"></div>
                          </div>
                          <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
                        </div>
                      </div>
                    </div>
                    <!-- /Top Navigation -->
  
                    <!-- Step Content -->
                    <div class="py-10 px-4 bg-white">	
  
                      <div class="w-full p-8 " x-show="step === 1">
                                  <!-- account type -->
                                  <fieldset class="mt-4">
                                    <label class="block text-gray-700 text-base md:text-lg font-bold mb-7">يرجى اختيار نوع الحساب للاستمرار </label>
                            
                                    <div class="flex items-center mb-4">
                                        <input id="account-option-1" type="radio" name="account_type" value="company" class="h-4 w-4 border-gray-300 " aria-labelledby="account-option-1" aria-describedby="account-option-1" checked="">
                                        <label for="account-option-1" class="text-smd font-medium text-gray-900 mr-2 ltr:ml-2 block">
                                         شركة أكثر من واحد
                                        </label>
                                    </div>
                            
                                    <div class="flex items-center mb-4">
                                        <input id="account-option-2" type="radio" name="account_type" value="company_single" class="h-4 w-4 border-gray-300 " aria-labelledby="account-option-2" aria-describedby="account-option-2">
                                        <label for="account-option-2" class="text-smd font-medium text-gray-900 mr-2 ltr:ml-2 block">
                                        شركة صغيرة - شخص واحد
                                        </label>
                                    </div>
                            
                                    <div class="flex items-center mb-4">
                                        <input id="account-option-3" type="radio" name="account_type" value="freelancer" class="h-4 w-4 border-gray-300 " aria-labelledby="account-option-3" aria-describedby="account-option-3">
                                        <label for="account-option-3" class="text-smd font-medium text-gray-900 mr-2 ltr:ml-2 block">
                                        محترف حر 
                                        </label>
                                    </div>
                            
                                </fieldset>             
                                    
                      </div>
                      <div class="w-full p-8 " x-show="step === 2">
                    
                        <!-- name -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">اسم الشركة</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" >
                        </div>
                        <!-- country -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">البلد</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" step="0.00">
                              <option value="0">فرنسا</option>
                              <option value="1">سويسرا</option>
                              <option value="2"> الدنمارك</option>
                            </select>
                        </div>
                          <!-- name -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">عنوان  الشركة</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" >
                        </div>
                          <!-- name -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">هاتف  الشركة</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" >
                        </div>
                          <!-- name -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">إيميل الشركة</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" >
                        </div>
                        <!-- price type -->
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">الميدان / الاختصاص</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" step="0.00">
                              <option value="0">متاح</option>
                              <option value="1">غير متاح</option>
                            </select>
                        </div>
                        <div class="mt-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2">موقع الانترنت</label>
                          <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" >
                        </div>
                        
                      </div>
                      <div class="w-full p-8 " x-show="step === 3">
                    
                         <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                          <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">اسم ممثل الشركة</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" >
                          </div>
                          <!-- phone -->
                          <div class="mt-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2">رقم هاتف ممثل الشركة</label>
                              <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" placeholder="">
                          </div>
                         </div>
                          <!-- email -->
                          <div class="mt-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2">إيميل ممثل الشركة</label>
                              <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" placeholder="example@gmail.com">
                          </div>
                          <!-- job -->
                          <div class="mt-4">
                              <label class="block text-gray-700 text-sm font-bold mb-2">الوظيفة</label>
                              <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" placeholder="">
                          </div>
                          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
                            <input type="checkbox" name="privacy" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
                            <label for="">قرأت وأوافق على 
                              <a href="conditions.html" class="text-primaryTextColorDarken underline underline-offset-4">شروط الاستخدام</a>
                              و
                              <a href="privacy.html" class="text-primaryTextColorDarken underline underline-offset-4">سياسة الخصوصية</a>
          
                            </label>
                          </div>
                        
                      </div>
                    </div>
                    <!-- / Step Content -->
                  </div>
                </div>
  
                <!-- Bottom Navigation -->	
                <div class=" pb-5 bg-white shadow-md" x-show="step != 'complete'">
                  <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                      <div class="">
                        <button
                          x-show="step > 1"
                          @click="step--"
                          class="w-32 focus:outline-none py-2 px-3 rounded shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                        >رجوع</button>
                      </div>
  
                      <div class="">
                        <button
                          x-show="step < 3"
                          @click="step++"
                          class="w-32 focus:outline-none border border-transparent py-2 px-3 rounded shadow-sm text-center text-white bg-primaryTextColor hover:bg-primaryTextColorDarken font-medium" 
                        >متابعة</button>
  
                        <button
                          @click="step = 'complete'"
                          x-show="step === 3"
                          class="w-32 focus:outline-none border border-transparent py-2 px-3 rounded shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium" 
                        >تأكيد</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / Bottom Navigation  -->	
              </div>
            </div>
        </div>
        <!-- <p class="my-6 text-center">جميع الحقوق محفوظة موقع المحترف القوي الأمين</p> -->
      </div>