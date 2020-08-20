<?php

class GithubWidget extends WP_Widget{

    public function __construct(){
        $dado = array("classname"=>"GithubWidget","description"=>"Um Widgets do Plugin Github");
        parent::__construct("githubwidget","Github Widget",$dado);
    }
 
    public function form($instance){

        $user =$instance['user'];
        $qtd=   $instance['qtd'];
        ?>
            <h4>Widget:</h4><br>
            <label >Usuario</label><br>
            <input type="text" id='<?php echo $this->get_field_id("user");?>' name='<?php echo $this->get_field_name("user");?>' 
            value='<?php echo $user;?>'><br>
            <label >Quantidade de Repositorios</label><br>
            <input type="text" id='<?php echo $this->get_field_id("qtd");?>' name='<?php echo $this->get_field_name("qtd");?>' 
            value='<?php echo $qtd;?>'><br>
        <?php
      
    }
    public function widget($args,$instance){
       
        function gaps_convert_json($request_url){
            $option = array("http"=>array("user_agent"=>$_SERVER['HTTP_USER_AGENT']));
            $context = stream_context_create($option);
            $response = file_get_contents($request_url,false,$context);
            $dados = json_decode($response);
            return $dados;
            
        }
          $user  = $instance['user'];
          
          $qtd  = $instance['qtd'];  
            $request_url = 'https://api.github.com/users/'.$user.'/repos?short=createdDate&per_page='.$qtd;
            $repos = gaps_convert_json($request_url);
            $request_url ='https://api.github.com/users/'.$user;
            $user = gaps_convert_json($request_url);


        ?>
        <div class="user">
            <hr>
            <h4>Repositorios:</h4>
            <hr>
            <img src="<?php echo $user -> avatar_url?>" style="width:60px;"><br>
            Nickname:<?php echo $user ->name;?><br>
            <hr>
        </div>
        <?php foreach($repos as $repo):?>
            <?php echo $repo->name;?><br>
            Linguagem:<?php echo $repo->language;?><br>
            <a href='<?php echo $repo->html_url;?>'><button>Ver</button></a><br>
            <hr>
        <?php endforeach; ?>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance =  array();
        $instance['user'] = $new_instance['user'];
        $instance['qtd'] = $new_instance['qtd'];
        return $instance;
	}
     
   
}