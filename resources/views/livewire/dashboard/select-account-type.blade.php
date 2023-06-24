@section('title',trans('frontend.choose_account_type'))

<div class="w-full mt-4">
    <div class="bg-white rounded ">

        <!-- statistics -->
        <div class="w-full md:flex justify-center gap-2 p-6">
            <div class="w-full md:w-1/3 flex flex-col items-center justify-start mt-8">
                <form class="mb-3 flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120 }">
                    <div class="w-fit mx-auto relative">
                        <a href="" class="">
                            <img src="assets/images/hero/hero-image.jpg"
                                class="mx-auto h-28 w-28 rounded-full shadow-lg border" alt="">

                        </a>
                        <label for="profile-picture">
                            <span
                                class="cursor-pointer absolute bottom-[1rem] left-[-1rem]  rounded text-white text-[14px] p-1 border bg-primaryTextColor hover:bg-primaryTextColorDarken">
                                تغيير الصورة
                            </span></label>
                        <input type="file" name="profile_picture" id="profile-picture" accept="image/*" class="hidden">
                    </div>
                </form>
            </div>
            <!-- progress bars -->
            <div class="w-full md:w-2/3 ">
                <form wire:submit.prevent="save">
                    {{ $this->form }}
                 
                    <x-submit-button target="save" :title="trans('forms.save_changes')" extraClasses="" />
                </form>
            </div>
        </div>
    </div>
</div>