<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class SummaryTableRow extends Component
{
    public int $taskID;
    public String $name;
    public String $component;
    public $timestamp;
    public String $status;
    public String $statusColour;

    /*
     * Status       Bootstrap color 
     * Done         = success
     * In Progress  = warning
     * Blocked      = danger
     * Pending      = secondary
     * New          = primary
     */
    private $colour_map = array(
        'done' => 'success',
        'in progress' => 'warning',
        'blocked' => 'danger',
        'pending' => 'secondary',
        'new' => 'primary',
    );
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($taskID, $name, $component, $timestamp, $status)
    {
        // This component constructor is a placeholder. Once the DB is designed, this should take in an array
        $this->taskID=$taskID;
        $this->name=$name;
        $this->component=$component;
        $this->timestamp = $timestamp;
        $this->status=ucwords($status);
        $this->statusColour=$this->colour_map[$status];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.summary-table-row');
    }
}
