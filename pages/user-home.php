<?php 
  session_start();
  if($_COOKIE['logined']==false)
  {
    header ("location:..\pages\login.php?error=wrongway");
    exit();
  }else{
    $user_file = "../users/".$_COOKIE['username'].".txt";
    $contents = file_get_contents($user_file);
    $elements=explode("§",$contents);
    for($i=0;$i<=sizeof($elements);$i++){
        if($i==0){
            $_SESSION['username']=$elements[$i];
        }else if($i==1){
            continue;
        }else if($i==2){
            $_SESSION['email']=$elements[$i];
        }else if($i==3){
            $_SESSION['lastname']=$elements[$i];
        }else if($i==4){
            $_SESSION['firstname']=$elements[$i];
            

        }

      }
      $username=$_SESSION['username'];
        $email = $_SESSION['email'];
        $last_name = $_SESSION['lastname'];
        $first_name = $_SESSION['firstname'];
        
        $files_img = scandir('../usersimg/');
        foreach($files_img as $image){
          $pattern = "/^($username)/";
          if(preg_match($pattern,$image)==1){
            $titre = explode("à",$image);
            if($titre[0] = $username){
              $img_profil ="../usersimg/".$image;
            }

        }
      }
    }
    if(isset($_GET['saved'])){
      if($_GET['saved']=="True"){
        echo("<script> 
        let message ='Your note has been  saved with success'; 
        let pop_up = `<div class='pop_up'>
        <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
        <div class='message'>
            <img src='../assets/done_black_24dp.svg' alt=''>
            <p>\${message}</p></div>
      </div>`
       document.write(pop_up);
       let dd = document.querySelector('.pop_up');
       let close_button = document.querySelector('#close');
       close_button.addEventListener('click',function(){
        dd.classList.remove('get_out');
    })
       setTimeout(function(){
  
         dd.classList.add('get_out');
       },500)
       setTimeout(function(){
         dd.classList.remove('get_out');
     },5000);
        
      </script>");
      }
    }else if(isset($_GET['error'])){
        if($_GET['error']=='deleteWithSuccess'){
          echo("<script> 
          let message ='Your note has been deleted'; 
          let pop_up = `<div class='pop_up'>
          <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
          <div class='message'>
              <img src='../assets/done_black_24dp.svg' alt=''>
              <p>\${message}</p></div>
        </div>`
         document.write(pop_up);
         let dd = document.querySelector('.pop_up');
         let close_button = document.querySelector('#close');
         close_button.addEventListener('click',function(){
          dd.classList.remove('get_out');
      })
         setTimeout(function(){
    
           dd.classList.add('get_out');
         },500)
         setTimeout(function(){
           dd.classList.remove('get_out');
       },5000);
          
        </script>");
        }
    
       }
        if(isset($_GET['saved'])){
          if($_GET['saved']=="nope"){
          echo("<script> 
          let message ='Your note has not been saved repeat later'; 
          let pop_up = `<div class='pop_up'>
          <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
          <div class='message'>
              <img src='../assets/error2.svg' alt=''>
              <p>\${message}</p></div>
        </div>`
         document.write(pop_up);
         let dd = document.querySelector('.pop_up');
         dd.style.backgroundColor = '#bd362f';
         let close_button = document.querySelector('#close');
         close_button.addEventListener('click',function(){
          dd.classList.remove('get_out');
      })
         setTimeout(function(){
    
           dd.classList.add('get_out');
         },500)
         setTimeout(function(){
           dd.classList.remove('get_out');
       },5000);
          
        </script>");
        }
      }
      if(isset($_GET['saved'])){
        if($_GET['saved']=="changeTItre"){
        echo("<script> 
        let message ='please change your note title'; 
        let pop_up = `<div class='pop_up'>
        <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
        <div class='message'>
            <img src='../assets/error2.svg' alt=''>
            <p>\${message}</p></div>
      </div>`
       document.write(pop_up);
       let dd = document.querySelector('.pop_up');
       dd.style.backgroundColor = '#bd362f';
       let close_button = document.querySelector('#close');
       close_button.addEventListener('click',function(){
        dd.classList.remove('get_out');
    })
       setTimeout(function(){
  
         dd.classList.add('get_out');
       },500)
       setTimeout(function(){
         dd.classList.remove('get_out');
     },5000);
        
      </script>");
      }
    }
    if(isset($_GET['error'])){
      if($_GET['error']=="deleteWithFailure"){
      echo("<script> 
      let message ='your note has not been deleted please repeat later '; 
      let pop_up = `<div class='pop_up'>
      <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
      <div class='message'>
          <img src='../assets/error2.svg' alt=''>
          <p>\${message}</p></div>
    </div>`
     document.write(pop_up);
     let dd = document.querySelector('.pop_up');
     dd.style.backgroundColor = '#bd362f';
     let close_button = document.querySelector('#close');
     close_button.addEventListener('click',function(){
      dd.classList.remove('get_out');
  })
     setTimeout(function(){

       dd.classList.add('get_out');
     },500)
     setTimeout(function(){
       dd.classList.remove('get_out');
   },5000);
      
    </script>");
    }
  }
  if(isset($_GET['error'])){
    if($_GET['error']=='savedImg'){
      echo("<script> 
      let message ='Your image is saved successfully'; 
      let pop_up = `<div class='pop_up'>
      <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
      <div class='message'>
          <img src='../assets/done_black_24dp.svg' alt=''>
          <p>\${message}</p></div>
    </div>`
     document.write(pop_up);
     let dd = document.querySelector('.pop_up');
     let close_button = document.querySelector('#close');
     close_button.addEventListener('click',function(){
      dd.classList.remove('get_out');
  })
     setTimeout(function(){

       dd.classList.add('get_out');
     },500)
     setTimeout(function(){
       dd.classList.remove('get_out');
   },5000);
      
    </script>");
    }

   }
   if(isset($_GET['saved'])){
    if($_GET['saved']=="imptyinput"){
    echo("<script> 
    let message ='please file your note we connot save impty note'; 
    let pop_up = `<div class='pop_up'>
    <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
    <div class='message'>
        <img src='../assets/error2.svg' alt=''>
        <p>\${message}</p></div>
  </div>`
   document.write(pop_up);
   let dd = document.querySelector('.pop_up');
   dd.style.backgroundColor = '#bd362f';
   let close_button = document.querySelector('#close');
   close_button.addEventListener('click',function(){
    dd.classList.remove('get_out');
})
   setTimeout(function(){

     dd.classList.add('get_out');
   },500)
   setTimeout(function(){
     dd.classList.remove('get_out');
 },5000);
    
  </script>");
  }
}
    
      
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../second_css/user-home.css">
    <title>Document</title>
</head>
<body>  
  <!-- for the interface that shows above the content -->
<div class="overlay"></div>
        <div class="write-note">
            <form action="../auth/savenote.inc.php" method="POST">
              <input  type="text" name="titre" id="titre" placeholder="write a title for your note">
              <textarea name="note" id="note" placeholder="write your notes here ..."></textarea>
              <div class="div" class="exep">
                <input type="Submit" name="save-note" value="Save">
                <input value="Reset" type="reset">
              </div>
            </form>
            
          </div>

  <!-- ended -->
<!-- to checkout the user really want to delete a note -->
<div class="overlay2"></div>
        <div class="delete-note">
        <div class="confermation">
        do you really want to delete this note ?
      </div>
            <form action="../auth/deletenote.inc.php" method="POST">
                <input style="display: none;" name="fileName" type="text" id="to_be_delete">
                <input class="cancel" type="button" name="cancel" value="cancel" >
                <input class="delete_button" type="submit" name="delete" value="Delete">
              </div>
            </form>
            
          </div>

  <!-- the beggining of real page -->
    <div class="header">
        <div class="dashbord">Dashboard</div>
             <div class="search">
            <form action="../pages/user-home.php" method="get"> <input name="search" type="text" placeholder="Search">
            <input type="submit" value="search">  
          </form>
        </div>
        <div class="user">
            <div class="profil"><img src=<?php
             if(empty($img_profil))
             { 
               echo ('../usersimg/i168238-msemen.jpeg');
              }
              else
              {
                echo("$img_profil");
                } 
                ?> alt=''></div>
            <div class="user-name"><?php echo($_SESSION['firstname']); ?><br><?php echo($_SESSION['lastname']); ?></div>
        </div>
        </div>
        
    <div class="left">
        <div class="logo">
        <a href="../index.php">
            <svg id="Composant_7_1" data-name="Composant 7 – 1" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 315 113">
  <g id="logo" transform="translate(-140 -53)">
    <path id="Tracé_9" data-name="Tracé 9" d="M116.253,28.723v89.309a9.731,9.731,0,0,1-9.73,9.723H42.907a9.73,9.73,0,0,1-9.73-9.718v-5.559h4.431a4.33,4.33,0,0,0,3.021-1.248,4.278,4.278,0,0,0-3.021-7.3H33.177V89.261h4.431a4.273,4.273,0,0,0,0-8.547H33.177V66.04h4.431a4.274,4.274,0,1,0,0-8.547H33.177V42.832h4.431a4.331,4.331,0,0,0,3.021-1.249,4.276,4.276,0,0,0-3.021-7.3H33.177V28.726A9.73,9.73,0,0,1,42.907,19h63.617a9.731,9.731,0,0,1,9.73,9.721Z" transform="translate(117.577 36.12)" fill="#f7bd57"/>
    <g id="Groupe_4" data-name="Groupe 4" transform="translate(142.062 70.4)">
      <path id="Tracé_10" data-name="Tracé 10" d="M43.38,35.923a4.251,4.251,0,0,1-1.249,3.021,4.331,4.331,0,0,1-3.021,1.249H30.257a4.274,4.274,0,1,1,0-8.547h8.85A4.283,4.283,0,0,1,43.38,35.923Z" transform="translate(-25.983 -31.646)" fill="#1470f7"/>
      <path id="Tracé_11" data-name="Tracé 11" d="M43.38,55.128A4.266,4.266,0,0,1,39.107,59.4h-8.85a4.274,4.274,0,1,1,0-8.547h8.85a4.29,4.29,0,0,1,4.273,4.273Z" transform="translate(-25.983 -27.643)" fill="#1470f7"/>
      <path id="Tracé_12" data-name="Tracé 12" d="M43.38,74.346a4.243,4.243,0,0,1-1.249,3.01,4.286,4.286,0,0,1-3.021,1.263H30.257a4.274,4.274,0,1,1,0-8.548h8.85a4.283,4.283,0,0,1,4.273,4.274Z" transform="translate(-25.983 -23.638)" fill="#1470f7"/>
      <path id="Tracé_13" data-name="Tracé 13" d="M43.38,93.553a4.253,4.253,0,0,1-1.249,3.021,4.33,4.33,0,0,1-3.021,1.248H30.257a4.274,4.274,0,1,1,0-8.547h8.85a4.283,4.283,0,0,1,4.273,4.278Z" transform="translate(-25.983 -19.637)" fill="#1470f7"/>
    </g>
    <rect id="Rectangle_2" data-name="Rectangle 2" width="42.981" height="28.515" rx="3.527" transform="translate(173.284 74.677)" fill="#fffdf3"/>
    <path id="Tracé_14-2" data-name="Tracé 14" d="M102.337,79.054a2.113,2.113,0,0,0-2.115,2.115v.7a2.115,2.115,0,0,0,4.229,0v-.707a2.115,2.115,0,0,0-2.115-2.11Z" transform="translate(131.549 48.634)" fill="#4f2e13"/>
    <path id="Tracé_15" data-name="Tracé 15" d="M108.431,17.254H44.815A11.852,11.852,0,0,0,32.973,29.086v3.449H30.666a6.388,6.388,0,1,0,0,12.777h2.3V55.743h-2.3a6.388,6.388,0,1,0,0,12.777h2.3V78.965h-2.3a6.356,6.356,0,0,0-4.53,1.88,6.487,6.487,0,0,0-1.857,4.507,6.394,6.394,0,0,0,6.386,6.394H32.97v10.432h-2.3a6.388,6.388,0,1,0,0,12.777h2.3V118.4a11.852,11.852,0,0,0,11.842,11.832h63.619A11.853,11.853,0,0,0,120.273,118.4V105.495a2.115,2.115,0,1,0-4.229,0v12.9a7.619,7.619,0,0,1-7.613,7.6H44.815a7.613,7.613,0,0,1-7.613-7.6v-3.449H39.52a6.49,6.49,0,0,0,4.518-1.868,6.391,6.391,0,0,0-4.518-10.908H37.2V91.746h2.318a6.388,6.388,0,1,0,0-12.776H37.2V68.518h2.318a6.388,6.388,0,0,0,0-12.776H37.2V45.31h2.318a6.49,6.49,0,0,0,4.518-1.868,6.391,6.391,0,0,0-4.518-10.907H37.2V29.086a7.613,7.613,0,0,1,7.613-7.6h63.619a7.619,7.619,0,0,1,7.613,7.6V83.97a2.115,2.115,0,1,0,4.229,0V29.086a11.853,11.853,0,0,0-11.842-11.832ZM41.675,108.561a2.139,2.139,0,0,1-.619,1.517,2.217,2.217,0,0,1-1.539.642H30.666a2.161,2.161,0,0,1-1.539-3.675,2.188,2.188,0,0,1,1.539-.643h8.851a2.162,2.162,0,0,1,2.158,2.159Zm0-23.209a2.132,2.132,0,0,1-.631,1.517,2.181,2.181,0,0,1-1.527.643H30.666a2.159,2.159,0,1,1,0-4.318h8.851a2.161,2.161,0,0,1,2.158,2.158Zm0-23.22a2.153,2.153,0,0,1-2.158,2.158H30.666a2.159,2.159,0,0,1,0-4.318h8.851A2.188,2.188,0,0,1,41.675,62.131Zm0-23.209a2.136,2.136,0,0,1-.619,1.517,2.219,2.219,0,0,1-1.539.643H30.666A2.162,2.162,0,0,1,29.126,37.4a2.186,2.186,0,0,1,1.539-.642h8.851a2.161,2.161,0,0,1,2.158,2.158Z" transform="translate(115.723 35.756)" fill="#4f2e13"/>
    <path id="Tracé_16" data-name="Tracé 16" d="M56.493,33.435a6.384,6.384,0,0,0-6.378,6.377V59.8a6.384,6.384,0,0,0,6.378,6.377H90.949A6.385,6.385,0,0,0,97.327,59.8V39.812a6.385,6.385,0,0,0-6.378-6.377Zm36.6,6.377V59.8a2.15,2.15,0,0,1-2.149,2.147H56.493A2.15,2.15,0,0,1,54.344,59.8V39.812a2.15,2.15,0,0,1,2.148-2.147H90.949A2.15,2.15,0,0,1,93.1,39.812Z" transform="translate(121.107 39.128)" fill="#4f2e13"/>
    <text id="Online_Note_Book" data-name="Online  
Note Book" transform="translate(265 53)" fill="#707070" font-size="32" font-family="SegoeUI-BoldItalic, Segoe UI" font-weight="700" font-style="italic"><tspan x="0" y="35" xml:space="preserve">Online  </tspan><tspan x="0" y="78">Note Book</tspan></text>
  </g>
</svg>
</a>
        </div>
        <div class="buttons" >
      <a href="../pages/user-home.php">
      <button> <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 31.5 36">
  <path id="Icon_awesome-book" data-name="Icon awesome-book" d="M31.5,25.313V1.688A1.683,1.683,0,0,0,29.813,0H6.75A6.752,6.752,0,0,0,0,6.75v22.5A6.752,6.752,0,0,0,6.75,36H29.813A1.683,1.683,0,0,0,31.5,34.313V33.188a1.7,1.7,0,0,0-.626-1.315,15.68,15.68,0,0,1,0-5.252A1.676,1.676,0,0,0,31.5,25.313ZM9,9.422A.423.423,0,0,1,9.422,9H24.328a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H9.422A.423.423,0,0,1,9,10.828Zm0,4.5a.423.423,0,0,1,.422-.422H24.328a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H9.422A.423.423,0,0,1,9,15.328ZM26.817,31.5H6.75a2.25,2.25,0,0,1,0-4.5H26.817A25.313,25.313,0,0,0,26.817,31.5Z"/>
</svg>
           
All notes</button>
      </a>
            <button><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 34.5 31.654">
  <path id="Icon_material-favorite-border" data-name="Icon material-favorite-border" d="M28.012,4.5A10.33,10.33,0,0,0,20.25,8.105,10.33,10.33,0,0,0,12.488,4.5,9.4,9.4,0,0,0,3,13.987c0,6.521,5.865,11.834,14.749,19.907l2.5,2.26,2.5-2.277C31.635,25.821,37.5,20.508,37.5,13.987A9.4,9.4,0,0,0,28.012,4.5Zm-7.59,26.824-.173.172-.172-.172C11.866,23.889,6.45,18.973,6.45,13.987A5.9,5.9,0,0,1,12.488,7.95a6.744,6.744,0,0,1,6.158,4.071h3.226A6.7,6.7,0,0,1,28.012,7.95a5.9,5.9,0,0,1,6.038,6.037C34.05,18.973,28.633,23.889,20.422,31.324Z" transform="translate(-3 -4.5)"/>
</svg>
Favorites</button>
            <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
  <path id="Icon_awesome-box" data-name="Icon awesome-box" d="M34.829,12.619,31.37,2.242A3.272,3.272,0,0,0,28.26,0H18.594V13.125H34.911A3.123,3.123,0,0,0,34.829,12.619ZM16.406,0H6.74A3.272,3.272,0,0,0,3.63,2.242L.171,12.619a3.122,3.122,0,0,0-.082.506H16.406ZM0,15.313V31.719A3.282,3.282,0,0,0,3.281,35H31.719A3.282,3.282,0,0,0,35,31.719V15.313Z"/>
</svg>
Archived</button>
          <a href="../pages/user-home.php?settings=on" id="ss"><svg id="Icon_feather-settings" data-name="Icon feather-settings" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
  <path id="Tracé_113" data-name="Tracé 113" d="M22.5,18A4.5,4.5,0,1,1,18,13.5,4.5,4.5,0,0,1,22.5,18Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
  <path id="Tracé_114" data-name="Tracé 114" d="M29.1,22.5a2.475,2.475,0,0,0,.495,2.73l.09.09a3,3,0,1,1-4.245,4.245l-.09-.09a2.5,2.5,0,0,0-4.23,1.77V31.5a3,3,0,1,1-6,0v-.135A2.475,2.475,0,0,0,13.5,29.1a2.475,2.475,0,0,0-2.73.495l-.09.09A3,3,0,1,1,6.435,25.44l.09-.09a2.5,2.5,0,0,0-1.77-4.23H4.5a3,3,0,1,1,0-6h.135A2.475,2.475,0,0,0,6.9,13.5a2.475,2.475,0,0,0-.5-2.73l-.09-.09A3,3,0,1,1,10.56,6.435l.09.09a2.475,2.475,0,0,0,2.73.495h.12A2.475,2.475,0,0,0,15,4.755V4.5a3,3,0,0,1,6,0v.135a2.5,2.5,0,0,0,4.23,1.77l.09-.09a3,3,0,1,1,4.245,4.245l-.09.09a2.475,2.475,0,0,0-.5,2.73v.12A2.475,2.475,0,0,0,31.245,15H31.5a3,3,0,0,1,0,6h-.135A2.475,2.475,0,0,0,29.1,22.5Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
</svg>
Settings</a>

          </form>
            <form action="../auth/logout.inc.php" method="POST">
            <button type="submit" id="log_out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.5 37.5">
  <g id="Icon_feather-log-out" data-name="Icon feather-log-out" transform="translate(-3 -3)">
    <path id="Tracé_104" data-name="Tracé 104" d="M16,39H8.333A3.833,3.833,0,0,1,4.5,35.167V8.333A3.833,3.833,0,0,1,8.333,4.5H16" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
    <path id="Tracé_105" data-name="Tracé 105" d="M24,29.667l9.583-9.583L24,10.5" transform="translate(5.417 1.667)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
    <path id="Tracé_106" data-name="Tracé 106" d="M36.5,18h-23" transform="translate(2.5 3.75)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
  </g>
</svg>
Log out</button>
            </form>
        </div>
    </div>
    <div class="toAdd">
     <button>
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="#ffa600"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg></button>
    </div>
    </div>
    <div class="content">

    <?php
        if(isset($_GET["search"])){
          // do some searching
          $search = $_GET["search"];
          $files = scandir('../note_user/');
          $j= 0;
          foreach ($files as $file) {
              $pattern = "/^($username)/";
            if(preg_match($pattern,$file)==1){
              $titre = explode("#",$file);
              for ($i=0; $i < sizeof($titre) ; $i++) { 
                  if($i==1){
                    $titreWithoutEX= explode('.',$titre[$i]) ;
                    for($i=0;$i<sizeof($titreWithoutEX);$i++)
                    {
                      if($i==0){
                        $pattern2 = "/^($search)/";
                        $searchingTitle = $titreWithoutEX[$i];
                    if(preg_match($pattern2,$searchingTitle)==1){
                      $con=file_get_contents("../note_user/".$file);
                      $real_titre_note = $searchingTitle;
                      $j = $j +1;

                    }
                      }
                    }
                  }
              }
              
              }
              
            }
            if(empty($real_titre_note)){
              echo("<script> 

              let message ='this note does not exists '; 
              let pop_up = `<div class='pop_up'>
              <div class='x'><button id='close'><img src='../assets/close_black_24dp.svg' alt=''></button></div>
              <div class='message'>
                  <img src='../assets/error2.svg' alt=''>
                  <p>\${message}</p></div>
            </div>`
             document.write(pop_up);
             let dd = document.querySelector('.pop_up');
             dd.style.backgroundColor = '#bd362f';
             dd.style.top = '8rem'
             let close_button = document.querySelector('#close');
             close_button.addEventListener('click',function(){
              dd.classList.remove('get_out');
          })
             setTimeout(function(){
        
               dd.classList.add('get_out');
             },500)
             setTimeout(function(){
               dd.classList.remove('get_out');
           },50000);
              
            </script>");
            }else{
              echo("<div class='note'>
              <div class='note_header'>
              <a id='del$j' class='delete_button'><svg xmlns='http://www.w3.org/2000/svg'  height='24px' viewBox='0 0 24 24' width='24px' ><path d='M0 0h24v24H0V0z' fill='none'/><path d='M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z'/></svg> </a>
              </div><script>
              let deee$j = document.querySelector('#del$j');
              let file_titre$j = '$real_titre_note';
              deee$j.addEventListener('click',function(){
               overlay2.classList.add('to_display');
               delete_note.classList.add('to_display');
       
             let user = '$username'
             let file_name$j = '../note_user/'+user+'#'+file_titre$j+'.txt';
             let in_his = document.querySelector('#to_be_delete');
             in_his.setAttribute('value',file_name$j);
       
              })
              </script>
              <div class='title_note'>$real_titre_note</div>
              <div class='main_note'>$con</div>
              </div>");
            }
            
          }else if(isset($_GET['settings'])){
            echo("
          <div class='settings'>
          <div class='header_settings'>Settings</div>
          <div class='info'>
            <div class='label' > Username : </div>
            <div class='user_info'>$username</div>
            <div class='label'>First name :</div>
            <div class='user_info'>$first_name</div>
            <div class='label'>Last name :</div>
            <div class='user_info'>$last_name</div>
            <div class='label'>Email :</div>
            <div class='user_info'>$email</div>
             <form action='../auth/savephoto.inc.php' method='POST' enctype='multipart/form-data' >
                <div class='wrapp'>
                <div class='label'>choose your profile image</div>
               <div class = 'user_info'><label class='lll' for='photo'>CHOOSE</label> <input type='file' name='photo' id='photo'></div>
                </div>
                <input type='submit' name='save' value='save'>
            </form>
          </div>
        </div>
        <script> let button = document.querySelector('.toAdd');
        button.classList.add('ff');</script>
                  ");
        }
        else
        {
          $files = scandir('../note_user/');
          $j=0;
          foreach ($files as $file) {
              $pattern = "/^($username)/";
            if(preg_match($pattern,$file)==1){
              $con=file_get_contents("../note_user/".$file);
              $titre = explode("#",$file);
              for ($i=0; $i < sizeof($titre) ; $i++) { 
                  if($i==1){
                    $titreWithoutEX= explode('.',$titre[$i]) ;
                    for ($i=0; $i <sizeof($titreWithoutEX) ; $i++) { 
                          if($i==0){
                            $real_titre_note = $titreWithoutEX[$i];
                            $j = $j+1;
                          }
                    }
                  }
              }
              
              echo("<div class='note'>
              <div class='note_header'>
              <a id='del$j' class='delete_button'><svg xmlns='http://www.w3.org/2000/svg'  height='24px' viewBox='0 0 24 24' width='24px' ><path d='M0 0h24v24H0V0z' fill='none'/><path d='M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z'/></svg> </a>
              </div><script>
              let deee$j = document.querySelector('#del$j');
              let file_titre$j = '$real_titre_note';
              deee$j.addEventListener('click',function(){
               overlay2.classList.add('to_display');
               delete_note.classList.add('to_display');
       
             let user = '$username'
             let file_name$j = '../note_user/'+user+'#'+file_titre$j+'.txt';
             let in_his = document.querySelector('#to_be_delete');
             in_his.setAttribute('value',file_name$j);
       
              })
              </script>
              <div class='title_note'>$real_titre_note</div>
              <div class='main_note'>$con</div>
              </div>");
            }
         
          }
    
        }

        

      ?>
    
     
    </div>
    <script src="../master_js/script.js"></script>
    
   
    <script> 
      function delete_approve(real_note_titre){
        overlay2.classList.add("to_display");
        delete_note.classList.add("to_display");

      let user = "<?php echo($username) ?>"
      let file_name = '../note_user/'+user+'#'+ real_note_titre+'.txt';
      let in_his = document.querySelector("#to_be_delete");
      in_his.setAttribute('value',file_name);
       
          }
  </script>
</body>
</html>