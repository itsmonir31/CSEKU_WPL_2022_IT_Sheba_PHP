                <?php
                if (isset($_SESSION['edit_msg'])){ ?>
                  <div class="alert alert-<?=$_SESSION['edit_msg_type']?>">
                <?php
                  echo $_SESSION['edit_msg'];
                  unset($_SESSION['edit_msg']);
                  unset($_SESSION['edit_msg_type']);
                ?>
                  </div>
                <?php }?>