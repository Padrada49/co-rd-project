<?php

namespace App\Livewire\Shipping;

use Livewire\Component;

class Main extends Component
{
    public $show = false;
    public $tabType = 1;
    public $statusTab = 0;
    public $stDetail = [];

    public function changeTab($parem)
    {

        $this->tabType = $parem;

        return $this->tabType;
    }

    public function changeStatusTab($parem)
    {

        $this->statusTab = $parem;

        return $this->statusTab;
    }

    public function getDetail($jsonValue)
    {
        $data = json_decode($jsonValue, true);  // Convert JSON string back to array

        // Check if new data is valid and not the same as the existing one
        if (!empty($data)) {
            if (empty($this->stDetail) || $data['id'] != $this->stDetail['id']) {
                $this->stDetail = $data;
            } else {
                $this->stDetail = [];  // Reset if the same ID
            }
        } else {
            $this->stDetail = [];  // Reset if data is invalid or empty
        }

        return $this->stDetail;
    }

    // For Modal
    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    // Data
    public function render()
    {
        $st_list = [
            [
                'id' => 1,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'แป้งฝุ่นโปร่งแสง',
                'code' => '#OF0001',
                'pd_type' => 'เครื่องสำอาง',
                'qty' => '1,000',
                'company' => [
                    'id' => '1',
                    'name' => 'Organic Innovation',
                ],
                'status' => [
                    'id' => '1',
                    'name' => 'รายการใหม่',
                    'color' => 'status-red',
                ],
                'address' => [
                    'id' => '1',
                    'name' => 'ภัทรดา พร้อมกิจจานนท์',
                    'addr' => '154/2 ม.3 ต.พระประโทน อ.เมือง จ.นครปฐม 73000',
                    'tel' => '062-6533564',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ], [
                'id' => 2,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'เซรั่มบำรุงขนตา',
                'code' => '#OF0454',
                'pd_type' => 'สกินแคร์',
                'qty' => '5,000',
                'company' => [
                    'id' => '1',
                    'name' => 'Organic Innovation',
                ],
                'status' => [
                    'id' => '1',
                    'name' => 'รายการใหม่',
                    'color' => 'status-red',
                ],
                'address' => [
                    'id' => '2',
                    'name' => 'สมจิตร สมใจ',
                    'addr' => '123/7 ม.8 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000',
                    'tel' => '087-8692413',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ], [
                'id' => 3,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'ครีมบำรุงผิวนมแพะ',
                'code' => '#OB0085',
                'pd_type' => 'สกินแคร์',
                'qty' => '2,000',
                'company' => [
                    'id' => '2',
                    'name' => 'Organic Cosme',
                ],
                'status' => [
                    'id' => '2',
                    'name' => 'เตรียมจัดส่ง',
                    'color' => 'status-orange',
                ],
                'address' => [
                    'id' => '1',
                    'name' => 'ภัทรดา พร้อมกิจจานนท์',
                    'addr' => '154/2 ม.3 ต.พระประโทน อ.เมือง จ.นครปฐม 73000',
                    'tel' => '062-6533564',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ], [
                'id' => 4,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'อาหารเสริมบำรุงเส้นผมและเล็บ',
                'code' => '#OF0001',
                'pd_type' => 'อาหารเสริม(สำหรับคน)',
                'qty' => '500',
                'company' => [
                    'id' => '1',
                    'name' => 'Organic Innovation',
                ],
                'status' => [
                    'id' => '2',
                    'name' => 'เตรียมจัดส่ง',
                    'color' => 'status-orange',
                ],
                'address' => [
                    'id' => '3',
                    'name' => 'ศรีพร บำรุงตา',
                    'addr' => '95/8 ม.2 ต.โพรงมะเดื่อ อ.เมือง จ.นครปฐม 73000',
                    'tel' => '095-8674286',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ], [
                'id' => 5,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'ครีมกันแดดซันบล็อก',
                'code' => '#OF0001',
                'pd_type' => 'สกินแคร์',
                'qty' => '1,200',
                'company' => [
                    'id' => '2',
                    'name' => 'Organic Cosme',
                ],
                'status' => [
                    'id' => '3',
                    'name' => 'กำลังจัดล่ง',
                    'color' => 'status-yellow',
                ],
                'address' => [
                    'id' => '2',
                    'name' => 'สมจิตร สมใจ',
                    'addr' => '123/7 ม.8 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000',
                    'tel' => '087-8692413',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ], [
                'id' => 6,
                'img' =>  'https://images.unsplash.com/photo-1608068811588-3a67006b7489?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'pr_name' => 'เซรั่มบำรุงเล็บ',
                'code' => '#OF0001',
                'pd_type' => 'สกินแคร์',
                'qty' => '1,000',
                'company' => [
                    'id' => '1',
                    'name' => 'Organic Innovation',
                ],
                'status' => [
                    'id' => '4',
                    'name' => 'จัดส่งแล้ว',
                    'color' => 'status-green',
                ],
                'address' => [
                    'id' => '1',
                    'name' => 'ภัทรดา  พร้อมกิจจานนท์',
                    'addr' => '154/2 ม.3 ต.พระประโทน อ.เมือง จ.นครปฐม 73000',
                    'tel' => '062-6533564',
                    'googleMaps' => 'https://maps.app.goo.gl/P37Ph4rXzpAqH4Mt8',
                ],
            ]
        ];
        return view('livewire.shipping.main', [
            'st_list' => $st_list,
            'stDetail' => $this->stDetail,
            'tabType' => $this->tabType,
            'statusTab' => $this->statusTab,
            'isOpen' => $this->isOpen,

        ]);
    }
}
