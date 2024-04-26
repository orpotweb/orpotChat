<?php namespace ProcessWire;

class WhatsappWidget extends Process {

      public static function getModuleinfo() {
        return array(
                'title' => 'WhatsappWidget',
                'summary' => 'Modulo para instalar el chat de Whats app',
                'version' => 1.0,
                'href' => '',
                'autoload'=>true,
                'configurable'=>false,
                 
            );
      }


  

      public function getStyles(){
         $output = '';
         $output .= '<link rel="stylesheet" href="'.$this->urls->siteModules.'Whatsapp/assets/orpot-chat.css">';
         return $output;
      }

      public function getScripts(){
        $output = '';
        $output .= '<script src="'.$this->urls->siteModules.'Whatsapp/assets/orpot-chat.js"></script>';
        return $output;
      }




      
      public function Initialize($params=[]){

        $output = '';
        
        $output .=$this->getScripts();
        $output .=$this->getStyles();
        
         $output .='<script type="text/javascript"> 
              $(function () {
                $("'.$params['elementID'].'").orpotChat({
                phone: "'.$params['phone'].'",
                popupMessage:  "'.$params['popupMessage'].'",
                message: "'.$params['message'].'",
                showPopup: true,
                showOnIE: false,
                headerTitle:"'.$params['headerTitle'].'",
                headerColor: "'.$params['headerColor'].'",
                backgroundColor:"'.$params['backgroundColor'].'",
                buttonImage: "<img src=\"'.$this->urls->siteModules.'Whatsapp/assets/'.$params['buttonImage'].'\" />"
            });
          });
        </script>';
        return $output;
      }


}

