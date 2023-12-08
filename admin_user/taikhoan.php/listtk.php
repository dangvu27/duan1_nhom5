
<style>
    button{
        width: 90px;
    }
</style>
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                 <h2>Trang thông tin cá nhân </h2>
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            home
                        </div>
                        <div class="box-body" >
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12">
                    
                    <div class="box">
                        <div class="box-header">
                        <h4>Thông tin tài khoản</h4>
                        <div class="container mt-3">       
                                <table class="table table-hover">
                                    <?php extract($listtk) ?>
                                    <tbody>
                                    <tr>
                                        <th>UserName</th>
                                        <td><?php echo"$userName"?></td>
                                    </tr>
                                    <tr>
                                        <th>Pass</th>
                                        <td><?php echo"$pass"?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo " $email" ?></td>
                                    </tr>
                                    <tr>
                                        <th>SDT</th>
                                        <td><?php echo"$SDT"?></td>
                                    </tr>
                                    </tbody>
                                </table>
                             <a href="indexuser.php?act=suatk"><button  type="button" class="btn btn-secondary text-white"> Edit</button></a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>