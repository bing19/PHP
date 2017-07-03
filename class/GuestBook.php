<?php


class class_GuestBook
{
    protected $db = 'db.txt';
    protected $data = [];

    public function getData () {
        $handler = fopen(APP_ROOT . DS . $this->db, 'r');
        while (!feof($handler)) {
            $buffer = fgets($handler);
            $arr = explode('|||', $buffer);
            if(sizeof($arr) !== 1) {

                $this->data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
            }
        }
        fclose($handler);

        return $this->data;
    }

    public function appendData ($comment) {
        $postdate = ['date' => date("F j, Y, g:i a")];
        $arr[] = array_merge($postdate, $comment);
        $data = array_merge($this->getData(), $arr);
        $this->data = $data;
        $this->save();
        return $this->data;

    }

    public function save () {
        $handler = fopen(APP_ROOT . DS . 'db.txt', 'w');
        foreach ($this->data as $value) {

            $data = implode('|||', $value) . "\n";
            $data = str_replace(["\r\n", "\r", "\n\n\n"], '<br>', $data);
            fwrite($handler, $data);
        }
        fclose($handler);

       
    }

}
