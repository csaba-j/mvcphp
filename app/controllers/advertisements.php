<?php
class Advertisements extends Controller
{
    public function index($message = '')
    {
        $advertisement = $this->model('Advertisement');
        $advertisement->message = $message;
        echo 'ads index page ' . $advertisement->message;
    }
}

?>