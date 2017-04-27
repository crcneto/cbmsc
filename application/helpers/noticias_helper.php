<?php

function getNews() {
    $noticias = array();
    try{
    @$feed = file_get_contents('http://anoticia.clicrbs.com.br/sc/ultimas-noticias-rss/');
    @$rss = new SimpleXmlElement($feed);
    } catch (Exception $ex){
        return $noticias;
    }
    $count = 0;
    foreach ($rss->channel->item as $value) {
        $titulo = (String) $value->title;
        $noticia = (String) $value->description;
        $link = (String) $value->link;
        $time = (String) $value->pubDate;
        $noticias[] = [
            'titulo' => $titulo,
            'descricao' => $noticia,
            'link' => $link,
            'time'=>$time
        ];
        if($count>9){
            break;
        }
        $count++;
    }
    return $noticias;
}
