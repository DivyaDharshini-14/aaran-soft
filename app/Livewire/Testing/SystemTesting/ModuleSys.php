<?php

namespace App\Livewire\Testing\SystemTesting;

use Aaran\Testing\Models\TestModule;
use App\Models\User;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class ModuleSys extends Component
{
    use CommonTrait;

    #region[properties]
    public bool $checked = false;
    public mixed $description = '';
    public  mixed $users = '';

    public bool $showEditModal = false;
    public mixed $editable = true;

    #endregion

    #region[mount]
    public function mount()
    {
        $this->users= User::all();
    }
    #endregion

    #region[getSave]
    public function getSave()
    {
        if ($this->editable) {
            if ($this->vname != '') {
                if ($this->vid == "") {
                    TestModule::create([
                        'vname' => $this->vname,
                        'description' => $this->description,
                        'checked' => $this->checked?:0,
                        'user_id' => Auth::user()->id,
                        'active_id' => $this->active_id,
                    ]);
                    $message = 'Saved';
                }
                else {
                    $obj = TestModule::find($this->vid);
                    $obj->vname = Str::ucfirst($this->vname);
                    $obj->description = $this->description;
                    $obj->active_id = $this->active_id;
                    $obj->checked = $this->checked;
                    $obj->save();
                    $message = "Updated";
                }
                $this->dispatch('notify', ...['type' => 'success', 'content' => $message . ' Successfully']);
                $this->clearFields();
                $this->render();
            }
        }
    }
    #endregion


    #region[obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = TestModule::find($id);
            $this->vid = $obj->id;
            $this->vname = $obj->vname;
            $this->description = $obj->description;
            $this->checked = $obj->checked;
            $this->active_id = $obj->active_id;
            return $obj;
        }
        return null;
    }
    #endregion


    #region[clearFields]
    public function clearFields()
    {
        $this->vid = '';
        $this->vname = '';
        $this->description = '';
        $this->active_id = 1;
    }
    #endregion

    #region[checked]
    public function isCheked($id): void
    {
        $todo = TestModule::find($id);
        $todo->checked = !$todo->checked;
        $todo->save();
        $this->clearFields();
        $this->dispatch('$refresh');
    }
    #endregion

    #region[list]
    public function getList()
    {
        return TestModule::search($this->searches)
            ->where('active_id', '=', $this->activeRecord)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }
    #endregion

    #region[render]
    public function reRender(): void
    {
        $this->render()->render();
    }

    public function render()
    {
        return view('livewire.testing.system-testing.module-sys')->with([
            "list" => $this->getList()
        ]);
    }
    #endregion
}
