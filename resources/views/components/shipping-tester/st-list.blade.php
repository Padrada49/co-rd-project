<div>
    <div class="flex flex-row text-xs p-3  font-black  text-white justify-start bg-pastel-800 m-2">
        <div class="basis-1/2 ">รูปภาพ</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">ชื่อโปรเจ็ค</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">รหัส</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">ประเภทสินค้า</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">จำนวน</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">สถานะ</div>
    </div>

    <div class="list">
        @foreach ($stList as $value)
        @if($comType != '0')
        @if ($value['company']['id'] == $comType )
        <div class="h-28 rm-item flex flex-row justify-start bg-white hover:text-white hover:font-bold hover:bg-pastel-300 m-2 rounded-lg drop-shadow-xl" wire:click="getDetail('{{ json_encode($value) }}')">
            <div class="basis-1/2 rounded-l-xl">
                <div class="rounded-l-lg h-28 object-none bg-no-repeat bg-cover bg-center bg" style="background-image: url('{{ $value['img'] }}')">
                </div>
            </div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['pr_name'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['code'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['pd_type'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['qty'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs content-center text-center">
                <span class="bg-{{ $value['status']['color']}} text-white text-xs font-medium me-2 px-3 py-1 rounded-full dark:bg-tomato dark:text-white">{{ $value['status']['name']}}</span>
            </div>
        </div>
        @endif
        @else
        <div class="h-28 rm-item flex flex-row justify-start bg-white hover:text-white hover:font-bold hover:bg-pastel-300 m-2 rounded-lg drop-shadow-xl" wire:click="getDetail('{{ json_encode($value) }}')">
            <div class="basis-1/2 rounded-l-xl">
                <div class="rounded-l-lg h-28 object-none bg-no-repeat bg-cover bg-center bg" style="background-image: url('{{ $value['img'] }}')">
                </div>
            </div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['pr_name'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['code'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['pd_type'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">{{ $value['qty'] }}</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs content-center text-center">
                <span class="bg-{{ $value['status']['color']}} text-white text-xs font-medium me-2 px-3 py-1 rounded-full dark:bg-tomato dark:text-white">{{ $value['status']['name']}}</span>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
