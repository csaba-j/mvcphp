<?php
class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    public function __construct(){

        $url = $this->parseUrl();

        print_r($url);

        if (file_exists('../app/controllers/' . $url[0] . '.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;
        
        if (isset($url[1]) && method_exists($this->controller, $url[1]))
        {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        print_r($url);
    }

    /**
     * Parses the current URL by the '/' characters after '/public'.
     * 
     * @return array<string>|bool The array containing the parsed URL's parameters/segments, as separated in the URL by the '/' characters.
     * 
     * example: ".../public/home/index" returns an array containing "home" and "index".
     */
    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
?>