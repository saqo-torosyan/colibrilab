<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?=base_url('admin/get_page/contacts')?>">contacts</a></li>
            <li><a href="<?=base_url('admin/get_page/portfolio')?>">portfolio</a></li>
            <li><a href="<?=base_url('admin/get_page/home')?>">home</a></li>
            <li><a href="<?=base_url('admin/get_page/about')?>">about</a></li>
            <li><a href="<?=base_url('admin/get_page/services')?>">services</a></li>
            </li>
            <li><a href="<?=base_url('admin/get_page/team')?>">team</a></li>
            <li><a href="<?=base_url('admin/get_page/team_social_admin')?>">team_social_admin</a></li>
          </ul>
        </div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div>
          <h2 class="sub-header">Section title // <?php
                      if(isset($_SESSION['cat'])){
                           echo $_SESSION['cat'];
                      }?> </h2>
          
          </div>

