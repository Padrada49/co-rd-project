<div>
    <div class="flex flex-row w-full">
    @if (empty($rmDetail))
            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายละเอียด'" />
        @else
        <div class="flex-col">
            <!-- <div h-50 w-50 style="background-image: url(' {{ $stDetail['img'] ?? '-' }}')"></div> -->
            <img src="{{ $stDetail['img'] ?? '-' }}" alt="">
            <div> {{ $stDetail['pr_name'] ?? '-' }} </div>
            <div> {{ $stDetail['code'] ?? '-' }} </div>
            <div> {{ $stDetail['pd_type'] ?? '-' }} </div>
        </div>
        @endif
    </div>
</div>
