<div class="col-lg-6 mb-4">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
    <form action="#" method="POST">
    <div class="form-group">
        <input type="number" name="num" class="form-control item" id="num">
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-primary create-account">Show</button>
    </div>
</div>
</div>
</div>
       <?php 
            if(isset['sumbit']){
                $num = $r->input('num');
                $i = 0;
                $j = 1;
                if($num <= 0)
                    {
                         echo "No result found";
                    }
                        echo $i;
                        echo $j;
            for($k = 0 ; $k < $num ; $k++)
                    {
                        $l = $i + $j;
                        echo $l;
                        $i = $j;
                        $j = $l;
                    }
            }
            ?>
