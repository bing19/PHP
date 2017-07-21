<?php


class class_GuestBook2
{
    protected $file;
    public $data;

    public function __construct($file)
    {
        $this->file = $file;
    }



    public function getAllPost()
    {
        $handler = fopen($this->file, 'r', FILE_SKIP_EMPTY_LINES);
        $posts = [];
        while (!feof($handler)) {
            $buffer = fgets($handler);
            $arr = explode('|||', trim($buffer));
            $obj = new class_GuestBookPost($arr[2], $arr[3]);
            $obj->setId($arr[0]);
            $obj->setDate($arr[1]);
            $posts[] = $obj;
        }
        fclose($handler);
        $this->data = $posts;
        return $posts;
    }

    public function appendData(class_GuestBookPost $comment)
    {
        $data = $this->getAllPost();
        $post = [];
        foreach ($data as $obj) {
            $arr = [
                'id' => $obj->getPostId(),
                'date' => $obj->getPostDate(),
                'name' => $obj->getName(),
                'message' => $obj->getMessage()
            ];
            $post[] = $arr;
        }
        $id = count($post)+1;

        $postdate = ['id' => $id, 'date' => date("F j, Y, g:i a")];
        $newpost = [
            'name' => $comment->getName(),
            'message' => $comment->getMessage()
        ];

        $a[] = array_merge($postdate, $newpost);

        $newData = array_merge($post, $a);
        $this->data = $newData;
        $this->save();

    }

    public function save()
    {
        $handler = fopen($this->file, 'w');
        $i = 0;
        $data = '';
        foreach ($this->data as $value) {
            $i++;
            if (count($this->data) !== $i) {
                $data .= implode('|||', $value) . "\n";
            } else {
                $data .= implode('|||', $value);
            }
        }
        fwrite($handler, $data);
        fclose($handler);
    }


}

