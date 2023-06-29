<form class="w-full md:w-2/3 !font-Noto-Naskh" wire:submit.prevent="save">
    <!-- main form -->
    {{$this->form}}
    <x-submit-button target="save" :title="trans('forms.services.create')" extraClasses="!w-fit bg-success-500 hover:!bg-success-600"  />
    <!-- advanced form -->
    {{-- <div class="bg-white p-6 mt-8" x-data="addRemove()">
        <h2 class="text-lg flex items-center gap-2 cursor-pointer font-semibold"
            @click="isAdvancedForm =! isAdvancedForm">
            <span>{{trans('forms.services.other_questions')}}</span>
            <svg class="h-5 w-5" x-show="!isAdvancedForm" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <polyline points="6 9 12 15 18 9" />
            </svg>
            <svg class="h-5 w-5" x-show="isAdvancedForm" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <polyline points="6 15 12 9 18 15" />
            </svg>
        </h2>
        <div class="mt-3 py-2" x-show="isAdvancedForm">
            <div class="project-questions mb-5">
                <label for="project-questions" class=" my-2 flex">
                    <span>أسئلة تخص الخدمة المطلوبة</span>
                </label>
                <template x-for="(field, index) in questions" :key="field">
                    <div class="mb-3">
                        <input type="text" name="questions[]" class="white-input-theme"
                            placeholder="مثلا: ماهي اللغات التي تتقنها؟">
                        <div class="mt-2 flex justify-between items-center">
                            <!-- is required checkbox -->
                            <div class="flex items-center gap-2 text-sm">
                                <input type="checkbox" name="check_required[]"
                                    class="border-gray-300 rounded h-4 w-4">
                                <label for="">سؤال اجباري</label>
                            </div>
                            <!-- delete button -->
                            <a href="#" class="text-red-500 text-smd"
                                @click.prevent="removeField(field)">حذف</a>
                        </div>
                    </div>
                </template>
                <a href="#" @click.prevent="addNewField()" class="border p-2 px-3 text-sm table mt-6">إضافة
                    سؤال جديد</a>
            </div>
        </div>
    </div> --}}
    {{-- <div class="py-3 ">
        <!-- end of the form -->
        <button type="submit" class="md-button success-btn mt-8 ">إضافة الخدمة المطلوبة</button>
    </div> --}}

</form>