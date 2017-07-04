<?php


class class_GuestBook extends class_Book
{
    public $postid = 1;
    public function getData () {
        $handler = fopen($this->dbpath . $this->db, 'r');
        while (!feof($handler)) {
            $buffer = fgets($handler);
            $arr = explode('|||', $buffer);
            if(sizeof($arr) !== 1) {
                $this->data[] = ['id' => $arr[0], 'date' => $arr[1], 'name' => $arr[2], 'message' => $arr[3]];
            }
        }
        fclose($handler);

        return $this->data;
    }
    public function changeId () {
        $this->postid = $this->postid + 1;
    }
    public function appendData ($comment) {
        $postdate = ['id' => $this->postid, 'date' => date("F j, Y, g:i a")];
        $this->changeId();
        $arr[] = array_merge($postdate, $comment);
        $data = array_merge($this->getData(), $arr);

        var_dump($data);
        $this->data = $data;
        $this->save();
        return $this->data;

    }

    public function save () {
        $handler = fopen($this->dbpath . $this->db, 'w');
        foreach ($this->data as $value) {
            $data = implode('|||', $value) . "\n";
            $data = str_replace(["\r\n", "\r", "\n\n\n"], '<br>', $data);
            fwrite($handler, $data);
        }
        fclose($handler);
    }

    public function delete () {
        $data = $this->data;
        foreach ($data as $key => $value) {
            if ($value['id'] == 1) {
                unset($data[array_search($value, $data)]);
            }
        }
        var_dump($data);
        $this->data = $data;
        $this->save();
    }

}
