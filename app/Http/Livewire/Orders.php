<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Orders extends Component
{
    public $orders, $Order_Id, $Order_Nama, $Order_Kontak, $Order_Alamat;
    public $isOpen = 0;

    public function render()
    {
        $this->orders = Order::all();
        return view('livewire.orders');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->Order_Id = '';
        $this->Order_Nama = '';
        $this->Order_Kontak = '';
        $this->Order_Alamat = '';
    }

    public function store()
    {
        $this->validate([
            'Order_Id' => 'required',
            'Order_Nama' => 'required',
            'Order_Kontak' => 'required',
            'Order_Alamat' => 'required'
        ]);
   
        Order::updateOrCreate(['id' => $this->id], [
            'Order_Id' => $this->Order_Id,
            'Order_Nama' => $this->Order_Nama,
            'Order_Kontak' => $this->Order_Kontak,
            'Order_Alamat' => $this->Order_Alamat
        ]);
  
        session()->flash('message', 
            $this->id ? 'Order Updated Successfully.' : 'Order Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $orders = Order::findOrFail($id);
        $this->orders_id = $id;
        $this->Order_Id = $orders->Order_Id;
        $this->Order_Nama = $orders->Order_Nama;
        $this->Order_Kontak = $orders->Order_Kontak;
        $this->Order_Alamat = $orders->Order_Alamat;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Order::find($id)->delete();
        session()->flash('message', 'Order Deleted Successfully.');
    }
}
