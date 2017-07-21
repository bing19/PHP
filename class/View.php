<?php


class class_View
{
    public $tplName;
    public $posts = [];

    public function __construct()
    {

    }

    public function assign ($name, $value)
    {
       $this->tplName = $name;
        $this->posts[] = $value;
    }
    public function display ()
    {
        foreach ($this->posts as $post){
           echo '<div class="item">';
                echo '<div class="item-top">';
                    echo '<div class="name">' . $post->getName() . '</div>';
                    echo '<div class="date">' . $post->getPostDate() . '</div>';
            echo '</div>';
            echo '<p>' . $post->getMessage() . '</p>';
            echo '<div class="delete">';
                    echo '<a href=\"?action=delete&id=' . $post->getPostId() . '>Удалить</a>';
               echo '</div>';
            echo '</div>';

        }
    }

    public function render()
    {
       return $this->display();
    }
}