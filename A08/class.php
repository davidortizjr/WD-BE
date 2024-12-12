<?php
class island {
    public $id;
    public $name;
    public $shortDescription;
    public $image;

    public function __construct($id, $name, $shortDescription, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->image = $image;
    }

    public function buildContainer() {
        return '
        <div class="col">
            <div class="card card-bg overflow-hidden">
                <img src="imgs/' . $this->image . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $this->name . '</h5>
                    <p class="card-text">' . $this->shortDescription . '</p>
                    <a href="view.php?id=' . $this->id . '" class="btn btn-primary">Go here</a>
                </div>
            </div>
        </div>';
    }
}

class islandContent
{
    public $islandOfPersonalityID;
    public $image;
    public $content;

    public function __construct($image, $islandOfPersonalityID, $content)
    {
        $this->image = $image;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->content = $content;
    }

    public function buildContainer()
    {
        return '
        <div class="card my-5">
            <div class="row g-0" style="background:blue;">
                <div class="col-12 col-md-6">
                    <div class="img-featured-container">
                        <img src="contentpic/' . $this->image . '" alt="Featured Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <p class="card-text">' . $this->content . '</p>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>