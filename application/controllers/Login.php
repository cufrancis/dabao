<?php
 /**
  * 
  */
  class Login extends CI_Controller
  {
  	//不指明具体操作，默认会执行
    function index(){
      //显示登录首页或后天首页
      $this->showindex();
    }

    //显示登录首页或后台首页
  	function showindex(){
  		$this->load->library('session');
		$this->load->helper('url');
		// 将用户信息存入session
		//$this->session->user = $info;
  		//print_r($this->session);
  	  //如果登录，显示后台界面
      if($this->islogin()){
         $this->load->view('index');//链接后台首页
      }
      else{  //登录页面
        $this->load->view('login');//链接登录页面
      }

  	}

  	//退出登录
  	function logout(){
  		$this->load->library('session');
  		// unset($this->session->user);
      unset($_SESSION['user']);
  		$data=array();//声明一个变量如$data数组，然后往里面丢数据，view里可以直接访问
      print_r($this->session);

		$data['msg'] =  '退出登录成功！';
		$this->session->mark_as_flash('message');
		$this->load->view('login',$data);
  	}

    //判断是否登录
    function islogin(){
      $this->load->library('session');
	   
		// 将用户信息存入session
		//$this->session->user = $info;
  		
      if(isset($this->session->user )){
        return true;
      }
      else{
        return false;
      }

    }

    //处理登录操作,根据用户提交的用户名和密码检查密码是否正确
    function do_login(){
      //1. 看看用户提交数据是否符合规范
      //把用户提交数据显示出来看看
      //print_r($_POST);
      // die();
      //对用户提交来的数据进行安全校验或者过滤，防止恶意用户提交攻击数据如注入数据库
      $username=addslashes($_POST['username']);
      $password=$_POST['password'];
              $this->output->enable_profiler(TRUE);

     
      
      //一致就让登录，否则踢回登录界面并且要重新输
      $info=$this->check_password($username,$password);
      if($info){
      	$this->load->library('session');
		$this->load->helper('url');
		// 将用户信息存入session
		$this->session->user = $info;

		// 设置登录成功提示，并标记为flashdata数据
		$data=array();
		$data['msg'] =  '登录成功！';
		//$this->session->mark_as_flash('message');
		$this->load->view('index',$data);
      }
      else{
      	 $data=array();
      	 $data['msg'] = '用户名或者密码不正确，请重新登录！';
		 //$this->session->mark_as_flash('message');
      	 $this->load->view('login',$data);
      }
    }

    /**
   * reset password
   */
  public function reset_password(){
    // 加载表单验证类，并设置验证条件
    $this->load->library('form_validation');
    $this->form_validation->set_rules('chk_passwd', 'Username', 'required');
    $this->form_validation->set_rules('old_passwd', 'Password', "required");
    $this->form_validation->set_rules('new_passwd', 'New_Password', 'required');
    $new_password = $this->input->post('new_passwd');
    $chk_password = $this->input->post('chk_passwd');
    $this->load->library('session');
          $this->output->enable_profiler(TRUE);

    if ($this->form_validation->run() == FALSE or $new_password != $chk_password){
      // 验证不通过，显示重置密码页面
      $this->load->view('reset_password');
     
    } else {
      // 验证通过，写入数据库
      $username = $this->session->user['username'];
      $old_password = $this->input->post('old_passwd');
      // 表单提交后，从数据库中匹配用户名与旧密码是否一致，一致就将
      // 新密码写入替换原来密码
      $this->load->database();
      $query = $this->db->select('*')
                ->from('user')
                ->where('username', $username)
                ->where('password', $old_password)
                ->get();
      $result = $query->row_array();
      if ($result){
        // 旧密码和用户名匹配
        $this->db->where('username', $username);
        $this->db->update('user', array('password'=>$new_password));
        echo "更新密码成功";
      } else{
        echo "密码或用户名错误";
      }
      // echo $old_password;
    }
  }
      
	// 查询数据库，检查用户名和密码是否匹配
	// 查询成功返回用户信息，查询失败返回false
	function check_password( $username,$password) {
	       	$this->load->database();
			$query = $this->db->select('*')
								->from('user')
								->where('username', $username)
								->get();
			$result = $query->row_array();

			if($result){
				if($result['password']==$password){
					return $result;
				}
				else{
					//$this->form_validation->set_message('check_password', '用户名或密码错误');
					return False;
				}
			}
			else{
				//$this->form_validation->set_message('check_password', '用户名或密码错误');
				return False;
			}
				
	}
  //课前选择页
   public function  keqian(){
      $this->load->view('keqian ');
  }
  //课后选择页
   public function  kehou(){
      $this->load->view('kehou ');
  }
  // //预习视频页
  // public function  prevideo(){
  //     $this->load->model('cursor_model');
  //     $this->load->model('user_model');
  //     // $this->output->enable_profiler(TRUE);

  //     $data['videos'] = $this->cursor_model->get_video_of_cursor(1);
  //     $data['cursor']->comments = $this->cursor_model->get_all_comments(1);
  //     foreach ($data['cursor']->comments as $key => $value) {
  //         // 这么一大串是为了提取每条评论中的 author_id
  //         // 并将 author_id 传入 user_model 模块的 getUserInfo() 函数来获取用户的相信信息
  //         // 最后再在 $data 数组中新建 author 键，并存入查询的用户数据
  //         // 这样操作之后，在模板中就可以通过 $data['cursor']->comments[0]->author->username
  //         // 直接获取到评论作者的信息了
  //         $data['cursor']->comments[$key]->author = $this->user_model->getUserInfo($value->author_id);
  //     }     
  //     $this->load->view('course', $data);
  // }
  //预习视频页
  public function  prevideo($id){
      $this->load->model('cursor_model');
      $this->load->model('user_model');
      $this->output->enable_profiler(TRUE);//调试页面

      $data['videos'] = $this->cursor_model->get_video_of_cursor($id);
      $this->load->model('user_model');
      foreach($data['videos'] as $video){
          if ($this->user_model->is_watch_video($this->session->user['id'], $video->id)){
              $video->isWatch = True;
          } else {
              $video->isWatch = False;
          }
      }      
      // print_r($data['videos']);
      $data['cursor'] = (object)array();
      $data['cursor'] = $this->cursor_model->getCursorInfo($id);      

      $data['cursor']->comments = $this->cursor_model->get_all_comments($id);
      // print_r($data['cursor']->comments);
      foreach ($data['cursor']->comments as $key => $value) {
          // 这么一大串是为了提取每条评论中的 author_id
          // 并将 author_id 传入 user_model 模块的 getUserInfo() 函数来获取用户的相信信息
          // 最后再在 $data 数组中新建 author 键，并存入查询的用户数据
          // 这样操作之后，在模板中就可以通过 $data['cursor']->comments[0]->author->username
          // 直接获取到评论作者的信息了
          $data['cursor']->comments[$key]->author = $this->user_model->getUserInfo($value->author_id);
      }     
      $this->load->view('course', $data);
  }  
    /**
     * 添加评论
     * @param [type] $cursor_id [description]
     */
    public function comment_add(){
        // 从 ajax 传递的数据中取出 课程id
        $cursor_id = $this->input->post('id');
        // 加载课程模型类
        $this->load->model('cursor_model');
        // 构造数据数组，此 $data 数组将传给 models/Cursor_model.php/insert_comments() ，
        // 执行向数据库中插入数据的操作
        $data = array(
            // 评论的基本内容
            "text" => $this->input->post('text'),
            // 评论的添加时间
            "created_at" => time(),
            // 作者 id
            "author_id" => $this->session->user['id'],
        );
        // 这里判断插入操作是否成功
        // 具体的插入代码放在 cursor_model 模型类中，
        // 主控制器中只负责调用函数并获取执行结果来进行流程控制
        if ($this->cursor_model->insert_comments($cursor_id, $data)){
            // 插入成功
            // 由于 comment_add() 控制器是由 ajax 调用的，
            // 如果需要返回数据，则必须是 json 格式
            echo json_encode("add comment successful!");
        } else {
            echo json_encode("Error: add comment failed!");
        }
    }    


  //课前测试页
  public function  pretest(){
      $this->load->view('test');
  }
  //作业页
    public function  work(){
      $this->load->view('homework');
  }
  //课程延伸延伸页
  public function  extent(){
      $this->load->view('extent ');
  }
  //推荐页
  public function  recommend(){
      $this->load->view('recommend ');
  }//讨论区页
  public function  talk(){
      $this->load->view('talk ');
  }
  //回首页
   public function  comeback(){
      $this->load->view('index');
  }

}
  
?>