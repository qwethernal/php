<?php
class Cmodel {
    public function GetData() {
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwisu morbs id, arcu vestibulum dolor conmtum ac egestas lorem elit liber'
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE' => '21.10.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque'
        );
        return $arrayResult;
    }
}
