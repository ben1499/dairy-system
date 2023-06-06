<?php include_once 'header.php' ?>
 <head><title>Milk Order</title></head>
    <div class="container" style="display: flex;">
	
    
        <!-- Create Form -->
        <div class="card border-danger"  style="flex: 1">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Order Today's Nandini Milk</strong>
            </div>
            <div class="card-body">
                <form action="includes/connect_order.php" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Nandini Blue Half liter packet</label>
                            <input type="text" class="form-control"  name="bhalf" placeholder="Blue Half" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Nandini Blue one liter packet</label>
                            <input type="text" class="form-control"  name="blitre" placeholder="Blue One Liter" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Nandini Orange (Special) Half Liter Packet</label>
                            <input type="text" class="form-control"  name="shalf" placeholder="Special Half" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Nandini Orange (Special) One Liter Packet</label>
                            <input type="text" class="form-control"  name="slitre" placeholder="Special One Liter" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Curd Half Liter Packet</label>
                            <input type="text" class="form-control"  name="chalf" placeholder="Curd Half" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Curd One Liter Packet</label>
                            <input type="text" class="form-control" name="clitre" placeholder="Curd One Liter" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Curd 150 Ml Packet</label>
                            <input type="text" class="form-control"  name="cquart" placeholder="Curd 150ml packet" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Samrudi </label>
                            <input type="text" class="form-control" name="samr" placeholder="Samrudi" required>
                        </div>
                    </div>
                        
                    <button type="submit" class="btn btn-success" name="confirm"><i class="fa fa-check-circle"></i> Save</button>
	<div class="clear"></div>
        
    <button type="reset" class="btn btn-success" value="Reset"><i class="fa fa-check-circle"></i>Clear</button>
	<div class="clear"></div>
        
	</div>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
    <?php include_once 'footer.php'; ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

