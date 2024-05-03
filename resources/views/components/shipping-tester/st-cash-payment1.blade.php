<div class="">
    @if (empty($stDetail))
    <x-shipping-tester.error.msg-error :msg="'ไม่ได้กำหนดรายละเอียด'" />
    @else
    <div class="bg-main-color text-white text-center py-3 rounded-md">
        <label>รูปแบบการชำระเงิน : เงินสด</label>
    </div>
    <div class="py-3 text-sm text-main-color font-black px-4">
        <label>ใบเสร็จรับเงิน</label>
    </div>

    <div class="flex flex-row py-3 px-4">
        <div class="basis-1/2">
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
        </div>
    </div>
    <div class="flex-1 py-3">
        @switch($stDetail['status']['id'])
        @case(1)
        <button wire:click="openModal" class="w-full py-3 bg-pastel-800 text-white rounded-full text-center hover:bg-tomato">สร้างใบส่งสินค้า</button>
        <x-shipping-tester.modal.modal-status1 :isOpen="$isOpen" />
        @break
        @case(2)
        <button class="w-full py-3 bg-pastel-800 text-white rounded-full text-center hover:bg-tomato">ดำเนินการจัดส่งแล้ว</button>
        @break
        @case(3)
        <button class="w-full py-3 bg-pastel-800 text-white rounded-full text-center hover:bg-tomato">บันทึก</button>
        @break
        @default
        <button class="w-full py-3 bg-pastel-800 text-white rounded-full text-center hover:bg-tomato">จัดส่งอีกครั้ง</button>
        @endswitch
    </div>
    @endif
</div>

