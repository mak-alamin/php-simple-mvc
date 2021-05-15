<?php 

//Router Class

 class Router{

    protected $currentController;
    protected $currentMethod;
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if(empty($url)){
            $this->currentController = 'PagesController';
            $this->currentMethod = 'index';
       
        } else if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')){
            $this->currentController = ucfirst($url[0]) . 'Controller';
            $this->currentMethod = 'index';
     
        } else {
            $this->currentController = 'PagesController';
            $this->currentMethod = '_404';
        }
        
        //Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        //Check second part of the url (will be a controller object method)
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
            } else {
                $this->currentMethod = '_404';
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            $url = explode('/', $url);

            return $url;
        }
    }
 }