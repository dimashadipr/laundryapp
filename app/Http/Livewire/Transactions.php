<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Transaction;
  
class Transactions extends Component
{
    public $transaction, $Order_Id, $Item_Id, $Sequence, $Keterangan, $transaction_id;
    public $isOpen = 0;
  
    public function render()
    {
        $this->transaction = Transaction::all();
        return view('livewire.transactions');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->Order_Id = '';
        $this->Item_Id = '';
        $this->Sequence = '';
        $this->Keterangan = '';
        $this->transaction_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'Order_Id' => 'required',
            'Item_Id' => 'required',
            'Sequence' => 'required',
            'Keterangan' => 'required',
        ]);
   
        Transaction::updateOrCreate(['id' => $this->transaction_id], [
            'Order_Id' => $this->Order_Id,
            'Item_Id' => $this->Item_Id,
            'Sequence' => $this->Sequence,
            'Keterangan' => $this->Keterangan
        ]);
  
        session()->flash('message', 
            $this->transaction_id ? 'Transaction Updated Successfully.' : 'Transaction Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $this->transcation_id = $id;
        $this->Order_Id = $transaction->Order_Id;
        $this->Item_Id = $transaction->Item_Id;
        $this->Sequence = $transaction->Sequence;
        $this->Keterangan = $transaction->Keterangan;
        
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Transaction::find($id)->delete();
        session()->flash('message', 'Transaction Deleted Successfully.');
    }
}