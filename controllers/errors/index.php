<?php
	if(!defined('ROOT')){
		define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	}
    require_once(ROOT."/private/session.php");
    require_once(ROOT."/private/template_file.php");
    require_once(ROOT."/private/ControllerLogic.php");

    class errors extends Controller{
        
        public function index(){
            $errorpage = new template\PageModel();
            $errorpage->templateFile = '/templates/error/error_page.php';
            $this->render(L::error_title,$errorpage);
        }

    }

    require_once(ROOT."/private/Controller.php");

?>