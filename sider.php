<div class="sider">
  <section class="adim">
    <div class="row">
      <div class="col-2">
        <?php
        $sql = "Select * from Topicsa";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        
        ?>
        <div id="list-example" class="list-group">
          <h1 class="list-group-item list-group-item-action fs-5">JAVA</h1>
          
          <?php while ($row = $result->fetch_assoc()) { ?>
          <a class="list-group-item list-group-item-action fs-5" href="<?php echo $menu['Topics_url']; ?>"> <?php echo $menu['Topics_Name']; ?> </a>
        <?php }?>
        </div>
        <?php }?>
      </div>
    </div>
  </section>
</div>