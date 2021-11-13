<?php

class site extends controller{

    public function site_index(){

        $this->view("master_site", [
            "pages" => "home"
        ]);
    }

    public function page_detail(){

        $this->view("master_detail", [
            "pages" => "page_detail"
        ]);
    }

}
