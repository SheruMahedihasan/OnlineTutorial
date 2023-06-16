
<div class="siderbar fixed-top">
    <div class="Logo_content">
        <div class="logo">
            <img width="45px" src="../images/logo/whitebackground.png" class="navbar-brand">&nbsp; Tutorial Learning</img>
        </div>
        <i id="btn" class="bi bi-list"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="Dashboard.php">
                <i class="bi bi-grid"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li><a href="course.php"><i class="bi bi-list-task"></i><span class="links_name">Course</span> </a><span class="tooltip">Course</span></li>
        <li><a href="Topics.php"><i class="bi bi-journals"></i><span class="links_name">Add Topics</span></a><span class="tooltip">Add Topics</span></li>
        <li><a href="PremiumPacks.php"><i class="bi bi-easel2"></i><span class="links_name">Packs</span></a><span class="tooltip">Packs</span></li>
        <li><a href="payment.php"><i class="bi bi-wallet2"></i><span class="links_name">Payment</span> </a><span class="tooltip">Payment</span></li>
        <li><a href="Messages.php"><i class="bi bi-chat-square"></i><span class="links_name">Messages</span> </a><span class="tooltip">Messages</span></li>
        <li><a href="User.php"><i class="bi bi-wallet2"></i><span class="links_name">User</span> </a><span class="tooltip">User</span></li>
    </ul>
</div>
<script>
    let btn = document.querySelector("#btn");
    let siderbar = document.querySelector(".siderbar");

    btn.onclick = function() {
        siderbar.classList.toggle("active");
    }
</script>