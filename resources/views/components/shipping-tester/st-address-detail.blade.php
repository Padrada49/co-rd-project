<div>

    <div class="flex flex-col w-full my-4 px-4">
        @if (empty($stDetail))
        <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายละเอียด'" />
        @else
        <div class="flex w-full gap-4">
            <div class="basis-full">
                <div class="flex">
                    <div class="st-detail1 basis-1/3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path>
                        </svg>
                        ชื่อ-สกุลผู้รับ :
                    </div>
                    <div class="st-detail1">
                        {{ $stDetail['address']['name'] ?? '-' }}
                    </div>
                </div>
                <div class="flex">
                    <div class="st-detail1 basis-1/3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
                        </svg>
                        ที่อยู่ผู้รับ :
                    </div>
                    <div class="st-detail1">
                        {{ $stDetail['address']['addr'] ?? '-' }}
                    </div>
                </div>
                <div class="flex">
                    <div class="st-detail1 basis-1/3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path>
                        </svg>
                        เบอร์โทรศัพท์ :
                    </div>
                    <div class="st-detail1">
                        {{ $stDetail['address']['tel'] ?? '-' }}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row py-4">
            <form class="basis-5/6">
                <label for="maps" class="mb-2 text-xs font-medium text-gray-900 sr-only dark:text-white">Link Google Maps</label>
                <div class="relative">
                    <input type="text" id="maps" class="block w-full p-2 ps-4 text-xs text-gray-500 border border-gray-300 rounded-full bg-gray-50 focus:ring-gray-300 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-gray-300 dark:focus:border-gray-600" placeholder="Link Google Maps" value="{{ $stDetail['address']['googleMaps'] ?? '-' }}" required />
                </div>
            </form>

            <div class="basis-1/6 filter-options space-x-3 flex justify-end ml-2">
                <i class='bx bx-slider-alt text-2xl text-main-color'></i>
                <i class='bx bx-upload text-2xl text-main-color'></i>
            </div>

        </div>
        @endif
    </div>
</div>
