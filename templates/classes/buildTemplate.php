<?php
class Template {
    protected $path, $data;

    public function __construct($path, $data = array()) {
        $this->path = $path;
        $this->data = $data;
    
}
    public function render() {
        if(file_exists($this->path)){
            //Extracts vars to current view scope
            extract($this->data);

            //Starts output buffering
            ob_start();

            //Includes contents
            include $this->path;
            $buffer = ob_get_contents();
            @ob_end_clean();

            //Returns output buffer
            return $buffer;
        } else {
            //Throws exception
        }
    }

    public function Inject($data) {
        # code...
                // $data = array(
                //         'title' => 'Directory Listings',
                //         'styles' => $stylesheets,
                //         'head_scripts' => $head_scripts,
                //         'content' => $content,
                //         'footer_scripts' => $footer_scripts,
                //         'footer_inline_scripts' => $footer_inline_scripts
                //     );
                        $title = null;
                        $styles = null;
                        $head_scripts = null;
                        $content = null;
                        $footer_scripts = null;
                        $footer_inline_scripts = null;

        if (is_array($data)) {
            switch ($data) {
                case isset($data):
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
            // if (isset($param['id'])) {
            //     $id = $param['id'];

            // }
            // if (isset($param['email'])) {
            //     $email = $param['email'];
            // }
            // if (isset($param['username'])) {
            //     $username = $param['username'];
            // }
        }

    }       
}
// class Inject {
    
//     public function __construct($injection) {

//         # code...
//     }

// }

?>