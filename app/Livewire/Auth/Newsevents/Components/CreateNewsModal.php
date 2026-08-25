<?php

namespace App\Livewire\Auth\Newsevents\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Models\NewsEvents;


class CreateNewsModal extends Component
{

    use WithFileUploads;
    
    #[Validate('required')]
    public $title = null;

    #[Validate('required')]
    public $description = null;

    #[Validate('required')]
    public $status = null;

    public $image = [];

    public function save() {
        $imagePaths = [];

        // Loop through each uploaded file in the array
        foreach ($this->image as $file) {
            $filename = $file->getClientOriginalName();

            // Store the file
            $file->storeAs(
                'images/news-events',
                $filename,
                ['disk' => 'public_path_disk']
            );

            // Collect the path
            $imagePaths[] = 'images/news-events/' . $filename;
        }

        // Save the array of paths into the JSON column
        NewsEvents::create([
            'title' => $this->title,
            'description' => $this->description,
            'date' => now()->toDateString(),
            'image' => $imagePaths, // Saved as JSON automatically if casted as 'array'
            'status' => $this->status,
        ]);
    }

    public function render()
    {
        return view('livewire.auth.newsevents.components.create-news-modal');
    }
}
