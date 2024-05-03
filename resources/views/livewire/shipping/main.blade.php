<div>

    <div class="flex flex-row gap-3">
        <div class="flex-auto w-64 ">
            <x-shipping-tester.st-status-menu :statusTab="$statusTab" />
            <x-shipping-tester.st-filter />

            <!-- Tab สำหรับเลือกและเปลี่ยนหน้าได้ (ส่งค่า+if else)-->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button wire:click="changeTab(1)" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 focus:text-main-color focus:border-main-color focus:font-bold active:text-main-color active:border-main-color active:font-bold {{ isset($tabType) && $tabType == 1 ? 'font-bold text-main-color  border-b-2 border-main-color' : '' }} " id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">ทั้งหมด (<span> {{ 40 }} </span>)</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button wire:click="changeTab(2)" class="inline-block p-4 text-gray-900 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 focus:text-main-color focus:border-main-color focus:font-bold active:text-main-color active:border-main-color active:font-bold {{ isset($tabType) && $tabType == 2 ? 'font-bold text-main-color  border-b-2 border-main-color' : '' }}" id="inno-tab" data-tabs-target="#inno" type="button" role="tab" aria-controls="inno" aria-selected="false">Organic Inno (<span> {{ 20 }} </span>)</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button wire:click="changeTab(3)" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 focus:text-main-color focus:border-main-color focus:font-bold active:text-main-color active:border-main-color active:font-bold {{ isset($tabType) && $tabType == 3 ? 'font-bold text-main-color  border-b-2 border-main-color' : '' }}" id="cosme-tab" data-tabs-target="#cosme" type="button" role="tab" aria-controls="cosme" aria-selected="false">Organic Cosme (<span> {{ 20 }} </span>)</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                @switch($tabType)
                @case(2)
                <div class="" id="inno" role="tabpanel" aria-labelledby="inno-tab">
                    <x-shipping-tester.st-list :stList="$st_list" :stDetail="$stDetail" :comType="1" :statusTab="$statusTab" />
                </div>
                @break
                @case(3)
                <div class="" id="cosme" role="tabpanel" aria-labelledby="cosme-tab">
                    <x-shipping-tester.st-list :stList="$st_list" :stDetail="$stDetail" :comType="2" :statusTab="$statusTab" />
                </div>
                @break
                @default
                <div class="" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <x-shipping-tester.st-list :stList="$st_list" :stDetail="$stDetail" :comType="0" :statusTab="$statusTab" />
                </div>
                @endswitch
            </div>
        </div>




        <div class=" flex-auto w-32 {{ !empty($stDetail)  ? 'lg:flex' : 'hidden' }} ">
            <ul class="basis-full p-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-2xl dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{-- title --}}
                <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-main-color font-black text-sm">
                    <div class="flex flex-row justify-start content-center">
                        <svg class="fill-main-color w-6 h-6" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.000308002 8.97025C0.000308002 6.39248 0.000308002 3.81471 0.000308002 1.23694C0.00108763 0.372372 0.357378 0.00758579 1.25005 0.0068274C6.19992 0.00151866 11.149 0.0068274 16.0981 1.88293e-06C16.7249 -0.000756508 17.1607 0.227519 17.4289 0.793278C17.7338 1.43488 18.0893 2.05372 18.3933 2.69532C18.5181 2.96 18.6896 3.02977 18.9679 3.02826C20.4359 3.0184 21.904 3.02219 23.3712 3.02446C24.3123 3.02598 24.7605 3.40366 24.6724 4.31524C24.561 5.46572 25.1394 6.38793 25.548 7.37232C25.9027 8.22702 26.2988 9.0658 26.6558 9.91899C26.804 10.2724 27.0254 10.5356 27.3458 10.7563C28.0553 11.2462 28.739 11.771 29.4414 12.2708C29.8289 12.5461 30.009 12.8889 29.9997 13.3674C29.9778 14.5171 29.995 15.6668 29.9911 16.8173C29.9887 17.5431 29.6067 17.9541 28.8684 17.9109C28.2276 17.8738 27.8611 18.0353 27.4947 18.6223C26.2551 20.61 23.2216 20.4007 22.1316 18.2924C21.9843 18.008 21.8167 17.9185 21.5056 17.9185C17.5435 17.9268 13.5814 17.9261 9.61937 17.9185C9.32701 17.9185 9.16329 17.9905 9.01984 18.2651C8.44291 19.3738 7.50034 19.9851 6.21395 19.9828C4.91119 19.9806 3.96784 19.3572 3.3878 18.2317C3.27085 18.005 3.13598 17.9139 2.88026 17.9193C2.28306 17.9314 1.68509 17.9284 1.08789 17.9208C0.3948 17.9124 0.00342652 17.531 0.00264689 16.8552C-0.00125126 14.2274 0.000308002 11.5988 0.000308002 8.97025ZM21.9757 10.5447V10.5462C22.7803 10.5462 23.5849 10.55 24.3894 10.5447C24.8923 10.5416 24.9937 10.393 24.791 9.93492C24.2538 8.7177 23.7041 7.50579 23.167 6.28782C23.05 6.02314 22.8738 5.9018 22.5706 5.90483C21.5719 5.91469 20.5724 5.91697 19.5729 5.90407C19.2111 5.89952 19.056 6.02617 19.0599 6.38944C19.0716 7.62638 19.0708 8.86331 19.0599 10.1002C19.0568 10.4286 19.194 10.5515 19.523 10.5477C20.34 10.5378 21.1579 10.5447 21.9757 10.5447ZM6.21551 17.9761C6.82674 17.9761 7.30543 17.5173 7.30933 16.9273C7.31245 16.3509 6.81271 15.8693 6.21317 15.8716C5.61598 15.8739 5.11701 16.3585 5.12247 16.9303C5.12871 17.5287 5.59571 17.9754 6.21551 17.9754V17.9761ZM25.9924 16.9205C25.9869 16.3213 25.5129 15.864 24.9063 15.8724C24.299 15.8807 23.8289 16.3464 23.8297 16.9387C23.8304 17.5279 24.3076 17.9777 24.9274 17.9754C25.5488 17.9731 25.9978 17.5279 25.9924 16.9197V16.9205Z" />
                        </svg>

                        <label class="ml-2">ข้อมูลการส่งเทสเตอร์ </label>
                    </div>
                </li>
                {{-- ข้อมูล --}}
                <x-shipping-tester.st-data-detail :stList="$st_list" :stDetail="$stDetail" />
                <x-shipping-tester.st-address-detail :stList="$st_list" :stDetail="$stDetail" />
                <x-shipping-tester.st-cash-payment1 :stList="$st_list" :stDetail="$stDetail" :isOpen="$isOpen" />
            </ul>
        </div>
    </div>
</div>
