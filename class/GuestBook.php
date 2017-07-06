<?php


class class_GuestBook extends class_Book
{
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

        return $this->getPost();
    }
    public function getPost () {
        return $this->data;
    }
    public function changeId () {
        return count($this->getPost()) + 1;
    }
    public function appendData ($comment) {
        $data = $this->getData();
        $postdate = ['id' => $this->changeId(), 'date' => date("F j, Y, g:i a")];
        $arr[] = array_merge($postdate, $comment);
        $newData = array_merge($data, $arr);
        $this->data = $newData;
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

    public function delete ($id) {
        $data = $this->data;
        foreach ($data as $key => $value) {
            if ($value['id'] == $id) {
                unset($data[$key]);
                $this->data = $data;
            }

        }


       $this->save();
    }

}
