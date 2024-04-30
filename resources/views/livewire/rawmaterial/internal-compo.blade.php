<div class="">

    <!-- Two columns -->
    <div class="flex flex-row rm-main">
        <div class="rm-list flex-auto w-64">

            <div class="p-2 head">
                <div id="card-chr"
                    class="text-xs mt-1 inline-flex items-center justify-center bg-white  rounded-lg shadow px-4 py-2 text-main-color font-black transition duration-75 rounded-lg group hover:bg-main-color hover:text-white dark:text-white dark:hover:bg-main-color">
                    <span class="uppercase">0-9</span>
                </div>
                @for ($i = 0; $i < 26; $i++)
                    <div id="card-chr"
                        class="text-xs mt-1 inline-flex items-center justify-center bg-white  rounded-lg shadow px-4 py-2 text-main-color font-black transition duration-75 rounded-lg group hover:bg-main-color hover:text-white dark:text-white dark:hover:bg-main-color">
                        <span class="uppercase">{{ chr($i + 97) }}</span>
                    </div>
                @endfor
            </div>

            <x-raw-material.rm-filter />

            <x-raw-material.rm-list :rm-list="$rm_list" :type="$type" :rmDetail="$rmDetail" />


        </div>
        {{-- <div class="rm-detail basis-1/2 transition-transform delay-100 -translate-x-full sm:translate-x-0 hidden lg:flex"> --}}
        <div class="rm-detail flex-auto w-32 hidden  {{ !empty($rmDetail) ? 'lg:flex' : '' }} p-3">

            <ul
                class="w-full p-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-2xl dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{-- title สาร --}}
                <li
                    class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-main-color font-black text-sm">
                    <div class="flex flex-row justify-start content-center">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: #048482">
                            <path
                                d="m11.95 3.564.708.707-9.193 9.193C2.521 14.408 2 15.664 2 17s.521 2.592 1.465 3.535C4.408 21.479 5.664 22 7 22s2.592-.521 3.535-1.465l9.193-9.193.707.708 1.414-1.414-8.485-8.486-1.414 1.414zM9.121 19.121c-1.133 1.133-3.109 1.133-4.242 0C4.313 18.555 4 17.802 4 17s.313-1.555.879-2.121L5.758 14h8.484l-5.121 5.121zM16.242 12H7.758l6.314-6.314 4.242 4.242L16.242 12z">
                            </path>
                        </svg>
                        <label class="ml-2">ข้อมูลสาร </label>
                    </div>

                </li>
                {{-- ข้อมูลสาร --}}

                <x-raw-material.rm-detail-in :rmDetail="$rmDetail" />

                <x-raw-material.rm-persent-in :rmDetail="$rmDetail" />

                <x-raw-material.rm-sub-detail :rmDetail="$rmDetail" />

                <x-raw-material.rm-replacement :rmDetail="$rmDetail" />

                {{-- <x-rm-detail  :type="$type" />

                <x-rm-namely />

                <x-rm-functions />

                <x-rm-persent /> --}}
            </ul>


        </div>
    </div>

</div>
